<?php
    require_once 'GlobalController.php';
    session_start();
    if(isset($_SESSION['idArtista'])){
        header('Location: ../Perfil/PerfilArtista/Feed/feed.php');
    } else {
    header('Location: ../Perfil/PerfilVisitante/Feed/feed.php');  
    } 

    

    $denuncia = '"'. $_POST['desc'] . '" diz o denunciador do senguinte comentário: "' . $_POST['comentario'] . '" feito por ' . $_POST['nickname'];
    $d = new Denuncia();

    $d->setDescDenuncia($denuncia);
    $d->setIdTipoDenuncia($_POST['tipoDenuncia']);
    $d->setStatusDenuncia('Em Análise');

    DenunciaDao::cadastrar($d);



    $td = new DenunciaUsuario();

    $td->setIdDenuncia(DenunciaDao::consultarIdDenuncia($denuncia));
    $td->setIdUsuario($_POST['idDenunciador']);
    $td->setTipoUsuario('Denunciador');

    DenunciaUsuarioDao::cadastrar($td);

    $ud = new DenunciaUsuario();

    $ud->setIdDenuncia(DenunciaDao::consultarIdDenuncia($denuncia));
    $ud->setIdUsuario($_POST['idDenunciado']);
    $ud->setTipoUsuario('Denunciado');

    DenunciaUsuarioDao::cadastrar($ud);

?>