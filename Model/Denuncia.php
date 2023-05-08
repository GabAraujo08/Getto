<?php

class Denuncia{
    public $idDenuncia;
    public $dataDenuncia;
    public $descDenuncia;
    public $statusDenuncia;


    public function getIdDenuncia(){
        return $this->idDenuncia;
    }
    public function setIdDenuncia($id){
        $this->idDenuncia = $id;
    }



    public function getDataDenuncia(){
        return $this->dataDenuncia;
    }
    public function setDataDenuncia($data){
        $this->dataDenuncia = $data;
    }



    public function getDescDenuncia(){
        return $this->descDenuncia;
    }
    public function setDescDenuncia($desc){
        $this->descDenuncia = $desc;
    }



    public function getStatusDenuncia(){
        return $this->statusDenuncia;
    }
    public function setStatusDenuncia($status){
        $this->statusDenuncia = $status;
    }

}