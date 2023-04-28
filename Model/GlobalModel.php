<?php

    //função que faz parte da SPL que significa Standard PHP Library
    spl_autoload_register('carregarClasse4');

    function carregarClasse4($nomeClasse){
        if (file_exists($nomeClasse . '.php')) {
            require_once $nomeClasse . '.php';
        }
        if (file_exists('Dao/' . $nomeClasse . '.php')) {
            require_once 'Dao/' .$nomeClasse . '.php';
        }
        if (file_exists('Controller/' .$nomeClasse . '.php')) {
            require_once 'Controller/' .$nomeClasse . '.php';
        }
    }
?>