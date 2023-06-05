<?php
    require_once 'GlobalController.php';

    $d = new Denuncia();

    $d->setDescDenuncia($_POST['denuncia']);
    $d->setIdTipoDenuncia($_POST['tipoDenuncia']);
    $d->setStatusDenuncia('Em Análise');

    DenunciaDao::cadastrar($d);

    $td = new DenunciaUsuario();

    $td->setIdUsuario($_POST['idUsuarioDenunciador']);
    $td->setIdTipoUsuario('Denunciador');

    DenunciaUsuarioDao::cadastrar($td);

    $ud = new DenunciaUsuario();

    $ud->setIdUsuario($_POST['idUsuarioDenunciado']);
    $ud->setIdTipoUsuario('Denunciado');

    DenunciaUsuarioDao::cadastrar($ud);

?>