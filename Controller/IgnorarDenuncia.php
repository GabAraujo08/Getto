<?php
    require_once 'GlobalController.php';

    $previousPage = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $previousPage);

    $denun = new Denuncia();
    
    $denun->setIdDenuncia($_POST['idDenuncia']);
    $denun->setStatusDenuncia('Resolvido');

    DenunciaDao::atualizarDenuncia($denun);

?>