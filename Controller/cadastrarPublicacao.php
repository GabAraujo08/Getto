<?php
    require_once 'GlobalController.php';
    session_start();
    header('Location: ../Perfil/PerfilArtista/perfil.php');

    $publicacao = new Publicacao();

    $publicacao->setIdArtista($_SESSION['idArtista']);
    $publicacao->setIdTipoArte($_POST['idTipoArte']);
    $publicacao->setDescPublicacao($_POST['descPub']);
    $publicacao->setStatusPublicacao('Normal');   
    PublicacaoDao::cadastrar($publicacao);


    $midia = new Midia();
    $midia->setArquivoMidia(' ');
    $midia->setIdTipoMidia($_POST['idTipoMidia']);
    MidiaDao::cadastrar($midia);
    $midia->setIdMidia(MidiaDao::consultarIdMidia($midia));
    $nome = $_FILES['arquivo']['name'];
    $tipo = $_FILES['arquivo']['type'];
    $tamanho = $_FILES['arquivo']['size'];
    $arquivo = $_FILES['arquivo']['tmp_name'];

    $extensao = substr($nome, -4);
    $nomenovo = uniqid().$extensao;

    move_uploaded_file($arquivo, "../Perfil/PerfilArtista/assets/img/Pubs/".$nomenovo);
    $midia->setArquivoMidia($nomenovo);
    MidiaDao::atualizarArquivo($midia);


    $mp = new MidiaPublicacao();
    $mp->setIdMidia($midia->getIdMidia());
    $mp->setIdPublicacao(PublicacaoDao::consultarId($publicacao));
    MidiaPublicacaoDao::cadastrar($mp);
?>