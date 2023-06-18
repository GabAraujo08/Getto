<?php
require_once 'GlobalController.php';
session_start();
$previousPage = $_SERVER['HTTP_REFERER'];
    header('Location: ' . $previousPage);


$evento = new Evento();


$evento->setHorarioInicioEvento($_POST['horarioInicio']);
$evento->setHorarioFinalEvento($_POST['horarioFim']);
$evento->setDataEvento($_POST['dataEvento']);
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
$evento->setIdTipoArte($_POST['tipoArte']);
$evento->setLinkIng($_POST['ingressoEvento']);

EventoDao::cadastrar($evento);


$evento->setIdEvento(EventoDao::consultarIdEvento($evento));
$nome = $_FILES['imagemEvento']['name'];
$tipo = $_FILES['imagemEvento']['type'];
$tamanho = $_FILES['imagemEvento']['size'];
$imagemEvento = $_FILES['imagemEvento']['tmp_name'];

$extensao = substr($nome, -4);
$nomenovo = uniqid().$extensao; 

move_uploaded_file($imagemEvento, "../Perfil/PerfilArtista/Evento/assets/img/".$nomenovo);
$evento->setImagemEvento($nomenovo);

EventoDao::AtualizaFoto($evento);



exit();

?>