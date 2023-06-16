<?php
    require_once 'GlobalController.php';
    
    session_start();

    if(isset($_SESSION['idArtista'])){
        header('Location: ../Perfil/PerfilVisitante/Feed/feed.php');
    }else{
        header('Location: ../Perfil/PerfilVisitante/Feed/feed.php');  
    } 

    $c = new Comentario();

    $c->setComentario($_POST['comentario']);
    $c->setNumCurtidaComentario(0);
    $c->setStatusComentario('Normal');
    $c->setIdPublicacao($_POST['idPubli']);
    $c->setIdUsuario($_POST['idUsua']);

    ComentarioDao::cadastrar($c);

    
?>