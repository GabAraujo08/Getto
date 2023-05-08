<?PHP
    require_once 'GlobalDao.php';

    class PublicacaoDao{

        public static function cadastrar($publicacao){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbPublicacao(horarioPublicacao, quantidadeCurtidas, descPublicacao, tituloPublicacao, statusPublicacao)
                            VALUES(?, ?, ?, ?, ?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $publicacao->getHorarioPublicacao());
            $prepareStatement->bindValue(2, $publicacao->getQuantidadeCurtidas());
            $prepareStatement->bindValue(3, $publicacao->getDescPublicacao());
            $prepareStatement->bindValue(4, $publicacao->getTituloPublicacao());
            $prepareStatement->bindValue(5, $publicacao->getStatusPublicacao());
            $prepareStatement->execute();
            return 'Cadastrou'; 
        }
    }