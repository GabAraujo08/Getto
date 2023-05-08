<?php

class Momentos{
    public $idMomentos;
    public $dataMomentos;


    public function getIdMomentos(){
        return $this->idMomentos;
    }
    public function setIdMomentos($id){
        $this->idMomentos = $id;
    }



    public function getDataMomentos(){
        return $this->dataMomentos;
    }
    public function setDataMomentos($data){
        $this->dataMomentos = $data;
    }

   
}