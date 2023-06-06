<?php
    require_once 'GlobalController.php';

    session_start();

    $presenca = new Presenca();
    $presenca->setIdEvento($_POST['idEvento']);
    $presenca->setIdUsuario($_SESSION['idUsuario']);

    PresencaDao::cadastrar($ConPresenca);
    if(isset($_SESSION['idArtista'])){
        header('Location: ../Perfil/PerfilArtista/Feed/feed.php');
    }else{
        header('Location: ../Perfil/PerfilVisitante/Feed/feed.php');  
    }
    
    
?>