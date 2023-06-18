<?php
    require_once 'GlobalController.php';
    
    session_start();

    $previousPage = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $previousPage);

    $c = new Comentario();

    $c->setComentario($_POST['comentario']);
    $c->setNumCurtidaComentario(0);
    $c->setStatusComentario('Normal');
    $c->setIdPublicacao($_POST['idPubli']);
    $c->setIdUsuario($_POST['idUsua']);

    ComentarioDao::cadastrar($c);

    
?>