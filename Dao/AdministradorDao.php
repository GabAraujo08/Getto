<?PHP
    require_once 'GlobalDao.php';
    class AdministradorDao{
        public static function consultarAdministrador($administrador){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT * FROM tbAdministrador WHERE loginAdministrador = ?');
            $consulta->bindValue(1, $administrador);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
            
            return $resultado;
        }

        public static function atualizarSenhaAdm($adm){
            $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbAdministrador
                            SET senhaAdministrador = ?
                            WHERE idAdministrador = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $adm->getSenhaAdministrador());
            $prepareStatement->bindValue(2, $adm->getIdAdministrador());

            $prepareStatement->execute();
            return 'Atualizou';
        }

    }
?>