<?PHP
    require_once 'GlobalDao.php';

    class PresencaDao{
        public static function cadastrar($c){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbPresenca (idUsuario, idEvento)
                            VALUES(?, ?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $c->getIdUsuario());
            $prepareStatement->bindValue(2, $c->getIdEvento());
            $prepareStatement->execute();
            return 'Cadastrou';
        }

        public static function consultar($idEve){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT COUNT(*) as totalConfirmarPresenca FROM tbPresenca WHERE idEvento = ?');
            $consulta->bindValue(1, $idEve);
            $consulta->execute();
            $resultado = $consulta->fetch();
            
            if($resultado == false){
                $nada = 0;
                return $nada;
            }else{
                return $resultado['totalConfirmarPresenca'];
            }
            
           
        }

        public static function QuantPresencaTotais($id){
            
            $conexao = Conexao::conectar();


            $query = $conexao->prepare('SELECT idEvento FROM tbEvento WHERE idArtista =?');
            $query->bindValue(1, $id);
             $query->execute();
            $resultado1 = $query->fetchAll(PDO::FETCH_ASSOC);

            
            $countResu1 = count($resultado1);
            $resultado = [];

            for($i = 0; $i < $countResu1; $i ++){
                $consulta = $conexao->prepare('SELECT COUNT(idPresenca) as quantidade FROM tbPresenca
                                WHERE idEvento = ?
                                ');
                $consulta->bindValue(1, $resultado1[$i]['idEvento']);
                $consulta->execute();
                $resultado2 = $consulta->fetchAll(PDO::FETCH_ASSOC);

                $resultado = array_merge($resultado, $resultado2);
            }
            return $resultado;
           
        }
    }
?>