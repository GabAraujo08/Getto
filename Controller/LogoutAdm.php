<?PHP
    header('Location: ../Administrador/login-adm.php');
    session_start();
    unset($_SESSION['ideAdministrador']);
    unset($_SESSION['nomeAdministrador']);
    unset($_SESSION['emailAdministrador']);
    unset($_SESSION['foneAdministrador']);
    unset($_SESSION['loginAdministrador']);

    session_destroy();
?>