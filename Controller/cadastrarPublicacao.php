<?php
    require_once 'GlobalController.php';
    session_start();

    $publicacao = new Publicacao();

    $publicacao->setIdArtista($_SESSION['idArtista']);
    $publicacao->setIdTipoArte($_POST['tipoArte']);
    $publicacao->setQuantidadeCurtidas($_POST['quantidadeCurtidas']);
    $publicacao->setDescPublicacao($_POST['descPublicacao']);
    $publicacao->setTituloPublicacao($_POST['tituloPublicacao']);
    $publicacao->setStatusPublicacao($_POST['statusPublicacao	']);

    
   PublicacaoDao::cadastrar($publicacao);
?>