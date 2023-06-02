<?php
require_once 'GlobalController.php';
session_start();
header('Location: ../Perfil/PerfilArtista/Evento/eventoArtista.php');

$evento = new Evento();

$evento->setIdEvento($_SESSION['idEvento']);
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


$_SESSION['horarioInicioEvento'] = $evento->getHorarioInicioEvento();
$_SESSION['horarioFinalEvento'] = $evento->getHorarioFinalEvento();
$_SESSION['dataEvento'] = $evento->getDataEvento();
$_SESSION['descEvento'] = $evento->getDescEvento();
$_SESSION['tituloEvento'] = $evento->getTituloEvento();
$_SESSION['statusEvento'] = $evento->getStatusEvento();
$_SESSION['logradouroEvento'] = $evento->getLogradouroEvento();
$_SESSION['numLogEvento'] = $evento->getNumLogEvento();
$_SESSION['cepEvento'] = $evento->getCepEvento();
$_SESSION['bairroEvento'] = $evento->getBairroEvento();
$_SESSION['cidadeEvento'] = $evento->getCidadeEvento();
$_SESSION['estadoEvento'] = $evento->getEstadoEvento();
$_SESSION['imagemEvento'] = $evento->getImagemEvento();


EventoDao::cadastrar($evento);


$evento->setIdEvento(EventoDao::consultarIdEvento($evento));
$nome = $_FILES['imagemEvento']['name'];
$tipo = $_FILES['imagemEvento']['type'];
$tamanho = $_FILES['imagemEvento']['size'];
$imagemEvento = $_FILES['imagemEvento']['tmp_name'];

$extensao = substr($nome, -4);
$nomenovo = $evento->getIdEvento().$extensao;

move_uploaded_file($imagemEvento, "../Perfil/PerfilArtista/Evento/assets/img/Pubs/".$nomenovo);
$evento->setImagemEvento($nomenovo);



exit();

?>