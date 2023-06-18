<?php
    require_once 'GlobalController.php';

    session_start();
    $previousPage = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $previousPage);


    $conexao = Conexao::conectar();
    $consulta = $conexao->prepare("SELECT * FROM tbUsuario WHERE nicknameUsuario LIKE ?");
    $consulta->bindValue(1, '%' . $_POST['busca'] . '%');
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

   

    if ($resultado != false) {
        foreach ($resultado as $row) {
            $_SESSION['idU'] = $row['idUsuario'];
            $_SESSION['nome'] = $row['nomeUsuario'];
            $_SESSION['nick'] = $row['nicknameUsuario'];
            $_SESSION['fotoP'] = $row['fotoPerfilUsuario'];
            $_SESSION['papel'] = $row['papelParedeUsuario'];
            $_SESSION['nivel'] = $row['nivelContaUsuario'];

            if ($_SESSION['nivel'] == 2) {
                $a = ArtistaDao::consultarArtista($_SESSION['idU']);
                $_SESSION['idA'] = $a['idArtista'];
                $_SESSION['bio'] = $a['bioArtista']; 
            }
            $_SESSION['quantLinhas'] = count($resultado);
            $_SESSION['go'] = true;
        }

      
    }else{
        $_SESSION['go']  = false;
    }
    return $_SESSION;
?>