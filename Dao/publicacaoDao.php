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
                $consulta = $conexao->prepare('SELECT tbUsuario.nicknameUsuario,  tbUsuario.fotoPerfilUsuario, tbPublicacao.descPublicacao, tbMidia.arquivoMidia, TIMESTAMPDIFF(MINUTE, tbPublicacao.horarioPublicacao, NOW()) as minutosPublicacao FROM tbPublicacao
                                                   INNER JOIN tbArtista ON tbArtista.idArtista = tbPublicacao.idArtista
                                                   INNER JOIN tbUsuario ON tbUsuario.idUsuario = tbArtista.idUsuario
                                                   INNER JOIN tbMidiaPublicacao ON tbMidiaPublicacao.idPublicacao = tbPublicacao.idPublicacao
                                                   INNER JOIN tbMidia ON tbMidiaPublicacao.idMidia = tbMidia.idMidia
                                                   ORDER BY tbPublicacao.horarioPublicacao DESC');
                $consulta->execute();
                $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
                
                return $resultado;
            
        }
        public static function ListaMinhasPublicacao($id){
            
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT tbUsuario.nicknameUsuario,  tbUsuario.fotoPerfilUsuario, tbPublicacao.descPublicacao, tbMidia.arquivoMidia, TIMESTAMPDIFF(MINUTE, tbPublicacao.horarioPublicacao, NOW()) as minutosPublicacao FROM tbPublicacao
                                               INNER JOIN tbArtista ON tbArtista.idArtista = tbPublicacao.idArtista
                                               INNER JOIN tbUsuario ON tbUsuario.idUsuario = tbArtista.idUsuario
                                               INNER JOIN tbMidiaPublicacao ON tbMidiaPublicacao.idPublicacao = tbPublicacao.idPublicacao
                                               INNER JOIN tbMidia ON tbMidiaPublicacao.idMidia = tbMidia.idMidia
                                               INNER JOIN tbSeguidores ON tbSeguidores.idUsuario = tbUsuario.idUsuario
                                               WHERE tbUsuario.idUsuario = ?
                                               ORDER BY tbPublicacao.horarioPublicacao DESC
                                               ');
            $consulta->bindValue(1, $id);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            
            return $resultado;
        }
        public static function ListaPublicacaoSegui($id){
            
            $conexao = Conexao::conectar();

            $query = $conexao->prepare('SELECT idArtista FROM tbSeguidores WHERE idUsuario =?');
            $query->bindValue(1, $id);
             $query->execute();
            $resultado1 = $query->fetchAll(PDO::FETCH_ASSOC);
            
            $countResu1 = count($resultado1);
            $resultado = [];

            for($i = 0; $i < $countResu1; $i ++){
                $consulta = $conexao->prepare('SELECT tbUsuario.nicknameUsuario,  tbUsuario.fotoPerfilUsuario, tbPublicacao.idPublicacao, tbPublicacao.descPublicacao, tbMidia.arquivoMidia, TIMESTAMPDIFF(MINUTE, tbPublicacao.horarioPublicacao, NOW()) as minutosPublicacao FROM tbPublicacao
                                INNER JOIN tbArtista ON tbArtista.idArtista = tbPublicacao.idArtista
                                INNER JOIN tbUsuario ON tbUsuario.idUsuario = tbArtista.idUsuario
                                INNER JOIN tbMidiaPublicacao ON tbMidiaPublicacao.idPublicacao = tbPublicacao.idPublicacao
                                INNER JOIN tbMidia ON tbMidiaPublicacao.idMidia = tbMidia.idMidia
                                WHERE tbPublicacao.idArtista = ?
                                ORDER BY tbPublicacao.horarioPublicacao DESC
                                ');
                $consulta->bindValue(1, $resultado1[$i]['idArtista']);
                $consulta->execute();
                $resultado2 = $consulta->fetchAll(PDO::FETCH_ASSOC);

                $resultado = array_merge($resultado, $resultado2);
            }
            return $resultado;
           
        }
        public static function Curtir($id){
            $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbPublicacao
                            SET quantidadeCurtidas = quantidadeCurtidas + 1
                            WHERE idPublicacao = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $id);
            $prepareStatement->execute();
            return 'Atualizou';
        }
}