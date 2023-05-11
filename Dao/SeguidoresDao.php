<?PHP
    require_once 'GlobalDao.php';

    class SeguidoresDao{
        public static function cadastrar($s){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbSeguidores (idUsuario, idArtista)
                            VALUES(?, ?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $s->getIdUsuario());
            $prepareStatement->bindValue(2, $s->getIdArtista());
            $prepareStatement->execute();
            return 'Cadastrou';
        }
        public static function consultarSeguidores($artista){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT COUNT(*) as total_seguidores FROM tbSeguidores WHERE idArtista = ? GROUP BY idArtista');
            $consulta->bindValue(1, $artista);
            $consulta->execute();
            $resultado = $consulta->fetch();
            
            if($resultado == false){
                $nada = 0;
                return $nada;
            }else{
                return $resultado['total_seguidores'];
            }
            
           
        }
        public static function consultarSeguindo($artista){
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
            
        }
    }
?>