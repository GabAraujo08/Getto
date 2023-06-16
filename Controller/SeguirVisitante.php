<?PHP
    require_once 'GlobalController.php';
    session_start();

    if(isset($_SESSION['idArtista'])){
        header('Location: ../Perfil/PerfilVisitante/perfilMostrarUsuario.php');
    }else{
        header('Location: ../Perfil/PerfilVisitante/perfilMostrarUsuario.php');
    }

    $s = new Seguidores();
    $s->setIdArtista($_POST['idArtista']);
    $s->setIdUsuario($_POST['idUsuario']);
    SeguidoresDao::cadastrar($s);
?>