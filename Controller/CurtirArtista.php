<?php
   require_once 'GlobalController.php';

   session_start();
   
   if (!isset($_SESSION['curtiu']) || $_SESSION['curtiu'] === false) {
       $_SESSION['curtiu'] = true;
       PublicacaoDao::Curtir($_POST['idPublicacao']);
       header('Location: ../Perfil/PerfilArtista/Feed/feed.php');
   } else {
       header('Location: ../Perfil/PerfilArtista/Feed/feed.php');
   }
   
?>