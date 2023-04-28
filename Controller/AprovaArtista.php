<?php
    require_once 'GlobalController.php';
    header('Location: ../Administrador/dashboard.php');

    if (isset($_POST['botao'])) {
        $usuario_id = $_POST['usuario_id'];
        $usuario_indice = $_POST['usuario_indice'];
        
       

        $conexao = Conexao::conectar();

        $queryInsert = "UPDATE tbUsuario
                        SET statusContaUsuario = ?,
                        fotoPerfilUsuario = ?
                        WHERE idUsuario = ?";
        
        $prepareStatement = $conexao->prepare($queryInsert);
        
        $prepareStatement->bindValue(1, 'Normal');
        $prepareStatement->bindValue(2, '0.png');
        $prepareStatement->bindValue(3, $usuario_id);

        $prepareStatement->execute();
    }


?>