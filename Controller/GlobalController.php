<?php

    //função que faz parte da SPL que significa Standard PHP Library
    spl_autoload_register('carregarClasse2');

    function carregarClasse2($nomeClasse){
        if (file_exists('../Model/' . $nomeClasse . '.php')) {
            require_once '../Model/' .$nomeClasse . '.php';
        }
        if (file_exists('../Dao/' . $nomeClasse . '.php')) {
            require_once '../Dao/' .$nomeClasse . '.php';
        }
        if (file_exists($nomeClasse . '.php')) {
            require_once $nomeClasse . '.php';
        }
    }
?>