<?php
     include('../../../Controller/VerificaLogado.php'); 
     require_once '../GlobalPerfil.php';

     if(isset($_POST['busca'])){
        $conexao = Conexao::conectar();
        $consulta = $conexao->prepare("SELECT * FROM tbUsuario WHERE nicknameUsuario LIKE ?");
        $consulta->bindValue(1, '%' . $_POST['busca'] . '%');
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        echo $resultado['nomeUsuario'];
     }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/descobrir.css">
    <title>Document</title>
</head>

<body>
    <div class="area-buscar">
        <form name="FormBusca" id="FormBusca" method="Post" action="">
            <input type="search" name="busca" placeholder="Pesquisar...">
            <button type="submit"><img src="assets/img/search.png"></i></button>
        </form>

     
    </div>
</body>

</html>