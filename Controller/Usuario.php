<?PHP
    require_once 'GlobalController.php';
    header('Location: ../Login/login.php');

    $a = $_POST['senhaVisitante'];
    $b = $_POST['confirmarSenhaVisitante'];


        $usuario = new Usuario();

        $usuario->setNomeUsuario($_POST['nomeVisitante']);
        $usuario->setNicknameUsuario($_POST['nicknameVisitante']);
        $usuario->setEmailUsuario($_POST['emailVisitante']);
        $usuario->setEstadoUsuario($_POST['estadoVisitante']);
        $usuario->setCidadeUsuario($_POST['cidadeVisitante']);
        $usuario->setFoneUsuario($_POST['foneVisitante']);
        $usuario->setSenhaUsuario(password_hash($_POST['senhaVisitante'], PASSWORD_DEFAULT));
        $usuario->setFotoPerfilUsuario('0.png');
        $usuario->setStatusContaUsuario('Normal');
        $usuario->setPapelParedeUsuario('papel-parede.svg');
        $usuario->setNivelContaUsuario(1);
        
        UsuarioDao::cadastrar($usuario);
    
        if(isset($_POST['generoArtista'])){
            $usuario->setIdUsuario(UsuarioDao::consultarIdUsuario($usuario));
            $nome = $_FILES['fotoPerfil']['name'];
            $tipo = $_FILES['fotoPerfil']['type'];
            $tamanho = $_FILES['fotoPerfil']['size'];
            $arquivo = $_FILES['fotoPerfil']['tmp_name'];
    
            $extensao = substr($nome, -4);
            $nomenovo = $usuario->getIdUsuario().$extensao;
    
            move_uploaded_file($arquivo, "../Perfil/PerfilArtista/assets/img/FotoPerfil/".$nomenovo);
            $usuario->setFotoPerfilUsuario($nomenovo);
            UsuarioDao::atualizarFotoUsuario($usuario);
    
            $artista = new Artista();
    
            $artista->setGeneroArtista($_POST['generoArtista']);
            $artista->setPortfolioArtista($_POST['portfolio']);
            $artista->setBioArtista('');
            $artista->setUsuario(UsuarioDao::consultarIdUsuario($usuario));
            ArtistaDao::cadastrar($artista); 
    
            $novoNivel = 2;
            $usuario->setNivelContaUsuario($novoNivel);
            UsuarioDao::atualizarNivelContaUsuario($usuario);
    
            $usuario->setStatusContaUsuario('em Verificação');
            UsuarioDao::atualizarStatusContaUsuario($usuario);
    
        }

?>