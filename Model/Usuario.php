<?php

class Usuario{
    private $idUsuario;
    private $nomeUsuario;
    private $emailUsuario;
    private $senhaUsuario;
    private $cidadeUsuario;
    private $estadoUsuario;
    private $statusContaUsuario;
    private $fotoPerfilUsuario;
    private $foneUsuario;
    private $nicknameUsuario;
    private $papelParedeUsuario;
    private $nivelContaUsuario;


    public function getIdUsuario(){
        return $this->idUsuario;
    }
    public function setIdUsuario($id){
        $this->idUsuario = $id;
    }



    public function getNomeUsuario(){
        return $this->nomeUsuario;
    }
    public function setNomeUsuario($nome){
        $this->nomeUsuario = $nome;
    }



    public function getEmailUsuario(){
        return $this->emailUsuario;
    }
    public function setEmailUsuario($email){
        $this->emailUsuario = $email;
    }



    public function getSenhaUsuario(){
        return $this->senhaUsuario;
    }
    public function setSenhaUsuario($senha){
        $this->senhaUsuario = $senha;
    }



    public function getCidadeUsuario(){
        return $this->cidadeUsuario;
    }
    public function setCidadeUsuario($cidade){
        $this->cidadeUsuario = $cidade;
    }



    public function getEstadoUsuario(){
        return $this->estadoUsuario;
    }
    public function setEstadoUsuario($estado){
        $this->estadoUsuario = $estado;
    }



    public function getStatusContaUsuario(){
        return $this->statusContaUsuario;
    }
    public function setStatusContaUsuario($status){
        $this->statusContaUsuario = $status;
    }



    public function getFotoPerfilUsuario(){
        return $this->fotoPerfilUsuario;
    }
    public function setFotoPerfilUsuario($fotoPerfil){
        $this->fotoPerfilUsuario = $fotoPerfil;
    }



    public function getFoneUsuario(){
        return $this->foneUsuario;
    }
    public function setFoneUsuario($fone){
        $this->foneUsuario = $fone;
    }

    public function getNicknameUsuario(){
        return $this->nicknameUsuario;
    }
    public function setNicknameUsuario($nick){
        $this->nicknameUsuario = $nick;
    }

    public function getPapelParedeUsuario(){
        return $this->papelParedeUsuario;
    }
    public function setPapelParedeUsuario($papel){
        $this->papelParedeUsuario = $papel;
    }

    public function getNivelContaUsuario(){
        return $this->nivelContaUsuario;
    }
    public function setNivelContaUsuario($nivel){
        $this->nivelContaUsuario = $nivel;
    }

}
?>