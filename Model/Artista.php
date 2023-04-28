<?php
     class Artista{
        private $idArtista;
        private $generoArtista;
        private $bioArtista;
        private $portfolioArtista;
        private $usuario;


        public function getIdArtista(){
            return $this->idArtista;
        }
        public function setIdArtista($id){
            $this->idArtista = $id;
        }

        public function getGeneroArtista(){
            return $this->generoArtista;
        }
        public function setGeneroArtista($genero){
            $this->generoArtista = $genero;
        }


        public function getBioArtista(){
            return $this->bioArtista;
        }
        public function setBioArtista($bio){
            $this->bioArtista = $bio;
        }

  
        public function getPortfolioArtista(){
            return $this->portfolioArtista;
        }
        public function setPortfolioArtista($portfolio){
            $this->portfolioArtista = $portfolio;
        }


        public function getUsuario(){
            return $this->usuario;
        }
        public function setUsuario($usuario){
            $this->usuario = $usuario;
        }
    }
?>