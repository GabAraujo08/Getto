<?php
    require_once 'GlobalController.php';

    session_start();

    $conexao = Conexao::conectar();
    $consulta = $conexao->prepare('DELETE FROM tbCurtida WHERE idUsuario = ? AND idPublicacao = ?');
    $consulta->bindValue(1, $_SESSION['idUsuario']);
    $consulta->bindValue(2, $_POST['idPublicacao']);
    $consulta->execute();

    if(isset($_SESSION['idArtista'])){
        header('Location: ../Perfil/PerfilArtista/Feed/feed.php');
    }else{
        header('Location: ../Perfil/PerfilVisitante/Feed/feed.php');  
    }  
?>