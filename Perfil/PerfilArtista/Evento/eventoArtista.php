<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../PerfilArtista/Feed/assets/css/feedMobile.css">
    <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
    <link rel="stylesheet" href="../../PerfilArtista/Evento/assets/css/eventoArtista.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Evento</title>
</head>

<style>
    a {
        text-decoration: none;
    }

    @font-face {
        font-family: 'InterRegular';
        src: url('../fonts/Inter-Regular.ttf');
    }

    .resumoDiv {
        display: flex;
        margin-left: 5%;
    }

    .card {
        position: relative;
        width: 160px;
        height: 100px;
        border-radius: 20px;
        background-color: #E1E1E6;
        border: none;
    }

    .card .front:after {
        position: absolute;
        content: '';
        right: 0;
        top: 0;
        border-bottom: 30px solid #9056E8;
        border-right: 30px solid #E1E1E6;
    }

    .card div {
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        backface-visibility: hidden;
        transition: 1s;
    }

    .card .front {
        background: #664187;
        transform: perspective(500px) rotateY(0deg);
        border-radius: 20px;
        display: flex;
        flex-direction: column;
    }

    .card .back {
        background: #9056E8;
        transform: perspective(500px) rotateY(180deg);
        border-radius: 20px;
        display: flex;
        flex-direction: column;
    }


    .card:hover .front {
        transform: perspective(100px) rotateY(180deg);
    }

    .card:hover .back {
        transform: perspective(100px) rotateY(360deg);
    }

    .card .front p {
        font-family: 'InterRegular';
        font-style: normal;
        font-weight: 600;
        font-size: 26px;
        color: #FFFFFF;
    }

    .card .front span {
        font-family: 'InterRegular';
        font-style: normal;
        font-weight: 600;
        font-size: 26px;
        color: #FFFFFF;
    }

    .card .back p {
        font-family: 'InterRegular';
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        color: #FFFFFF;
    }

    .card .back span {
        font-family: 'InterRegular';
        font-style: normal;
        font-weight: 600;
        font-size: 12px;
        color: #FFFFFF;
    }

    .criador-evento {
        display: flex;
        align-items: center;
    }

    .criador-evento .img-criador {
        width: 53px;
        height: 53px;
        max-width: 53px;
        max-height: 53px;
        border-radius: 100%;
    }


    .criador-evento .img-criador img {
        width: 100%;
    }

    .criador-evento .nome-criador p {
        font-family: 'InterRegular';
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 19px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 0;
        margin-left: 10px;
    }

    .baixo .img-evento {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .conteudo-evento .descricao-evento p {
        font-family: 'InterRegular';
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 19px;
        display: flex;
        align-items: center;
        margin-top: 10px;
    }

    .conteudo-evento {
        display: flex;
        flex-direction: column;
        padding: 20px;
        padding-bottom: 0px;
    }

    .conteudo-evento .confirmar-evento button {
        font-family: 'InterRegular';
        font-style: normal;
        font-weight: 500;
        font-size: 15px;
        line-height: 22px;
        color: #FFFFFF;
        background: #664187;
        border-radius: 15px;
        border: none;
        width: 200px;
        height: 50px;
        transition: 0.3s;
    }


    .conteudo-evento .confirmar-evento button:hover {

        background: #542183;

    }

    .presenca-evento {
        display: flex;
        justify-content: space-between;
    }

    .presenca-evento .confirmados-evento {
        font-family: 'InterRegular';
        font-style: normal;
        font-weight: 600;
        font-size: 15px;
        line-height: 22px;
    }

    .baixo {
        display: flex;
        height: 400px;
        align-items: center;
    }

    .card-evento {
        width: 100%;
        border-radius: 20px;
        margin-left: 10%;
    }

    .card-evento .titulo-evento p {
        font-family: 'InterRegular';
        font-style: normal;
        font-weight: 600;
        font-size: 32px;
        line-height: 39px;
    }

    .card-evento .endereco-evento p {
        font-family: 'InterRegular';
        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 29px;
    }

    .box-eventos {
        width: 100%;
        margin-left: 315px;
        margin-top: 30px;
        display: flex;
        flex-direction: column;

    }

    /* #accordionFlushExample {
        width: 100%;
        margin-left: 315px;
        margin-top: 30px;
        background-color: #E1E1E6;
        margin-right: 20px;
    } */


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

    .horario-inicio p {
        font-family: 'InterRegular';
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 19px;
        display: flex;
        align-items: center;
    }

    .horario-termino p {
        font-family: 'InterRegular';
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 19px;
        display: flex;
        align-items: center;
    }

    @media(max-width: 980px) {
        .box-eventos {
            margin-left: 0;
        }
    }

    @media screen and (max-width: 1550px) {
        #accordionFlushExample {
            width: 80%;
            margin-left: 21%;
            margin-top: 3%;
            background-color: #E1E1E6;
            margin-right: 2%;
        }
    }

    @media screen and (max-width: 1440px) {
        #accordionFlushExample {
            width: 80%;
            margin-left: 21%;
            margin-top: 3%;
            background-color: #E1E1E6;
            margin-right: 2%;
        }
    }

    @media screen and (max-width: 1300px) {
        #accordionFlushExample {
            width: 80%;
            margin-left: 30%;
            margin-top: 3%;
            background-color: #E1E1E6;
            margin-right: 5%;
        }
    }

    @media screen and (max-width: 1000px) {
        #accordionFlushExample {
            width: 80%;
            margin-left: 35%;
            margin-top: 3%;
            background-color: #E1E1E6;
            margin-right: 2%;
        }
    }

    @media screen and (max-width: 979px) {
        #accordionFlushExample {
            width: 100%;
            margin-left: 2%;
            margin-top: 3%;
            background-color: #E1E1E6;
            margin-right: 2%;
        }
    }

    @media screen and (max-width: 300px) {
        #accordionFlushExample {
            width: 100%;
            margin-left: 2%;
            margin-top: 3%;
            background-color: #E1E1E6;
            margin-right: 2%;
        }
    }

    @media screen and (max-width: 730px) {
        #accordionFlushExample {
            width: 100%;
            margin-left: 2%;
            margin-top: 3%;
            background-color: #E1E1E6;
            margin-right: 2%;
        }

        .baixo {
            display: flex;
            flex-direction: column;
        }
    }
</style>

<body>

    <div class="d-flex">
        <!-- FAZ COM QUE A SIDEBAR NA WEB FIQUE CORRETA -->
        <div class="sidebar">
            <div class="d-flex justify-center align-items-center flex-column sidebar-box">
                <div class="d-flex justify-center align-items-center logos">
                    <img style="display: none;" src="assets/img/logomarca.png" alt="" class="img-fluid logo-marca">
                    <h1 class="logo-tipo">Getto</h1>
                </div>
                <div class="d-flex justify-content-center align-items-center flex-column list-group-box">
                    <ul class="list-group">
                        <a href="../Feed/feed.php">
                            <li class="list-group-item"><button id="inicio" type="button" class="btn btn-primary custom-btn-item">Início</button></li>
                        </a>
                        <a href="../../PerfilArtista/Amigos/amigos.php">
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
                <div  class="nova-pub">
                    <button id="nova-pub" class="btn btn-primary btn-nova-pub" type="button">Nova publicação</button>
                </div>

                <div class="sair">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#modalSairConta">
                        <img src="../../PerfilArtista/Feed/assets/img/sair.png">Sair
                    </a>
                </div>

            </div>
        </div>

        <div class="box-eventos">
            <div class="accordion accordion-flush" id="accordionFlushExample1">
                <div class="accordion-item">
                    <h2 class="accordion-header rounded-4" id="flush-heading1">
                        <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1" style="border-radius: 20px;">
                            <div class="resumoDiv">
                                <div class="card">
                                    <div class="front">
                                        <p>11</p><span>Abr</span>
                                    </div>
                                    <div class="back">
                                        <p>inicio: 12am</p><span>fim: 17:45pm</span>
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
                    <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample1">
                        <div class="accordion-body rounded-4">
                            <div class="baixo">
                                <div class="img-evento">
                                    <img src="assets/img/image 29.png">
                                </div>
                                <div class="conteudo-evento">
                                    <div class="criador-evento">
                                        <div class="img-criador">
                                            <img src="../assets/img/img-perfil.svg">
                                        </div>
                                        <div class="nome-criador">
                                            <p>Gabriel Araujo</p>
                                        </div>
                                    </div>
                                    <div class="descricao-evento">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus diam,
                                            tristique quis risus non, condimentum sollicitudin nulla. Nunc fringilla, ex eu
                                            vulputate viverra, orci sapien posuere urna, sit amet condimentum sem augue quis
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>

                                    <div class="horario">
                                        <div class="horario-inicio">
                                            <p>Horário de início: 12:00 am</p>
                                        </div>
                                        <div class="horario-termino">
                                            <p>Horário de término: 15:00pm</p>
                                        </div>
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
            <div class="accordion accordion-flush" id="accordionFlushExample2">
                <div class="accordion-item">
                    <h2 class="accordion-header rounded-4" id="flush-heading2">
                        <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2" style="border-radius: 20px;">
                            <div class="resumoDiv">
                                <div class="card">
                                    <div class="front">
                                        <p>11</p><span>Abr</span>
                                    </div>
                                    <div class="back">
                                        <p>inicio: 12am</p><span>fim: 17:45pm</span>
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
                    <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample2">
                        <div class="accordion-body rounded-4">
                            <div class="baixo">
                                <div class="img-evento">
                                    <img src="assets/img/image 29.png">
                                </div>
                                <div class="conteudo-evento">
                                    <div class="criador-evento">
                                        <div class="img-criador">
                                            <img src="../assets/img/img-perfil.svg">
                                        </div>
                                        <div class="nome-criador">
                                            <p>Gabriel Araujo</p>
                                        </div>
                                    </div>
                                    <div class="descricao-evento">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tellus diam,
                                            tristique quis risus non, condimentum sollicitudin nulla. Nunc fringilla, ex eu
                                            vulputate viverra, orci sapien posuere urna, sit amet condimentum sem augue quis
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>

                                    <div class="horario">
                                        <div class="horario-inicio">
                                            <p>Horário de início: 12:00 am</p>
                                        </div>
                                        <div class="horario-termino">
                                            <p>Horário de término: 15:00pm</p>
                                        </div>
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
        </div>






        <nav style="background-color: #fff;" class="mobile-nav">
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

        <!-- Modal -->
        <div class="modal fade" id="modalSairConta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered justify-content-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Sair da conta</h1>
                        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Você deseja sair da sua conta?</p>
                    </div>
                    <div class="modal-footer">
                        <form name="formExclui" action="../../../Controller/Logout.php" method="POST">
                            <button type="submit" class="btn btn-secondary">Sair da conta</button>
                        </form>
                        <button type="button" data-bs-dismiss="modal" class="btn btn-primary">Voltar</button>
                    </div>
                </div>
            </div>
        </div>

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