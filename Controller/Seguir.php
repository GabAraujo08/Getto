<?PHP
    require_once 'GlobalController.php';
    session_start();

    $previousPage = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $previousPage);

    $s = new Seguidores();
    $s->setIdArtista($_POST['idArtista']);
    $s->setIdUsuario($_POST['idUsuario']);
    SeguidoresDao::cadastrar($s);
?>