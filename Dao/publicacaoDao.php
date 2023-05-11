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
        public static function consultarId($publicacao){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idPublicacao FROM tbPublicacao WHERE descPublicacao LIKE '".$publicacao->getDescPublicacao()."'";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $publicacao)
                $id = $publicacao['idPublicacao'];
            return $id;   
        }
        public static function ListaPublicacao(){
            
                $conexao = Conexao::conectar();
                $consulta = $conexao->prepare('SELECT tbUsuario.nicknameUsuario,  tbUsuario.fotoPerfilUsuario, tbPublicacao.descPublicacao, tbMidia.arquivoMidia, tbPublicacao.horarioPublicacao FROM tbPublicacao
                                                   INNER JOIN tbArtista ON tbArtista.idArtista = tbPublicacao.idArtista
                                                   INNER JOIN tbUsuario ON tbUsuario.idUsuario = tbArtista.idUsuario
                                                   INNER JOIN tbMidiaPublicacao ON tbMidiaPublicacao.idPublicacao = tbPublicacao.idPublicacao
                                                   INNER JOIN tbMidia ON tbMidiaPublicacao.idMidia = tbMidia.idMidia
                                                   ORDER BY tbPublicacao.horarioPublicacao');
                $consulta->execute();
                $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
                
                return $resultado;
            
        }
}