<?php
    require_once 'GlobalController.php';

    session_start();

    $curtida = new Curtida();
    $curtida->setIdPublicacao($_POST['idPublicacao']);
    $curtida->setIdUsuario($_SESSION['idUsuario']);

    CurtidaDao::cadastrar($curtida);
    if(isset($_SESSION['idArtista'])){
        header('Location: ../Perfil/PerfilArtista/Feed/feed.php');
    }else{
        header('Location: ../Perfil/PerfilVisitante/Feed/feed.php');  
    }
    
    
?>

