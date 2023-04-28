<?php
    require_once 'GlobalPerfil.php';

    session_start();
    header('Location: perfil-visitante.php');

    $nome = $_FILES['fotoCapa']['name'];
    $tipo = $_FILES['fotoCapa']['type'];
    $tamanho = $_FILES['fotoCapa']['size'];
    $arquivo = $_FILES['fotoCapa']['tmp_name'];
    
    $extensao = substr($nome, -4);
    $nomenovo = $_SESSION['idUsuario'].$extensao;
    
    move_uploaded_file($arquivo, "../Perfil/assets/img/FotoCapa/".$nomenovo);

    $conexao = Conexao::conectar();

        $queryInsert = "UPDATE tbUsuario
                            SET papelParedeUsuario = ?
                            WHERE idUsuario = ?";

    $prepareStatement = $conexao->prepare($queryInsert);

    $prepareStatement->bindValue(1, $nomenovo);
    $prepareStatement->bindValue(2, $_SESSION['idUsuario']);

    $prepareStatement->execute();

    $_SESSION['papelParedeUsuario'] = $nomenovo;
?>