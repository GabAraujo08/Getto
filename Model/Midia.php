<?php

class Midia{
    private $idMidia;
    private $arquivoMidia;
   

    public function getIdMidia(){
        return $this->idMidia;
    }
    public function setIdMidia($id){
        $this->idMidia = $id;
    }



    public function getArquivoMidia(){
        return $this->arquivoMidia;
    }
    public function setArquivoMidia($arquivo){
        $this->arquivoMidia = $arquivo;
    }

}