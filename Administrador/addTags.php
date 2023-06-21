<?PHP include('../Controller/VerificaLogadoAdm.php'); ?>

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
    <link rel="stylesheet" href="assets/css/addTags.css">
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
                            <a href="dashboard.php" id="dash">Dashboard</a>
                        </li>
                        <li class="item-sidebar">
                            <a href="denuncias.php" id="denuncia">Denúncias</a>
                        </li>
                        <li class="item-sidebar">
                            <a href="verifica.php" id="verificacao">Verificação de artistas</a>
                        </li>
                        <li class="item-sidebar">
                            <a href="#" id="tutorial">Tags</a>
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
            <div class="add-tags">
                <form name="FormcadTag" id="FormcadTag" enctype="multipart/form-data" action="../Controller/CadastraTag.php" method="Post">

                    <di v class="input-group" style="margin-bottom: 10px;">
                        <span class="input-group-text" id="inputGroup-sizing-lg">Insira o icone da tag</span>
                        <div class="preview-img">
                            <label class="picture" for="picture__input" tabIndex="0">
                                <span class="picture__image"></span>
                            </label>
                            <input type="file" name="imagemEvento" id="picture__input">
                        </div>
                    </div>
                    <div class="input-group input-group-lg">

                        <span class="input-group-text" id="inputGroup-sizing-lg">Insira a nova tag</span>
                        <input type="text" class="form-control" name="nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>


                <div class="tags-existentes">

                    <h1>Tags já existentes</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">imagem</th>
                                <th scope="col">Tag</th>
                                <th scope="col">#</th>
                                <th scope="col">#</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require_once 'GlobalAdm.php';
                            $t = TipoArteDao::ListaTag();
                            foreach ($t as  $chave => $tag) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $tag['idTipoArte']; ?></th>
                                    <th scope="row" id="icone"><img src="../assets/img/background.svg" alt="" srcset=""></th>
                                    <td><?php echo $tag['nomeTipoArte']; ?></td>
                                    <td><button class="btn btn-danger">Excluir</button></td>
                                    <td><button data-bs-toggle="modal" data-bs-target="#mudarTag" class="btn btn-warning">Editar</button></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


    </main>



    <!-- ----------------------- ALERTA QUANDO APROVAR UM ARTISTA ---------------------- -->










    <!-- ------------------------------- MODAL PARA MUDAR CATEGORIA ------------------------------ -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="mudarTag" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Alterar tag</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group input-group-lg">

                        <input type="text" value="Tag atual" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-secondary">Salvar</button>
                </div>
            </div>
        </div>
    </div>


    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script> -->

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
    <script src="assets/js/preview.js"></script>







</body>

</html>