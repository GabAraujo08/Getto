<?PHP include('../Controller/VerificaLogadoAdm.php'); 
require_once 'GlobalAdm.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="assets/img/logomarca.svg" type="imagem">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
</head>

<body>
<style>
   

    .voltar-dashboard {
        display: flex;
    }

    .voltar-dashboard p {
        margin: 0;
        margin-left: 5%;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 30px;
    }

    .box {
        
        border-radius: 20px;
        margin: 0;
        margin-top: 2%;
       padding-left: 30px;
        margin-right: 2%;
    }

    .explicacao-dashboard {
        background-color: #ECEBF3;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        display: flex;
        width: 100%;
        margin-top: 2%;
    }

    .explicacao-textos {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 5%;
        width: 70%;
    }

    .explicacao-img {
        width: 30%;
    }

    .explicacao-img img {
        width: 100%;
    }

    .explicacao-titulo p {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 48px;
        color: #9056E8;
    }

    .explicacao-descricao p {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 20px;
        line-height: 30px;
        color: #656565;
    }

    .explicacao-img img {
        padding: 10%;
        margin-bottom: 5%;
        margin-top: 5%;
    }

    .cards-engajamentos {
        display: flex;
        width: 100%;
        margin-top: 2%;
    }

    .card-visitas {
        background: #ECEBF3;
        box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        width: 100%;
        padding: 3%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-right: 2%;
    }

    .visitas-titulo p {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 18px;
        color: #595964;
        margin: 0;
    }

    .visitas-quantidade {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 48px;
        color: #9056E8;
        margin: 0;
    }

    .card-curtidas {
        background: #ECEBF3;
        box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        width: 100%;
        padding: 3%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-right: 1%;
    }

    .curtidas-titulo p {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 18px;
        color: #595964;
        margin: 0;
    }

    .curtidas-quantidade {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 48px;
        color: #9056E8;
        margin: 0;
    }

    .card-compartilhamentos {
        background: #ECEBF3;
        box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        width: 100%;
        padding: 3%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-left: 1%;
    }

    .compartilhamentos-titulo p {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 18px;
        color: #595964;
        margin: 0;
    }

    .compartilhamentos-quantidade {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 48px;
        color: #9056E8;
        margin: 0;
    }

    .card-publicacoes {
        background: #ECEBF3;
        box-shadow: 7px 7px 7px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
        width: 100%;
        padding: 3%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-left: 2%;
    }

    .publicacoes-titulo p {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 18px;
        color: #595964;
        margin: 0;
    }

    .publicacoes-quantidade {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 48px;
        color: #9056E8;
        margin: 0;
    }

    .sair {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    bottom: 80px;
  }
  
  .sair a {
    font-size: 22px;
    font-weight: 700;
    font-family: "InterRegular";
  }
  
  .sair img {
    width: 30px;
    margin-right: 5px;
  }

  #modalSairConta .modal-body {
    font-family: "InterBold";
    min-height: unset!important;
  }
  
  #modalSairConta .modal-header {
    border-top: 0;
    border-bottom: 0;
  }
  
  #modalSairConta .modal-footer {
    border-top: 0;
    border-bottom: 0;
  }
  
</style>
    <main>

        <div class="box-sidebar">
            <div class="sidebar">
                <div class="logotipo-e-logomarca">
                    <div class="logomarca">
                        <img src="assets/img/logomarca.svg" alt="">
                    </div>
                    <div class="logotipo">
                        <h1>Getto</h1>
                    </div>
                </div>
                <div class="navegacao-sidebar">
                    <ul>
                        <li class="item-sidebar">
                            <a href="" id="dash">Dashboard</a>
                        </li>
                        <li class="item-sidebar">
                            <a href="denuncias.php" id="denuncia">Denúncias</a>
                        </li>
                        <li class="item-sidebar">
                            <a href="verifica.php" id="verificacao">Verificação de artistas</a>
                        </li>
                        <li class="item-sidebar">
                            <a href="addTags.php" id="tutorial">Tags</a>
                        </li>


                    </ul>
                </div>
                <div class="sair">
                    <a href="../Controller/LogoutAdm.php" class="btn-sair" id="sair">
                        Logout
                    </a>
                </div>
            </div>

        </div>
        <div class="box-dashboard">
            <div class="header-adm">
                <div class="texto-adm">
                    <p>Olá, <?php echo ($_SESSION['nomeAdministrador']) ?> </p>

                </div>
                <div class="notificacao-perfil">
                    <div class="notificacao">
                        <img src="assets/img/notification.svg" alt="">
                    </div>
                    <div class="img-perfil">
                        <img src="assets/img/background.png" id="perfil-adm">
                    </div>
                </div>
            </div>
            <!--BOX DA DENúNCIA COMEÇA AQUI-->
            <div class="box">
                
                <div class="explicacao-dashboard">
                    <div class="explicacao-textos">
                        <div class="explicacao-titulo">
                            <p>Saiba como anda o engajamento do Getto!</p>
                        </div>
                        <div class="explicacao-descricao">
                            <p>Fique de olho e veja quando estiver abaixo que o esperado!</p>
                        </div>
                    </div>
                    <div class="explicacao-img">
                        <img src="../Perfil/PerfilArtista/Configuracoes/assets/img/img-dash.svg" alt="">
                    </div>
                </div>

                <div class="cards-engajamentos">
                    <div class="card-visitas">
                        <div class="visitas-img">
                            <img src="../Perfil/PerfilArtista/Configuracoes/assets/img/olho-vermelho (2).png" alt="">
                        </div>
                        <div class="visitas-titulo">
                            <p>Artistas na plataforma</p>
                        </div>
                        <div class="visitas-quantidade">
                        <?php
                            require_once '../Dao/AdministradorDao.php';
                            $totalArtistas = AdministradorDao::ArtistasTotais();
                            echo '<p>' . $totalArtistas . '</p>';?>
                        </div>
                    </div>
                    <div class="card-curtidas">
                        <div class="curtidas-img">
                            <img src="../Perfil/PerfilArtista/Configuracoes/assets/img/estrela-getto.png" alt="">
                        </div>
                        <div class="curtidas-titulo">
                            <p>Usuários na plataforma</p>
                        </div>
                        <div class="curtidas-quantidade">
                            <?php
                            require_once '../Dao/AdministradorDao.php';
                            $totalUsuarios = AdministradorDao::UsuariosTotais();
                            echo '<p>' . $totalUsuarios . '</p>';?>
                        </div>
                    </div>
                    <div class="card-compartilhamentos">
                        <div class="compartilhamentos-img">
                            <img src="../Perfil/PerfilArtista/Configuracoes/assets/img/compartilhar.png" alt="">
                        </div>
                        <div class="compartilhamentos-titulo">
                            <p>Eventos na plataforma</p>
                        </div>
                        <div class="compartilhamentos-quantidade">
                            <?php
                            require_once '../Dao/AdministradorDao.php';
                            $totalEventos = AdministradorDao::EventosTotais();
                            echo '<p>' . $totalEventos . '</p>';?>
                        </div>
                    </div>
                    <div class="card-publicacoes">
                        <div class="publicacoes-img">
                            <img src="../Perfil/PerfilArtista/Configuracoes/assets/img/pincel.png" alt="">
                        </div>
                        <div class="publicacoes-titulo">
                            <p>Publicações totais na plataforma</p>
                        </div>
                        <div class="publicacoes-quantidade">
                            <?php
                            require_once '../Dao/AdministradorDao.php';
                            $totalPublicacao = AdministradorDao::PublicacaoTotais();
                            echo '<p>' . $totalPublicacao . '</p>';?>
                        </div>
                    </div>
                </div>

            </div>



        </div>


    </main>



    <!-- ----------------------- ALERTA QUANDO APROVAR UM ARTISTA ---------------------- -->



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnRecusarList = document.querySelectorAll('.btnRecusar');

            btnRecusarList.forEach(function(btnRecusar) {
                btnRecusar.addEventListener('click', function() {
                    const formRecusar = btnRecusar.nextElementSibling;
                    const formAprovar = btnRecusar.parentElement.querySelector('.formAprovar');

                    formAprovar.style.display = 'none';
                    btnRecusar.style.display = 'none';
                    formRecusar.style.display = 'block';
                });
            });
        });
    </script>

    <script src="../jquery.js"></script>


    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->





    <script>
        /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";

        }

        // Seleciona o botão "Aprovar" pelo id
        var btnAprovar = document.getElementById("btn-aprovar");
        var divAlert = document.getElementById("alert");

        // Adiciona um evento de clique ao botão
        btnAprovar.addEventListener("click", function() {
            // Cria um elemento "div" para o alerta
            divAlert.style.display = 'flex';
        });
    </script>
</body>

</html>