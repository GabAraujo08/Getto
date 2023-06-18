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


        public static function UsuariosTotais(){
            
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT COUNT(*) as totalUsuarios FROM tbUsuario');
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
            
            if ($resultado === false) {
                $totalUsuarios = 0;
            } else {
                $totalUsuarios = $resultado['totalUsuarios'];
            }
            
            return $totalUsuarios;
           
        }
        

        public static function ArtistasTotais(){
            
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT COUNT(*) as totalArtistas FROM tbArtista');
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
            
            if ($resultado === false) {
                $totalArtistas = 0;
            } else {
                $totalArtistas = $resultado['totalArtistas'];
            }
            
            return $totalArtistas;
           
        }


        public static function EventosTotais(){
            
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT COUNT(*) as totalEventos FROM tbEvento');
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
            
            if ($resultado === false) {
                $totalEventos = 0;
            } else {
                $totalEventos = $resultado['totalEventos'];
            }
            
            return $totalEventos;
           
        }
        


        public static function PublicacaoTotais(){
            
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT COUNT(*) as totalPublicacao FROM tbPublicacao');
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
            
            if ($resultado === false) {
                $totalPublicacao = 0;
            } else {
                $totalPublicacao = $resultado['totalPublicacao'];
            }
            
            return $totalPublicacao;
           
        }
    }
?>