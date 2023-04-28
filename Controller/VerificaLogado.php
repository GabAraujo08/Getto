<?PHP
    session_start();

    if(!isset($_SESSION['idUsuario'])){
        header('Location: ../Login/login.php');
    }
?>