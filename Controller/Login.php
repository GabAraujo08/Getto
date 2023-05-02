<?php
    require_once 'GlobalController.php';

    $senha=$_POST['senha'];
    $email=$_POST['email'];
    
    $resultado = UsuarioDao::consultarLogin($email);

        if($resultado['emailUsuario'] == $email && password_verify($senha, $resultado['senhaUsuario'])){

            if($resultado['statusContaUsuario'] == 'Normal'){

                if($resultado['nivelContaUsuario'] == 1){
                    
                    session_start();
                    $_SESSION['idUsuario'] = $resultado['idUsuario' ];
                    $_SESSION['nomeUsuario'] = $resultado['nomeUsuario' ];
                    $_SESSION['nicknameUsuario'] = $resultado['nicknameUsuario'];
                    $_SESSION['emailUsuario'] = $resulariotado['emailUsuario'];
                    $_SESSION['senhaUsuario'] = $resultado['senhaUsuario'];
                    $_SESSION['estadoUsuario'] = $resultado['estadoUsuario'];
                    $_SESSION['cidadeUsuario'] = $resultado['cidadeUsuario'];
                    $_SESSION['foneUsuario'] = $resultado['foneUsuario'];
                    $_SESSION['papelParedeUsuario'] = $resultado['papelParedeUsuario'];
                    $_SESSION['nivelContaUsuario'] = $resultado['nivelContaUsuario'];
                    $_SESSION['fotoPerfilUsuario'] = $resultado['fotoPerfilUsuario'];
                    
                    header('Location: ../Perfil/PerfilVisitante/Feed/feed.php');

                }else if($resultado['nivelContaUsuario'] == 2){
                    session_start();
                    $_SESSION['idUsuario'] = $resultado['idUsuario' ];
                    $_SESSION['nomeUsuario'] = $resultado['nomeUsuario' ];
                    $_SESSION['nicknameUsuario'] = $resultado['nicknameUsuario'];
                    $_SESSION['emailUsuario'] = $resulariotado['emailUsuario'];
                    $_SESSION['senhaUsuario'] = $resultado['senhaUsuario'];
                    $_SESSION['estadoUsuario'] = $resultado['estadoUsuario'];
                    $_SESSION['cidadeUsuario'] = $resultado['cidadeUsuario'];
                    $_SESSION['foneUsuario'] = $resultado['foneUsuario'];
                    $_SESSION['papelParedeUsuario'] = $resultado['papelParedeUsuario'];
                    $_SESSION['nivelContaUsuario'] = $resultado['nivelContaUsuario'];
                    $_SESSION['fotoPerfilUsuario'] = $resultado['fotoPerfilUsuario'];

                    $artista = ArtistaDao::consultarArtista($_SESSION['idUsuario']); 
                    
                    $_SESSION['idArtista']=$artista['idArtista'];
                    $_SESSION['generoArtista']=$artista['generoArtista'];
                    $_SESSION['bioArtista']=$artista['bioArtista'];

                    header('Location: ../Perfil/PerfilArtista/Feed/feed.php');

                }

            }else if($resultado['statusContaUsuario'] == 'em Verificação'){

                header('Location: ../emVerificacao.php');

            }else{

                die('Sua conta está bloqueda entre em contato conosco.');
            }

        }else{

            die('Senha incorreta.');
        }



        die('Email não cadastrado na base de dados.');

?>