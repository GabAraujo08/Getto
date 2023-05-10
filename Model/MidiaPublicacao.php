<?php
    class MidiaPublicacao{
        private $idMidiaPublicacao, $idMidia, $idPublicacao;

        public function getIdMidiaPublicacao(){
            return $this->idMidiaPublicacao;
        }
        public function setIdMidiaPublicacao($id){
            $this->idMidiaPublicacao = $id;
        }

        public function getIdMidia(){
            return $this->idMidia;
        }
        public function setIdMidia($id){
            $this->idMidia = $id;
        }

        public function getIdPublicacao(){
            return $this->idPublicacao;
        }
        public function setIdPublicacao($id){
            $this->idPublicacao = $id;
        }
    }
?>