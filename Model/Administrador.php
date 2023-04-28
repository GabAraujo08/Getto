<?php

class Administrador{
    private $idAdministrador;
    private $nomeAdministrador;
    private $loginAdministrador;
    private $senhaAdministrador;
    private $emailAdministrador;
    private $foneAdministrador;
   


    public function getIdAdministrador(){
        return $this->idAdministrador;
    }
    public function setIdAdministrador($id){
        $this->idAdministrador = $id;
    }



    public function getNomeAdministrador(){
        return $this->nomeAdministrador;
    }
    public function setNomeAdministrador($nome){
        $this->nomeAdministrador = $nome;
    }



    public function getLoginAdministrador(){
        return $this->loginAdministrador;
    }
    public function setLoginAdministrador($login){
        $this->loginAdministrador = $login;
    }



    public function getSenhaAdministrador(){
        return $this->senhaAdministrador;
    }
    public function setSenhaAdministrador($senha){
        $this->senhaAdministrador = $senha;
    }



    public function getEmailAdministrador(){
        return $this->emailAdministrador;
    }
    public function setEmailAdministrador($email){
        $this->emailAdministrador = $email;
    }



    public function getFoneAdministrador(){
        return $this->foneAdministrador;
    }
    public function setFoneAdministrador($fone){
        $this->foneAdministrador = $fone;
    }

}
?>