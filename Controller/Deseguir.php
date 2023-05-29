<?php
    require_once 'GlobalController.php';


    $conexao = Conexao::conectar();
    $consulta = $conexao->prepare('DELETE FROM tbSeguidores WHERE idUsuario = ? AND idArtista = ?');
    $consulta->bindValue(1, $_POST['idUsuario']);
    $consulta->bindValue(2, $_POST['idArtista']);
    $consulta->execute();

    if(isset($_SESSION['idArtista'])){
        header('Location: ../Perfil/PerfilArtista/perfilMostrar.php');
    }else{
        header('Location: ../Perfil/PerfilVisitante/perfilMostrar.php');  
    }  
?>