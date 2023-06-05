<?PHP
    require_once 'GlobalDao.php';

    class DenunciaDao{
        public static function cadastrar($denuncia){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbDenuncia(statusDenuncia, descDenuncia, idTipoDenuncia)
                            VALUES(?, ?, ?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $denuncia->getStatusDenuncia());
            $prepareStatement->bindValue(2, $denuncia->getDescDenuncia());
            $prepareStatement->bindValue(3, $denuncia->getIdTipoDenuncia());
            $prepareStatement->execute();
            return 'Cadastrou';
        }
    }
?>