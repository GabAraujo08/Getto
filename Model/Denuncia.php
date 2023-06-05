<?php

class Denuncia{
    private $idDenuncia;
    private $dataDenuncia;
    private $descDenuncia, $idAdministrador;
    private $statusDenuncia, $idTipoDenuncia;


    public function getIdDenuncia(){
        return $this->idDenuncia;
    }
    public function setIdDenuncia($id){
        $this->idDenuncia = $id;
    }

    public function getIdAdministrador(){
        return $this->idAdministrador;
    }
    public function setIdAdministrador($id){
        $this->idAdministrador = $id;
    }

    public function getIdTipoDenuncia(){
        return $this->idTipoDenuncia;
    }
    public function setIdTipoDenuncia($id){
        $this->idTipoDenuncia = $id;
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