<?php
require_once '../../../Dao/Conexao.php';
require_once '../../../Dao/EventoDao.php';
require_once '../../../Dao/TipoArteDao.php';
require_once '../../../Dao/EventoDao.php';
require_once '../../../Dao/PresencaDao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php session_start(); ?>

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
            <div class="header-eventos">
                <div class="img">
                    <img src="assets/img/header-evento.svg" alt="">
                </div>
                <div class="textos">
                    <p style="font-family: 'Poppins';
font-style: normal;
font-weight: 600;
font-size: 20px;
margin: 0;
color: #664187;">
                        Aqui vocês poderão ficar por dentro de todos os eventos!
                    </p>
                    <p style="font-family: 'Poppins';
font-style: normal;
font-weight: 600;
font-size: 16px;




color: #656565;">
                        Fique de olho e acompanhe seus artistas favoritos!
                    </p>


                    <div class="btn-criar-evento">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCriarEvento">Criar evento</button>
                    </div>
                </div>
            </div>

            <div class="eventos-main">
                <?php
                require_once '../../../Dao/EventoDao.php';

                $eventos = EventoDao::ListaEvento($_SESSION['idUsuario']);
                foreach ($eventos as $index => $evento) { ?>



                    <div class="accordion accordion-flush" id="accordionFlushExample1<?php echo $index; ?>">
                        <div class="accordion-item">
                            <h2 class="accordion-header rounded-4" id="flush-heading1<?php echo $index; ?>">
                                <button class="accordion-button collapsed rounded-4" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1<?php echo $index; ?>" aria-expanded="false" aria-controls="flush-collapse1<?php echo $index; ?>" data-bs-parent="#accordionFlushExample<?php echo $index; ?>" style="border-radius: 20px;">
                                    <div class="resumoDiv">
                                        <div class="card">
                                            <div class="front">
                                            <p><?php  $dia = date('d', strtotime($evento['dataEvento']));
                                                    echo $dia; ?></p><span><?php  $mes = strtolower(date('M', strtotime($evento['dataEvento'])));
                                                    echo $mes; ?></span>
                                            </div>
                                            <div class="back">
                                                <p>inicio: <?php echo $evento['horarioInicioEvento']; ?></p><span>fim: <?php echo $evento['horarioFinalEvento']; ?></span>
                                            </div>
                                        </div>
                                        <div class="card-evento">
                                            <div class="titulo-evento">
                                                <p><?php echo $evento['tituloEvento']; ?></p>
                                            </div>
                                            <div class="endereco-evento">
                                                <p><?php echo $evento['logradouroEvento']; ?> <?php echo $evento['numLogEvento']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="flush-collapse1<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading1<?php echo $index; ?>" data-bs-parent="#accordionFlushExample1<?php echo $index; ?>">
                                <div class="accordion-body rounded-4">
                                    <div class="baixo">
                                        <div class="img-evento">
                                            <img src="assets/img/<?php echo $evento['imagemEvento'] ?> ">
                                        </div>
                                        <div class="conteudo-evento">
                                            <div class="criador-evento">
                                                <div class="img-criador">
                                                    <img src="../assets/img/FotoPerfil/" alt="">
                                                </div>
                                                <div class="nome-criador">
                                                    <p> tem que colocar ainda </p>
                                                </div>
                                            </div>
                                            <div class="descricao-evento">
                                                <p><?php echo $evento['descEvento']; ?></p>
                                            </div>

                                            <div class="horario">
                                                <div class="horario-inicio">
                                                    <p>Horario de ini­cio: <?php echo $evento['horarioInicioEvento']; ?></p>
                                                </div>
                                                <div class="horario-termino">
                                                    <p>Horario de termino: <?php echo $evento['horarioFinalEvento']; ?></p>
                                                </div>
                                            </div>



                                            <div class="presenca-evento">
                                                <div class="confirmados-evento">
                                                    <p><?php
                                                        $prec = PresencaDao::consultar($evento['idEvento']);
                                                        echo $prec . ' Presenças confirmadas'; ?></p>
                                                </div>
                                                <div class="confirmar-evento">
                                                    <?php
                                                    $conexao = Conexao::conectar();
                                                    $consulta = $conexao->prepare('SELECT idPresenca, idEvento FROM tbPresenca WHERE idUsuario = ?');
                                                    $consulta->bindValue(1, $_SESSION['idUsuario']);
                                                    $consulta->execute();
                                                    $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

                                                    if ($resultado == false) {
                                                    ?>

                                                        <form id="Presenca" name="Presenca" action="../../../Controller/ConfirmarPresenca.php" method="POST">
                                                            <input type="hidden" name="idEvento" value="<?PHP echo $evento['idEvento']; ?>">
                                                            <button name="pp" type="submit" class="btn">
                                                                Confirmar Presença
                                                            </button>
                                                        </form>

                                                    <?php
                                                    } else if (!in_array($evento['idEvento'], array_column($resultado, 'idEvento'))) {
                                                    ?>
                                                        <form id="presenca" name="Presenca" action="../../../Controller/ConfirmarPresenca.php" method="POST">
                                                            <input type="hidden" name="idEvento" value="<?PHP echo $evento['idEvento']; ?>">
                                                            <button name="pp" type="submit" class="btn">
                                                                Confirmar Presença
                                                            </button>
                                                        </form>
                                                    <?php
                                                    } else {
                                                    ?>

                                                        <form id="presenca" name="Presenca" action="../../../Controller/DesPresenca.php" method="POST">
                                                            <input type="hidden" name="idEvento" value="<?PHP echo $evento['idEvento']; ?>">
                                                            <button name="pp" type="submit" class="btn">
                                                                tirar Presença
                                                            </button>
                                                        </form>

                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
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
                            <p>VocÃª deseja sair da sua conta?</p>
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
                            <form action="../../../Controller/CriaEvento.php" name="criaEvento" id="criaEvento" method="POST" enctype="multipart/form-data">
                                <div class="container">
                                    <div class="lado-esquerdo">
                                        <label>Inserir tí­tulo: </label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="tituloEvento" class="form-control" placeholder="tí­tulo">
                                        </div>
                                        <div class="hora">
                                            <div class="inicio">
                                                <label for="horario">Horário de iní­cio: </label>
                                                <div class="input-group mb-3">
                                                    <input type="time" id="horario" name="horarioInicio" class="form-control" placeholder="iní­cio">
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
                                            <label>Tipo de Arte</label>
                                            <div class="input-group mb-3">
                                                <select name="tipoArte" id="">
                                                    <option value="#">Selecionar...</option>
                                                    <?php
                                                    $t = TipoArteDao::ListaTag();
                                                    foreach ($t as $tag) {
                                                    ?>
                                                        <option value="<?PHP echo $tag['idTipoArte']; ?>"><?PHP echo $tag['nomeTipoArte']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
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
                                                <option value="AP">Amapa</option>
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
                                                <option value="PI">Piauí­</option>
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
                                            <textarea cols="25" rows="7" class="form-control" name="descEvento" id="desc-evento" placeholder="por favor não esqueça de colocar o link da compra do ingresso "></textarea>

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