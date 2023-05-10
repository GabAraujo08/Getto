<?php
require_once 'GlobalController.php';
session_start();

$evento = new Evento();

$evento->setHorarioInicioEvento($_POST['horarioInicio']);
$evento->setHorarioFinalEvento($_POST['horarioFim']);


$evento->setDataEvento($_POST['dataEvento']);
$evento->setConfirmarEvento(0);
$evento->setDescEvento($_POST['descEvento']);
$evento->setTituloEvento($_POST['tituloEvento']);
$evento->setStatusEvento('Normal');
$evento->setLogradouroEvento($_POST['logradouro']);
$evento->setNumLogEvento($_POST['numLog']);
$evento->setCepEvento($_POST['cepEvento']);
$evento->setBairroEvento($_POST['bairroEvento']);
$evento->setCidadeEvento($_POST['cidEvento']);
$evento->setEstadoEvento($_POST['estadoEvento']);
EventoDao::cadastrar($evento);


$midia = new Midia();
$midia->setArquivoMidia(' ');
$midia->setIdTipoMidia($_POST['idTipoMidia']);
MidiaDao::cadastrar($midia);
$midia->setIdMidia(MidiaDao::consultarIdMidia($midia));
$nome = $_FILES['arquivo']['name'];
$tipo = $_FILES['arquivo']['type'];
$tamanho = $_FILES['arquivo']['size'];
$arquivo = $_FILES['arquivo']['tmp_name'];

$extensao = substr($nome, -4);
$nomenovo = $midia->getIdMidia() . $extensao;

move_uploaded_file($arquivo, "../Perfil/PerfilArtista/assets/img/evento" . $nomenovo);
$midia->setArquivoMidia($nomenovo);
MidiaDao::atualizarArquivo($midia);
