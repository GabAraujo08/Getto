<?php

class Comentario{
    private $idComentario;
    private $comentario;
    private $statusComentario;
    private $numCurtidaComentario;
    private $idPublicacao;
    private $idUsuario;


    public function getIdComentario(){
        return $this->idComentario;
    }
    public function setIdComentario($id){
        $this->idComentario = $id;
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function setIdUsuario($id){
        $this->idUsuario = $id;
    }


    public function getIdPublicacao(){
        return $this->idPublicacao;
    }
    public function setIdPublicacao($id){
        $this->idPublicacao = $id;
    }



    public function getComentario(){
        return $this->comentario;
    }
    public function setComentario($coment){
        $this->comentario = $coment;
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
