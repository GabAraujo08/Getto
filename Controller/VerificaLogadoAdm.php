<?PHP
    session_start();

    if(!isset($_SESSION['idAdministrador'])){
        header('Location: ../Login/login.php');
    }
?>