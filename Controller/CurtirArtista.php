<?php
    require_once 'GlobalController.php';

    session_start();

    $curtida = new Curtida();
    $curtida->setIdPublicacao($_POST['idPublicacao']);
    $curtida->setIdUsuario($_SESSION['idUsuario']);

    CurtidaDao::cadastrar($curtida);

    
?>

