<?php
    require_once 'GlobalController.php';

    header('Location: ../Perfil/PerfilArtista/perfil.php');

    session_start();

    $cp = new ContaArtista ();

    $cp->setchavePixArtista($_POST['chavePix']);
    $cp->settipoContaPixArtista($_POST['tipoChave']);
    $cp->setnomeContaPixArtista($_POST['nomeConta']);
    $cp->setIdArtista($_SESSION['idArtista']);

    ContaPixArtistaDao::cadastrar($cp);
?>