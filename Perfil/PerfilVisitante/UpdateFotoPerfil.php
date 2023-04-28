<?php
    require_once 'GlobalPerfil.php';

    session_start();
    header('Location: perfil-visitante.php');

    $nome = $_FILES['fotoPerfil']['name'];
    $tipo = $_FILES['fotoPerfil']['type'];
    $tamanho = $_FILES['fotoPerfil']['size'];
    $arquivo = $_FILES['fotoPerfil']['tmp_name'];
    
    $extensao = substr($nome, -4);
    $nomenovo = $_SESSION['idUsuario'].$extensao;
    
    move_uploaded_file($arquivo, "../Perfil/assets/img/FotoPerfil/".$nomenovo);

    $conexao = Conexao::conectar();

        $queryInsert = "UPDATE tbUsuario
                            SET fotoPerfilUsuario = ?
                            WHERE idUsuario = ?";

    $prepareStatement = $conexao->prepare($queryInsert);

    $prepareStatement->bindValue(1, $nomeovo);
    $prepareStatement->bindValue(2, $_SESSION['idUsuario']);

    $prepareStatement->execute();

    $_SESSION['fotoPerfilUsuario'] = $nomenovo;
?>