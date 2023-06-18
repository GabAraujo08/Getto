<?PHP
   require_once 'GlobalController.php';
   $previousPage = $_SERVER['HTTP_REFERER'];
   header('Location: ' . $previousPage);

    session_start();
    

    if(isset($_SESSION['idArtista'])){
        ArtistaDao::deletar($_SESSION['idArtista']);
        unset($_SESSION['idArtista']);
        unset($_SESSION['bioArtista']);
        unset($_SESSION['generoArtista']);
    }

    UsuarioDao::deletar($_SESSION['idUsuario']);

    unset($_SESSION['idUsuario']);
    unset($_SESSION['nomeUsuario']);
    unset($_SESSION['nicknameUsuario']);
    unset($_SESSION['emailUsuario']);
    unset($_SESSION['senhaUsuario']);
    unset($_SESSION['estadoUsuario']);
    unset($_SESSION['cidadeUsuario']);
    unset($_SESSION['foneUsuario']);
    unset($_SESSION['papelParedeUsuario']);
    unset($_SESSION['nivelContaUsuario']);
    unset($_SESSION['fotoPerfilUsuario']);

    session_destroy();
?>