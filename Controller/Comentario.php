<?php
    $c = new Comentario();

    $c->setComentario($_POST['comentario']);
    $c->setNumCurtidaComentario(0);
    $c->setStatusComentario('Normal');
    $c->setIdPublicacao($_POST['idPubli']);
    $c->setIdUsuario($_POST['idUsua']);

    
?>