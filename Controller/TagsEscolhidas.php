<?php
    require_once 'GlobalController.php';
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['idTipo'])) {
            $_SESSION['tiposArtes'] = $_POST['idTipo'];


            $previousPage = $_SERVER['HTTP_REFERER'];
            header('Location: ' . $previousPage);

        }
    }
?>
