<?php
require_once 'GlobalPerfil.php';
$conexao = Conexao::conectar();

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $queryUpdate = "UPDATE tbContaPixArtista
                    SET nomeContaPixArtista = ?,
                    tipoContaPixArtista = ?,
                    chaveContaPixArtista = ?
                    WHERE idArtista = ?";

    $prepareStatement = $conexao->prepare($queryUpdate);
    $prepareStatement->bindValue(1, $_POST['nomeContaPixArtista']);
    $prepareStatement->bindValue(2, $_POST['tipoContaPixArtista']);
    $prepareStatement->bindValue(3, $_POST['chaveContaPixArtista']);
    $prepareStatement->bindValue(4, $_SESSION['idArtista']);

    $prepareStatement->execute();


    $_SESSION['nomeContaPixArtista'] = $_POST['nomeContaPixArtista'];
    $_SESSION['tipoContaPixArtista'] = $_POST['tipoContaPixArtista'];
    $_SESSION['chaveContaPixArtista'] = $_POST['chaveContaPixArtista'];

    header('Location: perfil.php');  
    exit();
}
?>