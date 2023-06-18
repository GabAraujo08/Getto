<?php

class DenunciaUsuario{
    private $idDenunciaUsuario, $idUsuario, $TipoUsuario, $idDenuncia;


    public function getIdDenunciaUsuario(){
        return $this->idDenunciaUsuario;
    }
    public function setIdDenunciaUsuario($id){
        $this->idDenunciaUsuario = $id;
    }

    public function getIdDenuncia(){
        return $this->idDenuncia;
    }
    public function setIdDenuncia($id){
        $this->idDenuncia = $id;
    }



    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function setIdUsuario($id){
        $this->idUsuario = $id;
    }

    public function getTipoUsuario(){
        return $this->TipoUsuario;
    }
    public function setTipoUsuario($id){
        $this->TipoUsuario = $id;
    }
}