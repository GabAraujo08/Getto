<?php
    require_once 'GlobalController.php';

    session_start();
    if(isset($_SESSION['idArtista'])){
        header('Location: ../Perfil/PerfilArtista/Feed/descobrir.php');
    } else {
        header('Location: ../Perfil/PerfilVisitante/Feed/descobrir.php');  
    } 

    $conexao = Conexao::conectar();
    $consulta = $conexao->prepare("SELECT * FROM tbUsuario WHERE nicknameUsuario LIKE ?");
    $consulta->bindValue(1, '%' . $_POST['busca'] . '%');
    $consulta->execute();
    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    $dadosUsuario = array();

    if ($resultado != false) {
        foreach ($resultado as $row) {
            $dadosUsuario['idUsuario'] = $row['idUsuario'];
            $dadosUsuario['nomeUsuario'] = $row['nomeUsuario'];
            $dadosUsuario['nicknameUsuario'] = $row['nicknameUsuario'];
            $dadosUsuario['fotoPerfilUsuario'] = $row['fotoPerfilUsuario'];
            $dadosUsuario['papelParedeUsuario'] = $row['papelParedeUsuario'];
            $dadosUsuario['nivelContaUsuario'] = $row['nivelContaUsuario'];

            if ($dadosUsuario['nivelContaUsuario'] == 2) {
                $a = ArtistaDao::consultarArtista($dadosUsuario['idUsuario']);
                $dadosUsuario['idArtista'] = $a['idArtista'];
                $dadosUsuario['bioArtista'] = $a['bioArtista']; 
            }
        }

        return $dadosUsuario;
    }
     
?>
