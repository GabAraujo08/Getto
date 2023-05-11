<?php
include('../../../Controller/VerificaLogado.php');
require_once '../GlobalPerfil.php';
require_once '../../../Dao/Conexao.php';
require_once '../../../Dao/ArtistaDao.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/descobrir.css">
  <link rel="stylesheet" href="assets/css/feedMobile.css">
  <title>Document</title>
  <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
</head>

<body>
  <div class="d-flex">
    <div class="area-sidebar">
      <div class="sidebar">
        <div class="d-flex justify-center align-items-center flex-column sidebar-box">
          <div class="d-flex justify-center align-items-center logos">
            <img style="display: none;" src="assets/img/logomarca.png" alt="" class="img-fluid logo-marca">
            <h1 class="logo-tipo">Getto</h1>
          </div>
          <div class="d-flex justify-content-center align-items-center flex-column list-group-box">
            <ul class="list-group">
              <a href="#">
                <li class="list-group-item"><button id="inicio" type="button" class="btn btn-primary custom-btn-item">Início</button></li>
              </a>
              <a href="">
                <li class="list-group-item"><button id="amigos" class="btn btn-primary btn-item-list" type="button">Amigos</button></li>
              </a>
              <a href="../../PerfilArtista/Evento/eventoArtista.php">
                <li class="list-group-item"><button id="eventos" class="btn btn-primary btn-item-list" type="button">Eventos</button></li>
              </a>
              <a href="">
                <li class="list-group-item"><button id="notificacoes" class="btn btn-primary btn-item-list" type="button">Notificações</button></li>
              </a>
              <a href="../Configuracoes/configuracoes.php">
                <li class="list-group-item"><button id="configuracoes" class="btn btn-primary btn-item-list" type="button">Configurações</button></li>
              </a>
              <a href="../Feed/descobrir.php">
                <li class="list-group-item"><button id="descobrir" class="btn btn-primary btn-item-list" type="button">Descobrir</button></li>
              </a>
              <a href="../perfil.php">
                <li class="list-group-item"><button id="perfil" class="btn btn-primary btn-item-list" type="button">Perfil</button></li>
              </a>
            </ul>
          </div>
          <div class="nova-pub">
            <button id="nova-pub" class="btn btn-primary btn-nova-pub" type="button">Nova
              publicação</button>
          </div>

          <div class="sair">
            <a href="../../../Controller/Logout.php"><img src="assets/img/sair.png">Sair</a>
          </div>

          <!-- ---------------------------- BOTAO PERFIL E SAIR ---------------------------- -->

          <!-- <div class="dropup-center dropup">
                        <div class="btn-perfil-sair" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="img-perfil-btn">
                                <a href="../perfil.php"><img src="../assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoPerfilUsuario']; ?>" alt=""></a>
                            </div>
                            <div class="desc-btn">
                                <div class="btn-perfilNomes">
                                    <div class="nome-usuario">
                                        <h1><?PHP echo $_SESSION['nomeUsuario']; ?></h1>
                                    </div>
                                    <div class="nickname">
                                        <h3><?PHP echo $_SESSION['nicknameUsuario']; ?></h3>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="button">
                                    <img src="../assets/img/btn-dropdown.svg" alt="">
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="../perfil.php">
                                            <div class="d-flex flex-row align-items-center btn-sair">
                                                <i class="fas fa-user"></i>
                                                <h1>Perfil</h1>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex flex-row  align-items-center btn-sair">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <h1>Sair</h1>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
        </div>
      </div>
      <div class="nova-pub">
        <button id="nova-pub" class="btn btn-primary btn-nova-pub" type="button">Nova publicação</button>
      </div>

    </div>
  
  <div class="area-buscar">
    <form name="FormBusca" id="FormBusca" method="Post" action="descobrir.php">
      <input type="search" id="search" name="busca" placeholder="Pesquisar...">
      <button type="submit"><img src="assets/img/search.png"></i></button>

    </form>
  </div>
  </div>
  <?php

  if (isset($_POST['busca'])) {
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
        if ($row['nivelContaUsuario'] == 2) {
          $html .= '<img src="../assets/img/FotoPerfil/' . $row['fotoPerfilUsuario'] . '" alt="Imagem de perfil">';
          $a = ArtistaDao::consultarArtista($row['idUsuario']);
          $html .= '<input type="hidden" name="bio" value= "' . $a['bioArtista'] . '">';
          $html .= '<input type="hidden" name="artistaId" value= "' . $a['idArtista'] . '">';
        } else {
          $html .= '<img src="../../PerfilVisitante/assets/img/FotoPerfil/' . $row['fotoPerfilUsuario'] . '" alt="Imagem de perfil">';
        }
        $html .= '<input type="hidden" name="usuarioNivelConta" value= "' . $row['nivelContaUsuario'] . '">';
        $html .= '<input type="hidden" name="usuarioFotoPerfil" value= "' . $row['fotoPerfilUsuario'] . '">';
        $html .= '<input type="hidden" name="usuarioFotoCapa" value= "' . $row['papelParedeUsuario'] . '">';
        $html .= '<input type="hidden" name="usuarioNome" value= "' . $row['nomeUsuario'] . '">';
        $html .= '<input type="hidden" name="usuarioNick" value= "' . $row['nicknameUsuario'] . '">';
        $html .= '<input type="hidden" name="usuarioId" value= "' . $row['idUsuario'] . '">';
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
            data: {
              query: query
            },
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