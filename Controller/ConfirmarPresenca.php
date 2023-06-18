<?php
    require_once 'GlobalController.php';

    session_start();

    $presenca = new Presenca();
    $presenca->setIdEvento($_POST['idEvento']);
    $presenca->setIdUsuario($_SESSION['idUsuario']);

    PresencaDao::cadastrar($presenca);
    
    $previousPage = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $previousPage);

    
    
?>