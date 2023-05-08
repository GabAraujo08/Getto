<?php
    require_once 'GlobalController.php';

    $publicacao = new Publicacao();

    $publicacao->setHorarioPublicacao($_POST['horarioPublicacao']);
    $publicacao->setQuantidadeCurtidas($_POST['quantidadeCurtidas']);
    $publicacao->setDescPublicacao($_POST['descPublicacao']);
    $publicacao->setTituloPublicacao($_POST['tituloPublicacao']);
    $publicacao->setStatusPublicacao($_POST['statusPublicacao	']);

    
   PublicacaoDao::cadastrar($publicacao);
?>