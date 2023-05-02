<?php

class Evento{
    private $horarioInicioEvento;
    private $dataEvento;
    private $logradouroEvento;

    private $descEvento;
    private $imagemEvento;
    private $statusEvento;
    private $horarioFinalEvento;


    public function getHorarioInicioEvento(){
        return $this->horarioInicioEvento;
    }
    public function setHorarioInicioEvento($horarioInicio){
        $this->horarioInicioEvento = $horarioInicio;
    }



    public function getDataEvento(){
        return $this->dataEvento;
    }
    public function setDataEvento($data){
        $this->dataEvento = $data;
    }



    public function getLogradouroEvento(){
        return $this->logradouroEvento;
    }
    public function setLogradouroEvento($logradouro){
        $this->logradouroEvento = $logradouro;
    }



    public function getDescEvento(){
        return $this->descEvento;
    }
    public function setDescEvento($desc){
        $this->descEvento = $desc;
    }



    public function getImagemEvento(){
        return $this->imagemEvento;
    }
    public function setImagemEvento($imagem){
        $this->imagemEvento = $imagem;
    }



    public function getStatusEvento(){
        return $this->statusEvento;
    }
    public function setStatusEvento($status){
        $this->statusEvento = $status;
    }



    public function getHorarioFinalEvento(){
        return $this->horarioFinalEvento;
    }
    public function setHorarioFinalEvento($horarioFinal){
        $this->horarioFinalEvento = $horarioFinal;
    }

}
