<?php
require_once 'GlobalController.php';
session_start();
header('Location: ../Perfil/PerfilArtista/Evento/eventoArtista.php');

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
$evento->setImagemEvento(' 0.png ');
$evento->setIdArtista($_SESSION['idArtista']);

EventoDao::cadastrar($evento);


$evento->setIdEvento(EventoDao::consultarIdEvento($evento));
$nome = $_FILES['imagemEvento']['name'];
$tipo = $_FILES['imagemEvento']['type'];
$tamanho = $_FILES['imagemEvento']['size'];
$imagemEvento = $_FILES['imagemEvento']['tmp_name'];

$extensao = substr($nome, -4);
$nomenovo = $evento->getIdEvento().$extensao;

move_uploaded_file($imagemEvento, "../Perfil/PerfilArtista/Evento/assets/img/".$nomenovo);
$evento->setImagemEvento($nomenovo);



exit();

?>