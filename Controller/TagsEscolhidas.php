<?php
    require_once 'GlobalController.php';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['idTipo'])) {
            $_SESSION['tiposArtes'] = $_POST['idTipo'];


            if(isset($_SESSION['idArtista'])){
                header('Location: ../Perfil/PerfilArtista/Feed/feed.php');
            } else {
                header('Location: ../Perfil/PerfilVisitante/Feed/feed.php');  
            } 
        }
    }
?>
