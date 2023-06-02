<?php
    require_once 'GlobalController.php';

    session_start();

        $conexao = Conexao::conectar();
        $consulta = $conexao->prepare("SELECT * FROM tbUsuario WHERE nicknameUsuario LIKE ?");
        $consulta->bindValue(1, '%' . $_POST['busca'] . '%');
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

        $dadosUsuario = array();

        if ($resultado != false) {
            $dadosUsuario['idUsuario'] = $resultado['idUsuario'];
            $dadosUsuario['nomeUsuario'] = $resultado['nomeUsuario'];
            $dadosUsuario['nicknameUsuario'] = $resultado['nicknameUsuario'];
            $dadosUsuario['fotoPerfilUsuario'] = $resultado['fotoPerfilUsuario'];
            $dadosUsuario['papelParedeUsuario'] = $resultado['papelParedeUsuario'];
            $dadosUsuario['nivelContaUsuario'] = $resultado['nivelContaUsuario'];
    
            if ($dadosUsuario['nivelContaUsuario'] == 2) {
                $a = ArtistaDao::consultarArtista($dadosUsuario['idUsuario']);
                $dadosUsuario['idArtista'] = $a['idArtista'];
                $dadosUsuario['bioArtista'] = $a['bioArtista']; 
            }

            return $dadosUsuario;
        }
        if(isset($_SESSION['idArtista'])){
            header('Location: ../Perfil/PerfilArtista/Feed/descobrir.php');
        }else{
            header('Location: ../Perfil/PerfilVisitante/Feed/descobrir.php');  
        } 

?>