<?PHP
    require_once 'GlobalDao.php';

    class UsuarioDao{

        public static function cadastrar($usuario){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbUsuario(nomeUsuario, nicknameUsuario, emailUsuario, senhaUsuario, estadoUsuario, cidadeUsuario, foneUsuario, papelParedeUsuario, statusContaUsuario, fotoPerfilUsuario, nivelContaUsuario)
                            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $usuario->getNomeUsuario());
            $prepareStatement->bindValue(2, $usuario->getNicknameUsuario());
            $prepareStatement->bindValue(3, $usuario->getEmailUsuario());
            $prepareStatement->bindValue(4, $usuario->getSenhaUsuario());
            $prepareStatement->bindValue(5, $usuario->getEstadoUsuario());
            $prepareStatement->bindValue(6, $usuario->getCidadeUsuario());
            $prepareStatement->bindValue(7, $usuario->getFoneUsuario());
            $prepareStatement->bindValue(8, $usuario->getPapelParedeUsuario());
            $prepareStatement->bindValue(9, $usuario->getStatusContaUsuario());
            $prepareStatement->bindValue(10, $usuario->getFotoPerfilUsuario());
            $prepareStatement->bindValue(11, $usuario->getNivelContaUsuario());
            $prepareStatement->execute();
            return 'Cadastrou';
        }

        public static function consultarIdUsuario($usuario){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idUsuario FROM tbUsuario WHERE nomeUsuario LIKE '".$usuario->getNomeUsuario()."'";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $usuario)
                $id = $usuario['idUsuario'];
            return $id;   
        }

        public static function atualizarFotoUsuario($usuario){
            $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbUsuario
                            SET fotoPerfilUsuario = ?
                            WHERE idUsuario = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $usuario->getFotoPerfilUsuario());
            $prepareStatement->bindValue(2, $usuario->getIdUsuario());

            $prepareStatement->execute();
            return 'Atualizou';
        }

        public static function consultarLogin($usuario){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT * FROM tbUsuario WHERE emailUsuario = ?');
            $consulta->bindValue(1, $usuario);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
            
            return $resultado;
        }

        public static function deletar($usuario){
            $conexao = Conexao::conectar();
            $delete = $conexao->prepare("DELETE FROM tbUsuario WHERE idUsuario = ?");
            $delete->bindValue(1, $usuario);
            $delete->execute();

            return 'Deletou';
        }

        public static function atualizarPapelParedeUsuario($usuario){
            $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbUsuario
                            SET papelParedeUsuario = ?
                            WHERE idUsuario = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $usuario->getPapelParedeUsuario());
            $prepareStatement->bindValue(2, $usuario->getIdUsuario());

            $prepareStatement->execute();
            return 'Atualizou';
        }

        public static function atualizarNivelContaUsuario($usuario){
            $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbUsuario
                            SET nivelContaUsuario = ?
                            WHERE idUsuario = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $usuario->getNivelContaUsuario());
            $prepareStatement->bindValue(2, $usuario->getIdUsuario());

            $prepareStatement->execute();
            return 'Atualizou';
        }

        public static function atualizarStatusContaUsuario($usuario){
            $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbUsuario
                            SET statusContaUsuario = ?
                            WHERE idUsuario = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $usuario->getStatusContaUsuario());
            $prepareStatement->bindValue(2, $usuario->getIdUsuario());

            $prepareStatement->execute();
            return 'Atualizou';
        }

        public static function ListaVerificação(){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT tbArtista.idUsuario, tbUsuario.nomeUsuario, tbUsuario.emailUsuario, tbUsuario.nicknameUsuario,  tbUsuario.fotoPerfilUsuario, tbArtista.portfolio FROM tbUsuario 
                                            INNER JOIN tbArtista ON tbArtista.idUsuario = tbUsuario.idUsuario
                                            WHERE statusContaUsuario = ?');
            $consulta->bindValue(1, 'em Verificação');
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            
            return $resultado;
        }
       
        public static function atualizaCadastroUsuario($usuario){
            $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbUsuario
                            SET nomeUsuario = ?
                            ,nicknameUsuario = ?
                            ,foneUsuario = ?
                            ,estadoUsuario = ?
                            ,cidadeUsuario = ?
                            WHERE idUsuario = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $usuario->getNomeUsuario());
            $prepareStatement->bindValue(2, $usuario->getNicknameUsuario());
            $prepareStatement->bindValue(3, $usuario->getFoneUsuario());
            $prepareStatement->bindValue(4, $usuario->getEstadoUsuario());
            $prepareStatement->bindValue(5, $usuario->getCidadeUsuario());
            $prepareStatement->bindValue(6, $usuario->getIdUsuario());

            $prepareStatement->execute();
            return 'Atualizou';
        }
    }  
?>
