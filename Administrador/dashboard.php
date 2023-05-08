<?PHP include('../Controller/VerificaLogadoAdm.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="assets/img/logomarca.svg" type="imagem">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body>
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
                            <a id="denuncia">Denúncias</a>
                        </li>
                        <li class="item-sidebar">
                            <a id="verificacao">Verificação de artistas</a>
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
                    <p>Olá, <?php echo($_SESSION['nomeAdministrador']) ?> </p>

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
            <div class="box-denuncia-verificacao">


                <div class="box-denuncias">
                    <div class="titulo-container-denuncia">
                        <h1>
                            Denúncias recentes
                        </h1>
                    </div>
                    
                    <div class="denuncia">
                        <div class="img-denuncia">
                            <img src="assets/img/img-denuncia.svg" alt="">
                        </div>
                        <div class="textos-denuncia">
                            <div class="titulo-denuncia">
                                <h1>TIPO DE DENÚNCIA: RACISMO</h1>
                            </div>
                            <div class="desc-denuncia">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a scelerisque nibh.</p> 
                            </div>
                        </div>
                        <div class="box-btn-denuncia">
                            <button class="btn-denuncia">
                                Ver comentário
                            </button>
                        </div>
                    </div>
                        <div class="denuncia">
                            <div class="img-denuncia">
                                <img src="assets/img/img-denuncia.svg" alt="">
                            </div>
                            <div class="textos-denuncia">
                                <div class="titulo-denuncia">
                                    <h1>TIPO DE DENÚNCIA: RACISMO</h1>
                                </div>
                                <div class="desc-denuncia">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a scelerisque nibh.</p> 
                                </div>
                            </div>
                            <div class="box-btn-denuncia">
                                <button class="btn-denuncia">
                                    Ver comentário
                                </button>
                            </div>
                        </div>
                        <div class="denuncia">
                            <div class="img-denuncia">
                                <img src="assets/img/img-denuncia.svg" alt="">
                            </div>
                            <div class="textos-denuncia">
                                <div class="titulo-denuncia">
                                    <h1>TIPO DE DENÚNCIA: RACISMO</h1>
                                </div>
                                <div class="desc-denuncia">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a scelerisque nibh.</p> 
                                </div>
                            </div>
                            <div class="box-btn-denuncia">
                                <button class="btn-denuncia">
                                    Ver comentário
                                </button>
                            </div>
                        </div>
                        <div class="denuncia">
                            <div class="img-denuncia">
                                <img src="assets/img/img-denuncia.svg" alt="">
                            </div>
                            <div class="textos-denuncia">
                                <div class="titulo-denuncia">
                                    <h1>TIPO DE DENÚNCIA: RACISMO</h1>
                                </div>
                                <div class="desc-denuncia">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a scelerisque nibh.</p> 
                                </div>
                            </div>
                            <div class="box-btn-denuncia">
                                <button class="btn-denuncia">
                                    Ver comentário
                                </button>
                            </div>
                        </div>
                    
                </div>
            <!--BOX DA VERIFICAÇÃO COMEÇA AQUI-->
                <div class="container-verificacao">
                    <div class="box-verificacao">
                        <div class="titulo-container-verificacao">
                            <h1>Pedidos de Verificações</h1>
                        </div>

                        <?php
                            require_once 'GlobalAdm.php';
                            $u = UsuarioDao::ListaVerificação(); 
                            foreach($u as  $chave => $usuario):
                        ?>
                        <div class="verificacao">
                            <div class="titulo-verificacao">
                                <h2> <?PHP echo $usuario['nomeUsuario']; ?> </h2>
                            </div>
                            <div class="box-btn-verificacao">
                                <button class="btn-verificacao" data-bs-toggle="modal" data-bs-target="#modalExcluirConta<?PHP echo $usuario['idUsuario']; ?>"></button>
                            </div>
                        </div>

                        <div class="modal fade" id="modalExcluirConta<?PHP echo $usuario['idUsuario']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered justify-content-center modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><?PHP echo $usuario['nomeUsuario']; ?></h1>
                                        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-body-img">
                                            <img src="../Perfil/assets/img/FotoPerfil/<?php echo $usuario['fotoPerfilUsuario']; ?>">
                                        </div>
                                        <div class="modal-body-link">
                                            <div class="link-titulo">
                                                <p>Link repositório:</p>
                                            </div>
                                            <div class="link">
                                                <p><?php echo $usuario['portfolio']; ?></p>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <form name="btnaprova" id="btnaprova" action="../Controller/AprovaArtista.php" method="Post">
                                                         
                                            <input type="hidden" name="usuario_id" value="<?php echo $usuario['idUsuario']; ?>">
                                             <input type="hidden" name="usuario_indice" value="<?php echo $chave; ?>">
                                            
                                            <button type="submit" id="btn-aprovar" data-bs-dismiss="modal" name="botao" class="btn btn-secondary">Aprovar</button>
                                        </form>
                                        <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Recusar</button>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <?PHP
                           endforeach;
                        ?>
                        
                    </div>
                </div>
            </div>



        </div>


    </main>

    

<!-- ----------------------- ALERTA QUANDO APROVAR UM ARTISTA ---------------------- -->

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

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

// Adiciona um evento de clique ao botão
btnAprovar.addEventListener("click", function() {
  // Cria um elemento "div" para o alerta
  var divAlert = document.createElement("div");
  divAlert.classList.add("alert");
  
  // Adiciona o conteúdo do alerta
  divAlert.innerHTML = '<span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span><strong>Aprovado</strong> Você aprovou um novo artista!';

  // Adiciona o elemento "div" ao corpo do documento
  document.body.appendChild(divAlert);
});
    </script>
</body>

</html>