<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../PerfilArtista/Feed/assets/css/feedMobile.css">
    <link rel="shortcut icon" href="assets/img/logomarca.png" type="image/x-icon" />
    <link rel="stylesheet" href="../../PerfilArtista/Evento/assets/css/eventoArtista.css">
    <link rel="stylesheet" href="../../PerfilArtista/assets/css/preview-criar-evento.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Evento</title>
</head>

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
                <div class="nova-pub">
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
                                            <button>Confirmar presença</button>
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
                                            <button>Confirmar presença</button>
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


<!-- ----------------------------- MODAL CRIAR EVENTO -------------------------- -->

<div class="modal fade" id="modalCriarEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Criar novo evento</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../../Controller/CriaEvento.php" name="criaEvento" id="criaEvento" method="POST" enctype="multipart/form-data">
                        <div class="container">
                            <div class="lado-esquerdo">
                                <label>Inserir título: </label>
                                <div class="input-group mb-3">
                                    <input type="text" name="tituloEvento" class="form-control" placeholder="título">
                                </div>
                                <div class="hora">
                                    <div class="inicio">
                                        <label for="horario">Horário de início: </label>
                                        <div class="input-group mb-3">
                                            <input type="time" id="horario" name="horarioInicio" class="form-control" placeholder="início">
                                        </div>
                                    </div>
                                    <div class="termino">
                                        <label>Horário de término: </label>
                                        <div class="input-group mb-3">
                                            <input type="time" id="horario" name="horarioFim" class="form-control" placeholder="término">
                                        </div>
                                    </div>
                                </div>
                                <div class="data">
                                    <label for="data">Selecione uma data:</label>
                                    <div class="input-group mb-3">
                                        <input type="date" name="dataEvento" id="data">
                                    </div>
                                    <label>Número de endereço: </label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="numLog" placeholder="número de endereço">
                                    </div>
                                </div>
                                <label>Endereço: </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="logradouro" placeholder="endereço">
                                </div>
                                <label>Bairro: </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="bairroEvento" placeholder="bairro">
                                </div>
                                <label>CEP: </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="cepEvento" placeholder="cep">
                                </div>
                                <label>Cidade: </label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" name="cidEvento" placeholder="cidade">
                                </div>
                                <label>Estado: </label>
                                <div class="input-group mb-3">
                                    <select id="estado-evento" name="estadoEvento" class="select-estado">
                                        <option value="AC">Selecionar</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="EX">Estrangeiro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="lado-direito">
                                <div class="input-group mb-3">
                                    <div class="preview-img">
                                        <label class="picture" for="picture__input" tabIndex="0">
                                            <span class="picture__image"></span>
                                        </label>
                                        <input type="file" name="imagemEvento" id="picture__input">
                                    </div>
                                </div>
                                <label>Descrição do evento</label>
                                <div class="input-group mb-3">
                                    <input type="textarea" class="form-control" name="descEvento" id="desc-evento" placeholder="descrição">
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                            <button type="submit" class="btn">Concluir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


        <div class="div-logo-marca">
            <div class="logo-marca">
                <img src="assets/img/logomarca.png" alt="">
            </div>
            <div class="btn-criar-evento">
                <button type="button" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#modalCriarEvento">Criar evento</button>
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
    <script src="../../PerfilArtista/assets/js/preview.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>