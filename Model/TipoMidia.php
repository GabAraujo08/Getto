<?php

class TipoMidia{
    public $idTipoMidia;
    public $nomeTipoMidia;


    public function getIdTipoMidia(){
        return $this->idTipoMidia;
    }
    public function setIdTipoMidia($id){
        $this->idTipoMidia = $id;
    }



    public function getNomeTipoMidia(){
        return $this->nomeTipoMidia;
    }
    public function setNomeTipoMidia($nome){
        $this->nomeTipoMidia = $nome;
    }

}