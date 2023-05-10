<?PHP
    require_once 'GlobalDao.php';

    class PublicacaoDao{

        public static function cadastrar($publicacao){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbPublicacao(idArtista, quantidadeCurtidas, descPublicacao, statusPublicacao, idTipoArte)
                            VALUES(?, ?, ?, ?, ?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $publicacao->getIdArtista());
            $prepareStatement->bindValue(2, $publicacao->getQuantidadeCurtidas());
            $prepareStatement->bindValue(3, $publicacao->getDescPublicacao());
            $prepareStatement->bindValue(4, $publicacao->getStatusPublicacao());
            $prepareStatement->bindValue(5, $publicacao->getIdTipoArte());
            $prepareStatement->execute();
            return 'Cadastrou'; 
        }

        public static function consultarPublicacao($publicacao){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idPublicacao FROM tbPublicacao WHERE descPublicacao LIKE '".$publicacao->getDescPublicacao()."'";
            $resultado = $conexao->query($querySelect); 
            return $resultado; 
        }
}