<?php
require_once 'Global.php';

$conexao = Conexao::conectar();
session_start();

$senhaAtual = $_POST['senha'];
$novaSenha = $_POST['senhaNova'];
$confirmarSenha = $_POST['confSenha'];

$consulta = $conexao->prepare('SELECT senhaUsuario FROM tbUsuario WHERE idUsuario = ?');
$consulta->bindValue(1, $_SESSION['idUsuario']);
$consulta->execute();
$senha = $consulta->fetch();

if (!password_verify($senhaAtual, $senha['senhaUsuario'])) {
    echo 'Senha atual incorreta';
} else if ($novaSenha != $confirmarSenha) {
    echo 'As senhas não coincidem';
} else {
    $senhaHash = password_hash($novaSenha, PASSWORD_DEFAULT);

    $queryUpdate = "UPDATE tbUsuario SET senhaUsuario = ? WHERE idUsuario = ?";
    $prepareStatement = $conexao->prepare($queryUpdate);
    $prepareStatement->bindValue(1, $senhaHash);
    $prepareStatement->bindValue(2, $_SESSION['idUsuario']);
    
    if ($prepareStatement->execute()) {
        echo 'Senha alterada com sucesso';
    } else {
        echo 'Erro ao atualizar a senha';
    }
}
?>