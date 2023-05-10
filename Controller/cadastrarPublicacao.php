<?php
    require_once 'GlobalController.php';
    session_start();

    $publicacao = new Publicacao();

    $publicacao->setIdArtista($_SESSION['idArtista']);
    $publicacao->setIdTipoArte($_POST['idTipoArte']);
    $publicacao->setQuantidadeCurtidas(0);
    $publicacao->setDescPublicacao($_POST['descPub']);
    $publicacao->setStatusPublicacao('Normal');   
    PublicacaoDao::cadastrar($publicacao);


    $midia = new Midia();
    $nome = $_FILES['arquivo']['name'];
    $tipo = $_FILES['arquivo']['type'];
    $tamanho = $_FILES['arquivo']['size'];
    $arquivo = $_FILES['arquivo']['tmp_name'];

    $extensao = substr($nome, -4);
    $nomenovo = $tag->getIdTipoArte().$extensao;

    move_uploaded_file($arquivo, "../assets/img/imgTag/".$nomenovo);
    $tag->setImagemTipoArte($nomenovo);
?>