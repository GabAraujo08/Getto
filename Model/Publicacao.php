<?php

class Publicacao{
    public $idPublicacao;
    public $horarioPublicacao;
    public $quantidadeCurtidas;
    public $descPublicacao;
    public $tituloPublicacao;
    public $statusPublicacao;


    public function getIdPublicacao(){
        return $this->idPublicacao;
    }
    public function setIdPublicacao($id){
        $this->idPublicacao = $id;
    }



    public function getHorarioPublicacao(){
        return $this->horarioPublicacao;
    }
    public function setHorarioPublicacao($horario){
        $this->horarioPublicacao = $horario;
    }



    public function getQuantidadeCurtidas(){
        return $this->quantidadeCurtidas;
    }
    public function setQuantidadeCurtidas($quantCurtida){
        $this->quantidadeCurtidas = $quantCurtida;
    }



    public function getDescPublicacao(){
        return $this->descPublicacao;
    }
    public function setDescPublicacao($desc){
        $this->descPublicacao = $desc;
    }



    public function getTituloPublicacao(){
        return $this->TituloPublicacao;
    }
    public function setTituloPublicacao($titulo){
        $this->tituloPublicacao = $titulo;
    }



    public function getStatusPublicacao(){
        return $this->statusPublicacao;
    }
    public function setStatusPublicacao($status){
        $this->statusPublicacao = $status;
    }
}
