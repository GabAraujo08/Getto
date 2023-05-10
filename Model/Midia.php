<?php

class Midia{
    private $idMidia, $idTipoMidia;
    private $arquivoMidia;

   

    public function getIdMidia(){
        return $this->idMidia;
    }
    public function setIdMidia($id){
        $this->idMidia = $id;
    }

    public function getIdTipoMidia(){
        return $this->idTipoMidia;
    }
    public function setIdTipoMidia($id){
        $this->idTipoMidia = $id;
    }



    public function getArquivoMidia(){
        return $this->arquivoMidia;
    }
    public function setArquivoMidia($arquivo){
        $this->arquivoMidia = $arquivo;
    }

}