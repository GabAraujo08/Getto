<?php

class Publicacao{
    private $idPublicacao;
    private $horarioPublicacao;
    private $quantidadeCurtidas;
    private $descPublicacao;
    private $tituloPublicacao;
    private $statusPublicacao;
    private $idTipoArte;
    private $idArtista;


    public function getIdPublicacao(){
        return $this->idPublicacao;
    }
    public function setIdPublicacao($id){
        $this->idPublicacao = $id;
    }

    public function getIdTipoArte(){
        return $this->idTipoArte;
    }
    public function setIdTipoArte($id){
        $this->idTipoArte = $id;
    }


    public function getIdArtista(){
        return $this->idArtista;
    }
    public function setIdArtista($id){
        $this->idArtista = $id;
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
        return $this->tituloPublicacao;
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
