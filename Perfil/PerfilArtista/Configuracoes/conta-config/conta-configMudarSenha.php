<?php
include('../../../../Controller/VerificaLogado.php');
require_once '../../../../Dao/ArtistaDao.php';
require_once 'Global.php';
require_once '../../../../Dao/UsuarioDao.php';


/*if (!isset($_COOKIE['primeiroLogin']) && $_COOKIE['idUser'] == $_SESSION['idUsuario']) {
    $dataExpiracao = strtotime('22-06-2023');
    setcookie('primeiroLogin', 'true', $dataExpiracao, '/');
    setcookie('idU', $_SESSION['idUsuario'], $dataExpiracao, '/');
    header('Location: ../escolhaTags.php');
    exit;
}*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
    <link rel="shortcut icon" href="../assets/img/logomarca.png" type="image/x-icon" />
    <link rel="stylesheet" href="../../../../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/contaMudarSenha.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="sidebar">
        <div class="d-flex justify-center align-items-center flex-column sidebar-box">
            <div class="d-flex justify-center align-items-center logos">
                <img src="assets/img/logomarca.png" alt="" class="img-fluid logo-marca">
                <h1 class="logo-tipo">Getto</h1>
            </div>
            <div class="d-flex justify-content-center align-items-center flex-column list-group-box">
                <ul class="list-group">
                    <a href="../../Feed/feed.php">
                        <li class="list-group-item"><button id="inicio" type="button" class="btn btn-primary custom-btn-item">Início</button></li>
                    </a>

                    <a href="../../Evento/eventoArtista.php">
                        <li class="list-group-item"><button id="eventos" class="btn btn-primary btn-item-list" type="button">Eventos</button></li>
                    </a>
                    <a href="">
                        <li class="list-group-item"><button id="notificacoes" class="btn btn-primary btn-item-list" type="button">Notificações</button></li>
                    </a>
                    <a href="../configuracoes.php">
                        <li class="list-group-item"><button id="configuracoes" class="btn btn-primary btn-item-list" type="button">Configurações</button></li>
                    </a>
                    <a href="../../Feed/descobrir.php">
                        <li class="list-group-item"><button id="descobrir" class="btn btn-primary btn-item-list" type="button">Descobrir</button></li>
                    </a>
                </ul>
            </div>
            <div class="nova-pub">
                <button id="nova-pub" class="btn btn-primary btn-nova-pub" type="button">Nova publicação</button>
            </div>
            <div class="sair">
                <a href="#" data-bs-toggle="modal" data-bs-target="#modalSairConta">
                    <img src="../assets/img/sair.png">Sair
                </a>
            </div>
            <!-- <div class="container">
            <div class="d-flex justify-content-center align-items-center flex-column sugestao-seguidores">
                <h1>Sugestão de seguidores!</h1>
                <div class="d-flex justify-content-center align-items-center flex-column sugestao-box">
                    <div class="d-flex justify-content-center align-items-center perfil-sugestao">
                        <div class="imagem-perfil-sugestao">
                            <img src="../Login/assets/img/logomarca.png" alt="" class="rounded-circle">
                        </div>
                        <div class="d-flex justify-center align-items-center flex-column informações-perfil-sugestao">
                            <div class="seguir-nickname">
                                <div class="nickname"><h1>@Melis</h1></div>
                                <div class="btn-seguir-sugestao">
                                    <button class="btn btn-primary" type="submit" value="Seguir">
                                </div>
                            </div>
                            <div class="bio">
                                <p>Cantor e compositor na zona leste.</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="d-flex justify-content-center align-items-center perfil-sugestao">
                        <div class="imagem-perfil-sugestao">
                            <img src="../Login/assets/img/logomarca.png" alt="" class="rounded-circle">
                        </div>
                        <div class="d-flex justify-center align-items-center flex-column informações-perfil-sugestao">
                            <div class="seguir-nickname">
                                <div class="nickname"><h1>@Melis</h1></div>
                                <div class="btn-seguir-sugestao">
                                    <button class="btn btn-primary" type="submit" value="Seguir">
                                </div>
                            </div>
                            <div class="bio">
                                <p>Cantor e compositor na zona leste.</p>
                            </div>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center align-items-center perfil-sugestao">
                        <div class="imagem-perfil-sugestao">
                            <img src="../Login/assets/img/logomarca.png" alt="" class="rounded-circle">
                        </div>
                        <div class="d-flex justify-center align-items-center flex-column informações-perfil-sugestao">
                            <div class="seguir-nickname">
                                <div class="nickname"><h1>@Melis</h1></div>
                                <div class="btn-seguir-sugestao">
                                    <button class="btn btn-primary" type="submit" value="Seguir">
                                </div>
                            </div>
                            <div class="bio">
                                <p>Cantor e compositor na zona leste.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center perfil-sugestao">
                        <div class="imagem-perfil-sugestao">
                            <img src="../Login/assets/img/logomarca.png" alt="" class="rounded-circle">
                        </div>
                        <div class="d-flex justify-center align-items-center flex-column informações-perfil-sugestao">
                            <div class="seguir-nickname">
                                <div class="nickname"><h1>@Melis</h1></div>
                                <div class="btn-seguir-sugestao">
                                    <button class="btn btn-primary" type="submit" value="Seguir">
                                </div>
                            </div>
                            <div class="bio">
                                <p>Cantor e compositor na zona leste.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        </div>
    </div>
    <div class="container">






        <div class="box">
            <div class="header-feed">
                <div class="div-logos">
                    <div class="logo-marca">
                        <img src="../assets/img/logomarca.png" alt="">
                    </div>
                    <div class="logo-tipo">
                        <h1>Getto</h1>
                    </div>
                </div>
                <div class="feed-perfil">
                    <div class="box-img-perfil-feed">
                        <img src="../../assets/img/FotoPerfil/<?PHP echo $_SESSION['fotoPerfilUsuario']; ?>" alt="">
                    </div>
                </div>
            </div>

            <form action="AlterarSenha.php" method="POST">

                <div class="voltar-conteudo">
                    <div class="voltar">
                        <a href="conta-config.php"> <img src="../assets/img/icon-voltar.png" alt="" class="icon-voltar"></a>
                    </div>
                    <div class="titulo-config">
                        <h1>Alteração de senha</h1>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input name="senha" type="password" class="form-control" aria-label="Sizing example input" placeholder="Senha atual" aria-describedby="inputGroup-sizing-default">
                    <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility('senha')">
                        <i class="fas fa-eye" id="toggleSenha"></i>
                    </button>
                </div>

                <div class="input-group mb-3">
                    <input name="senhaNova" type="password" class="form-control" aria-label="Sizing example input" placeholder="Nova senha" aria-describedby="inputGroup-sizing-default">
                    <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility('senhaNova')">
                        <i class="fas fa-eye" id="toggleSenhaNova"></i>
                    </button>
                </div>

                <div class="input-group mb-3">
                    <input name="confSenha" type="password" class="form-control" aria-label="Sizing example input" placeholder="Confirmar senha" aria-describedby="inputGroup-sizing-default">
                    <button class="btn btn-outline-secondary" type="button" onclick="togglePasswordVisibility('confSenha')">
                        <i class="fas fa-eye" id="toggleConfSenha"></i>
                    </button>
                </div>


                <button type="submit" class="btn btn-primary btn-entrar">Confirmar</button>

            </form>
            <div class="sidebar-config">

            </div>
            <div class="secoes-config">

            </div>

            <!-- <div class="lista-itens-config">
            <ul class="lista-config">
                <li class="item-config"><img src="../assets/img/icon-conta.svg" alt=""> <h1>Informações da conta</h1> <img src="../assets/img/icon-seta.svg" alt=""></li>
                <a href="../conta-config/conta-configMudarSenha.php"><li class="item-config"><img src="../assets/img/icon-senha.svg" alt=""> <h1>Alterar sua senha</h1><img src="../assets/img/icon-seta.svg" alt=""></li></a>
                <li class="item-config"><img src="../assets/img/icon-excluir.svg" alt=""> <h1>Excluir conta</h1> <img src="../assets/img/icon-seta.svg" alt=""></li>
                
            </ul>
        </div> -->
        </div>

    </div>
    <nav class="mobile-nav">
        <a href="../../Feed/feed.php" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-home.svg" alt="">
        </a>
        <a href="../../Feed/descobrir.php" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-pesquisa.svg" alt="">
        </a>
        <a href="../../Evento/eventoArtista.php" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-calendario.svg" alt="">
        </a>
        <a href="#" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-publicacao.svg" alt="" style="width: 35px;">
        </a>
        <a href="#" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-notificacao.svg" alt="">
        </a>
        <a href="../../perfil.php" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-amigos.svg" alt="">
        </a>
        <a href="../configuracoes.php" class="bloc-icon">
            <img src="../assets/img/bottomNav/icon-configuracoes.svg" alt="">
        </a>

    </nav>


    <div class="modal fade" id="modalSairConta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered justify-content-center">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sair da conta</h1>
                    <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Você deseja sair da sua conta?
                </div>
                <div class="modal-footer">
                    <form name="formExclui" action="../../../../Controller/Logout.php" method="POST">
                        <button type="submit" class="btn btn-secondary">Sair</button>
                    </form>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-primary">Voltar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
function togglePasswordVisibility(inputName) {
    var input = document.getElementsByName(inputName)[0];
    var eyeIcon = document.getElementById("toggle" + inputName);

    if (input.type === "password") {
        input.type = "text";
        eyeIcon.classList.remove("fa-eye");
        eyeIcon.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        eyeIcon.classList.remove("fa-eye-slash");
        eyeIcon.classList.add("fa-eye");
    }
}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
</body>

</html>