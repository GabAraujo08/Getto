<?PHP
    require_once 'GlobalDao.php';
    
    class MidiaDao{
        public static function cadastrar($midia){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbMidia (arquivoMidia, idTipoMidia)
                            VALUES(?, ?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $midia->getArquivoMidia());
            $prepareStatement->bindValue(2, $midia->getIdTipoMidia());
            $prepareStatement->execute();
            return 'Cadastrou'; 
        }
        public static function consultarIdMidia($midia){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idMidia FROM tbMidia WHERE arquivoMidia LIKE '".$midia->getArquivoMidia()."'";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $midia)
                $id = $midia['idMidia'];
            return $id;   
        }

        public static function atualizarArquivo($midia){
            $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbMidia
                            SET arquivoMidia = ?
                            WHERE idMidia = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $midia->getArquivoMidia());
            $prepareStatement->bindValue(2, $midia->getIdMidia());

            $prepareStatement->execute();
            return 'Atualizou';
        }
    }
?>