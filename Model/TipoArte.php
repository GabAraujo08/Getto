<?php

class TipoArte{
    private $idTipoArte;
    private $nomeTipoArte;
    private $imagemTipoArte;

    public function getIdTipoArte(){
        return $this->idTipoArte;
    }

    public function setIdTipoArte($id){
        $this->idTipoArte = $id;
    }


    public function getNomeTipoArte(){
        return $this->nomeTipoArte;
    }

    public function setNomeTipoArte($nome){
        $this->nomeTipoArte = $nome;
    }


    public function getImagemTipoArte(){
        return $this->imagemTipoArte;
    }

    public function setImagemTipoArte($imagem){
        $this->imagemTipoArte = $imagem;
    }

}