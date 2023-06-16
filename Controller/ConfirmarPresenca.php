<?php
    require_once 'GlobalController.php';

    session_start();

    $presenca = new Presenca();
    $presenca->setIdEvento($_POST['idEvento']);
    $presenca->setIdUsuario($_SESSION['idUsuario']);

    PresencaDao::cadastrar($presenca);
    if(isset($_SESSION['idArtista'])){
        header('Location: ../Perfil/PerfilArtista/Evento/eventoArtista.php');
    }else{
        header('Location: ../Perfil/PerfilVisitante/Evento/eventoVisitante.php');  
    }
    
    
?>