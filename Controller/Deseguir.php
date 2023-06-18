<?php
    require_once 'GlobalController.php';

    session_start();

    $conexao = Conexao::conectar();
    $consulta = $conexao->prepare('DELETE FROM tbSeguidores WHERE idUsuario = ? AND idArtista = ?');
    $consulta->bindValue(1, $_SESSION['idUsuario']);
    $consulta->bindValue(2, $_POST['idArtista']);
    $consulta->execute();

    $previousPage = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $previousPage);
 
?>