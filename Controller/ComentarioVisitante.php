<?php
    require_once 'GlobalController.php';
    
    session_start();


    $c = new Comentario();

    $c->setNumCurtidaComentario(0);
    $c->setStatusComentario('Normal');
    $c->setIdPublicacao($_POST['idPubli']);
    $c->setIdUsuario($_POST['idUsua']);

    ComentarioDao::cadastrar($c);




    if(isset($_SESSION['idArtista'])){
        header('Location: ../Perfil/PerfilVisitante/Feed/feed.php');

    ComentarioDao::cadastrar($c);
    }else{
        header('Location: ../PerfilVisitante/Feed/feed.php');
    }
    ?>