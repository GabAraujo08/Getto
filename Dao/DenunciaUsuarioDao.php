<?PHP
    require_once 'GlobalDao.php';

    class DenunciaUsuarioDao{
        public static function cadastrar($du){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbDenunciaUsuario(idUsuario, tipoUsuario, idDenuncia)
                            VALUES(?, ?, ?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $du->getIdUsuario());
            $prepareStatement->bindValue(2, $du->getTipoUsuario());
            $prepareStatement->bindValue(3, $du->getIdDenuncia());
            $prepareStatement->execute();
            return 'Cadastrou';
        }

        public static function ListaDenunciado($idDenuncia){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT tbUsuario.nomeUsuario, tbUsuario.nicknameUsuario, tbUsuario.fotoPerfilUsuario, tbUsuario.nivelContaUsuario, tbUsuario.emailUsuario
            FROM tbDenunciaUsuario
            INNER JOIN tbUsuario ON tbUsuario.idUsuario = tbDenunciaUsuario.idUsuario
            WHERE tbDenunciaUsuario.tipoUsuario = "Denunciado" AND tbDenunciaUsuario.idDenuncia = ?');
            $consulta->bindValue(1, $idDenuncia);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        }
        public static function ListaDenunciador($idDenuncia){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT tbUsuario.nomeUsuario, tbUsuario.nicknameUsuario, tbUsuario.fotoPerfilUsuario, tbUsuario.nivelContaUsuario, tbUsuario.emailUsuario
            FROM tbDenunciaUsuario
            INNER JOIN tbUsuario ON tbUsuario.idUsuario = tbDenunciaUsuario.idUsuario
            WHERE tbDenunciaUsuario.tipoUsuario = "Denunciador" AND tbDenunciaUsuario.idDenuncia = ?');
            $consulta->bindValue(1, $idDenuncia);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        }
    }
?>