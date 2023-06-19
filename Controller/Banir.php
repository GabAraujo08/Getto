<?php
    require_once 'GlobalController.php';


    $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbUsuario
                            SET statusContaUsuario = ?
                            WHERE idUsuario = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, 'Bloqueado');
            $prepareStatement->bindValue(2, $_POST['idUsuario']);

            $prepareStatement->execute();

            $queryInsert2 = "UPDATE tbComentario
            SET statusComentario = ?
            WHERE idUsuario = ?";

            $prepareStatement2 = $conexao->prepare($queryInsert2);

            $prepareStatement2->bindValue(1, 'Bloqueado');
            $prepareStatement2->bindValue(2, $_POST['idUsuario']);

            $prepareStatement2->execute();

            $queryInsert3 = "UPDATE tbDenuncia
            SET statusDenuncia = ?
            WHERE idDenuncia = ?";

        $prepareStatement3 = $conexao->prepare($queryInsert3);

        $prepareStatement3->bindValue(1, 'Resolvido');
        $prepareStatement3->bindValue(2, $_POST['idDenun']);

        $prepareStatement3->execute();

        $previousPage = $_SERVER['HTTP_REFERER'];
        header('Location: ' . $previousPage);

?>