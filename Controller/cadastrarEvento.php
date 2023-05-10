<?php
    require_once 'GlobalController.php';
    session_start();

    $evento = new Evento();

    $evento->setHorarioInicioEvento($_POST['quantidadeCurtidas']);
    $evento->setDataEvento($_POST['descPublicacao']);
    $evento->setConfirmarEvento($_POST['tituloPublicacao']);
    $evento->setDescEvento($_POST['statusPublicacao']);
    $evento->setTituloEvento($_POST['quantidadeCurtidas']);
    $evento->setStatusEvento($_POST['descPublicacao']);
    $evento->setLogradouroEvento($_POST['tituloPublicacao']);
    $evento->setImagemEvento($_POST['statusPublicacao']);
    $evento->setNumLogEvento($_POST['quantidadeCurtidas']);
    $evento->setCepEvento($_POST['descPublicacao']);
    $evento->setBairroEvento($_POST['tituloPublicacao']);
    $evento->setCidadeEvento($_POST['statusPublicacao']);
    $evento->setEstadoEvento($_POST['statusPublicacao']);
   
    EventoDao::cadastrar($evento);
