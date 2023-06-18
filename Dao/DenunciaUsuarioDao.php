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
    }
?>