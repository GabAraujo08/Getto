<?PHP
    require_once 'GlobalController.php';

    header('Location: ../Administrador/addTags.php');

    $tag = new TipoArte();

    $tag->setNomeTipoArte($_POST['nome']);
    TipoArteDao::cadastrar($tag);

    $tag->setIdTipoArte(TipoArteDao::consultarIdTipoArte($tag));
    $nome = $_FILES['imagem']['name'];
    $tipo = $_FILES['imagem']['type'];
    $tamanho = $_FILES['imagem']['size'];
    $arquivo = $_FILES['imagem']['tmp_name'];

    $extensao = substr($nome, -4);
    $nomenovo = $tag->getIdTipoArte().$extensao;

    move_uploaded_file($arquivo, "../assets/img/imgTag/".$nomenovo);
    $tag->setImagemTipoArte($nomenovo);
    TipoArteDao::atualizarImagemTipoArte($tag);
?>