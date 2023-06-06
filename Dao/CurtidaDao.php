<?PHP
    require_once 'GlobalDao.php';

    class CurtidaDao{
        public static function cadastrar($c){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbCurtida (idUsuario, idPublicacao)
                            VALUES(?, ?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $c->getIdUsuario());
            $prepareStatement->bindValue(2, $c->getIdPublicacao());
            $prepareStatement->execute();
            return 'Cadastrou';
        }

        public static function consultarCurtida($idpub){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT COUNT(*) as totalCurtida FROM tbCurtida WHERE idPublicacao = ?');
            $consulta->bindValue(1, $idpub);
            $consulta->execute();
            $resultado = $consulta->fetch();
            
            if($resultado == false){
                $nada = 0;
                return $nada;
            }else{
                return $resultado['totalCurtida'];
            }
            
           
        }

        public static function QuantCurtidaTotais($id){
            
            $conexao = Conexao::conectar();


            $query = $conexao->prepare('SELECT idPublicacao FROM tbPublicacao WHERE idArtista =?');
            $query->bindValue(1, $id);
             $query->execute();
            $resultado1 = $query->fetchAll(PDO::FETCH_ASSOC);

            
            $countResu1 = count($resultado1);
            $resultado = [];

            for($i = 0; $i < $countResu1; $i ++){
                $consulta = $conexao->prepare('SELECT COUNT(idCurtida) as quantidade FROM tbCurtida
                                WHERE idPublicacao = ?
                                ');
                $consulta->bindValue(1, $resultado1[$i]['idPublicacao']);
                $consulta->execute();
                $resultado2 = $consulta->fetchAll(PDO::FETCH_ASSOC);

                $resultado = array_merge($resultado, $resultado2);
            }
            return $resultado;
           
        }
        
        /*public static function consultarSeguindo($artista){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT COUNT(*) as total_seguindo FROM tbSeguidores WHERE idUsuario = ? GROUP BY idUsuario');
            $consulta->bindValue(1, $artista);
            $consulta->execute();
            $resultado = $consulta->fetch();
            
            if($resultado == false){
                $nada = 0;
                return $nada;
            }else{
                return $resultado['total_seguindo'];
            }
            
        }*/
    }
?>