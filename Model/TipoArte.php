<?php

class TipoArte{
    private $idTipoArte;
    private $nomeTipoArte;
    private $imagemTipoArte;

    public function getIdTipoArte(){
        return $this->IdTipoArte;
    }

    public function setIdTipoArte($id){
        $this->IdTipoArte = $id;
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