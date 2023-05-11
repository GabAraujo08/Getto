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
    }
?>