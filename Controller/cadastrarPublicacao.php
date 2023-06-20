<?php
    require_once 'GlobalController.php';
    session_start();
    $previousPage = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $previousPage);


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


        if(isset($_FILES['capaMusica']['name'])){
            $midia2 = new Midia();
            $midia2->setArquivoMidia(' ');
            $midia2->setIdTipoMidia(3);
            MidiaDao::cadastrar($midia2);
            $midia2->setIdMidia(MidiaDao::consultarIdMidia($midia2));
            $nome2 = $_FILES['capaMusica']['name'];
            $tipo2 = $_FILES['capaMusica']['type'];
            $tamanho2 = $_FILES['capaMusica']['size'];
            $arquivo2 = $_FILES['capaMusica']['tmp_name'];

            $extensao2 = substr($nome2, -4);
            $nomenovo2 = uniqid().$extensao2;

            move_uploaded_file($arquivo2, "../Perfil/PerfilArtista/assets/img/Pubs/".$nomenovo2);
            $midia2->setArquivoMidia($nomenovo2);
            MidiaDao::atualizarArquivo($midia2);


            $mp2 = new MidiaPublicacao();
            $mp2->setIdMidia($midia2->getIdMidia());
            $mp2->setIdPublicacao(PublicacaoDao::consultarId($publicacao));
            MidiaPublicacaoDao::cadastrar($mp2);
        }