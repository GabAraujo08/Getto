<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/feedMobile.css">
    <link rel="stylesheet" href="./assets/css/evento.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Evento</title>
</head>

<style>
    #accordionFlushExample {
    width: 80%;
    margin-left: 18%;
    margin-top: 3%;
    background-color: #E1E1E6;
}

.accordion-item {
    background-color: #E1E1E6;
    border-radius: 20px;
}

.accordion-button {
    background-color: #E1E1E6;
    border-radius: 20px;
}

.accordion-button:not(.collapsed) {
    color: #664187;
    background-color: #E1E1E6;
    box-shadow: #9056E8;
}

.accordion-button:focus {
    border-color: #9056E8;
    box-shadow: 0 0 0 0.25rem rgba(92, 2, 128, 0.25);
}
</style>

<body>

    <div class="d-flex">
        <!-- FAZ COM QUE A SIDEBAR NA WEB FIQUE CORRETA -->
        <div class="sidebar">
            <div class="d-flex justify-center align-items-center flex-column sidebar-box">
                <div class="d-flex justify-center align-items-center logos">
                    <img src="assets/img/logomarca.png" alt="" class="img-fluid logo-marca">
                    <h1 class="logo-tipo">Getto</h1>
                </div>
                <div class="d-flex justify-content-center align-items-center flex-column list-group-box">
                    <ul class="list-group">
                        <a href="../Feed/feed.php">
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
                            <li class="list-group-item"><button id="amigos" class="btn btn-primary btn-item-list" type="button">Perfil</button></li>
                        </a>
                    </ul>
                </div>
                <div class="nova-pub">
                    <button id="nova-pub" class="btn btn-primary btn-nova-pub" type="button">Nova publicação</button>
                </div>
                <a href="#">
                    <div class="d-flex flex-row justify-content-center align-items-center btn-sair">
                        <img src="assets/img/icon-logout.svg" alt="Sair">
                        <h1>Sair</h1>
                    </div>
                </a>
            </div>
        </div>

        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header rounded-4" id="flush-headingOne">
                    <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="border-radius: 20px;">
                        <div class="resumoDiv">
                            <div class="card">
                                <div class="front">
                                    <p>11</p><span>Abr</span>
                                </div>
                                <div class="back">
                                    <p>12</p><span>AM</span>
                                </div>
                            </div>
                            <div class="card-evento">
                                <div class="titulo-evento">
                                    <p>Batalha de rima</p>
                                </div>
                                <div class="endereco-evento">
                                    <p>Rua Guaianases</p>
                                </div>
                            </div>
                        </div>
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body rounded-4">
                        <div class="baixo">
                            <div class="img-evento">
                                <img src="assets/img/image 29.png">
                            </div>
                            <div class="conteudo-evento">
                                <div class="criador-evento">
                                    <div class="img-criador">
                                        <img src="assets/img/icone-pessoa.png">
                                    </div>
                                    <div class="nome-criador">
                                        <p>nome criador</p>
                                    </div>
                                </div>
                                <div class="descricao-evento">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus diam,
                                        tristique quis risus non, condimentum sollicitudin nulla. Nunc fringilla, ex eu
                                        vulputate viverra, orci sapien posuere urna, sit amet condimentum sem augue quis
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <div class="presenca-evento">
                                    <div class="confirmados-evento">
                                        <p>138 confirmados</p>
                                    </div>
                                    <div class="confirmar-evento">
                                        <button>Confirmar evento</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="mobile-nav">
            <a href="#" class="bloc-icon">
                <img src="assets/img/bottomNav/icon-home.svg" alt="">
            </a>
            <a href="#" class="bloc-icon">
                <img src="assets/img/bottomNav/icon-pesquisa.svg" alt="">
            </a>
            <a href="#" class="bloc-icon">
                <img src="assets/img/bottomNav/icon-calendario.svg" alt="">
            </a>
            <a href="#" class="bloc-icon">
                <img src="assets/img/bottomNav/icon-publicacao.svg" alt="" style="width: 35px;">
            </a>
            <a href="#" class="bloc-icon">
                <img src="assets/img/bottomNav/icon-notificacao.svg" alt="">
            </a>
            <a href="#" class="bloc-icon">
                <img src="assets/img/bottomNav/icon-amigos.svg" alt="">
            </a>
            <a href="#" class="bloc-icon">
                <img src="assets/img/bottomNav/icon-configuracoes.svg" alt="">
            </a>

        </nav>

        <script>
            const card = document.querySelector("#card")
            card.addEventListener("mouseenter", (e) => {
                card.classList.toggle("flip")
            })
            const card2 = document.querySelector("#card")
            card.addEventListener("mouseleave", (e) => {
                card.classList.toggle("flip")
            })
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>