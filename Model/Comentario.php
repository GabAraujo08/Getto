<?php

class Comentario{
    public $idComentario;
    public $comentario;
    public $statusComentario;
    public $numCurtidaComentario;


    public function getIdComentario(){
        return $this->idComentario;
    }
    public function setIdComentario($id){
        $this->idComentario = $id;
    }



    public function getComentario(){
        return $this->Comentario;
    }
    public function setComentario($coment){
        $this->Comentario = $coment;
    }



    public function getStatusComentario(){
        return $this->statusComentario;
    }
    public function setStatusComentario($status){
        $this->statusComentario = $status;
    }



    public function getNumCurtidaComentario(){
        return $this->numCurtidaComentario;
    }
    public function setNumCurtidaComentario($numCurtida){
        $this->numCurtidaComentario = $numCurtida;
    }

}
