<?php
    require_once 'GlobalController.php';
    session_start();

        $m = PublicacaoDao::getMidiasPublicacao(20);
        print_r($m);
    
?>