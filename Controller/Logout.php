<?PHP
    header('Location: ../Login/login.php');
    session_start();
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

    if(isset($_SESSION['idArtista'])){
        unset($_SESSION['idArtista']);
        unset($_SESSION['bioArtista']);
        unset($_SESSION['generoArtista']);
    }

    session_destroy();
?>