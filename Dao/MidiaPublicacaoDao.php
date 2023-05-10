<?PHP
    require_once 'GlobalDao.php';

    class MidiaPublicacaoDao{
        public static function cadastrar($mp){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbMidiaPublicacao (idPublicacao, idMidia)
                            VALUES(?, ?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $mp->getIdPublicacao());
            $prepareStatement->bindValue(2, $mp->getIdMidia());
            $prepareStatement->execute();
            return 'Cadastrou';
        }
    }
?>