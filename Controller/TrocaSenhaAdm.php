<?PHP
    require_once 'GlobalController.php';
    header('Location: ../Administrador/login-adm.php');
    session_start();

    $adm = new Administrador();
    $adm->setIdAdministrador($_SESSION['idAdministrador']);
    $adm->setSenhaAdministrador(password_hash($_POST['senha'], PASSWORD_DEFAULT));

    AdministradorDao::atualizarSenhaAdm($adm);

?>