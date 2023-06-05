<?php

class DenunciaUsuario{
    private $idDenunciaUsuario, $idUsuario, $idTipoUsuario;


    public function getIdDenunciaUsuario(){
        return $this->idDenunciaUsuario;
    }
    public function setIdDenunciaUsuario($id){
        $this->idDenunciaUsuario = $id;
    }


    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function setIdUsuario($id){
        $this->idUsuario = $id;
    }

    public function getIdTipoUsuario(){
        return $this->idTipoUsuario;
    }
    public function setIdTipoUsuario($id){
        $this->idTipoUsuario = $id;
    }
}