<?php
    require_once 'GlobalController.php';

    header('Location: ../Perfil/PerfilArtista/perfil.php');

    session_start();

    $cp = new ContaArtista ();

    $cp->setchavePixArtista($_POST['chaveContaPixArtista']);
    $cp->settipoContaPixArtista($_POST['tipoContaPixArtista']);
    $cp->setnomeContaPixArtista($_POST['nomeContaPixArtista']);
    $cp->setIdArtista($_SESSION['idArtista']);

    ContaPixArtistaDao::cadastrar($cp);
?>