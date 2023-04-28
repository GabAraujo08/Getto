<?PHP
    require_once 'GlobalController.php';

    $senha=$_POST['senha'];
    $login=$_POST['login'];

    $resultado = AdministradorDao::consultarAdministrador($login);

    if($resultado['loginAdministrador'] == $login && $resultado['senhaAdministrador'] == '123'){
        session_start();
        $_SESSION['idAdministrador'] = $resultado['idAdministrador' ];
        header('Location: ../Administrador/admTrocarSenha.php');

    }else if($resultado['loginAdministrador'] == $login && password_verify($senha, $resultado['senhaAdministrador'])){
        session_start();
        $_SESSION['idAdministrador'] = $resultado['idAdministrador' ];
        $_SESSION['nomeAdministrador'] = $resultado['nomeAdministrador' ];
        $_SESSION['emailAdministrador'] = $resultado['emailAdministrador'];
        $_SESSION['foneAdministrador'] = $resulariotado['foneAdministrador'];
        $_SESSION['loginAdministrador'] = $resultado['loginAdministrador'];

        header('Location: ../Administrador/dashboard.php');

    }else{
        die('Email ou senha invalido!');
    }
?>