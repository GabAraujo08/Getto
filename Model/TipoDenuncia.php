<?php

class TipoDenuncia{
    public $idTipoDenuncia;
    public $nomeTipoDenuncia;


    public function getIdTipoDenuncia(){
        return $this->idTipoDenuncia;
    }
    public function setIdTipoDenuncia($id){
        $this->idTipoDenuncia = $id;
    }



    public function getNomeTipoDenuncia(){
        return $this->nomeTipoDenuncia;
    }
    public function setNomeTipoDenuncia($nome){
        $this->nomeTipoDenuncia = $nome;
    }

}