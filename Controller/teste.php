<?PHP
    session_start();
    require_once 'GlobalController.php';

    $pp = PublicacaoDao::ListaPublicacaoSegui($_SESSION['idUsuario']);
     foreach($pp as $p){
        echo $p['quantidadeCurtidas'];
     }
?>