<?php
     include('../../../Controller/VerificaLogado.php'); 
     require_once '../GlobalPerfil.php';
     require_once '../../../Dao/Conexao.php';
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
        <form name="FormBusca" id="FormBusca" method="Post" action="descobrir.php">
            <input type="search" id="search" name="busca" placeholder="Pesquisar...">
            <button type="submit"><img src="assets/img/search.png"></i></button>
            
        </form>
        </div>
        <?php
            
            if(isset($_POST['busca'])){
                $conexao = Conexao::conectar();
                $consulta = $conexao->prepare("SELECT * FROM tbUsuario WHERE nicknameUsuario LIKE ?");
                $consulta->bindValue(1, '%' . $_POST['busca'] . '%');
                $consulta->execute();
                $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        
                if (count($resultado) > 0) {
                    $html = '';
                    foreach ($resultado as $row) {
                        $html .= '<form action="../perfilMostrar.php" method="POST">';
                        $html .= '<li>';
                        $html .= '<img src="../assets/img/FotoPerfil/' . $row['fotoPerfilUsuario'] . '" alt="Imagem de perfil">' ;
                        $html .= '<input type="hidden" name="usuarioNome" value= "'. $row['nomeUsuario'] .'">';
                        $html .= '<input type="hidden" name="usuarioNick" value= "'. $row['nicknameUsuario'] .'">';
                        $html .= '<button type="submit">' . $row['nicknameUsuario'] . '</button>';
                        $html .= '</li>';
                        $html .= '</form>';
                    }
                    echo '<ul id="results">' . $html . '</ul>';
                } else {
                    echo '<ul id="results"><li>Nenhum resultado encontrado</li></ul>';
                }

            }
         ?>
        
     
    

    <script>
        $(document).ready(function() {
  $('#search').keyup(function() {
    var query = $(this).val();
    if (query != '') {
      $.ajax({
        url: 'search.php',
        method: 'POST',
        data: {query: query},
        success: function(data) {
          $('#results').html(data);
        }
      });
    } else {
      $('#results').html('');
    }
  });
});
    </script>
</body>

</html>