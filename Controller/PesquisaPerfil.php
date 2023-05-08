<?php
    /*require_once 'GlobalController.php';
    session_start();

    if(isset($_POST['busca'])){
        $conexao = Conexao::conectar();
        $consulta = $conexao->prepare("SELECT * FROM tbUsuario WHERE nicknameUsuario LIKE ?");
        $consulta->bindValue(1, '%' . $_POST['busca'] . '%');
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        if(isset($_SESSION['generoArtista'])){
            //header('Location: ../Perfil/PerfilArtista/Feed/descobrir.php');
        }else{
            //header('Location: ../Perfil/PerfilVisitante/Feed/descobrir.php'); 
        }
            
    }*/
?>