<?php
    require_once 'GlobalController.php';

    session_start();

    $conexao = Conexao::conectar();
    $consulta = $conexao->prepare('DELETE FROM tbPresenca WHERE idUsuario = ? AND idEvento = ?');
    $consulta->bindValue(1, $_SESSION['idUsuario']);
    $consulta->bindValue(2, $_POST['idEvento']);
    $consulta->execute();

    if(isset($_SESSION['idArtista'])){
        header('Location: ../Perfil/PerfilArtista/Feed/feed.php');
    }else{
        header('Location: ../Perfil/PerfilVisitante/Feed/feed.php');  
    }  
?>