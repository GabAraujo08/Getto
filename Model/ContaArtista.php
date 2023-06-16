<?PHP
    class ContaArtista{
        private $idContaPixArtista, $nomeContaPixArtista, $tipoContaPixArtista, $chavePixArtista, $idArtista;

        public function getidContaPixArtista(){
            return $this->idContaPixArtista;
        }
        public function setidContaPixArtista($id){
            $this->idContaPixArtista = $id;
        }


        public function getnomeContaPixArtista(){
            return $this->nomeContaPixArtista;
        }
        public function setnomeContaPixArtista($id){
            $this->nomeContaPixArtista = $id;
        }



        public function gettipoContaPixArtista(){
            return $this->tipoContaPixArtista;
        }
        public function settipoContaPixArtista($id){
            $this->tipoContaPixArtista = $id;
        }

        public function getchavePixArtista(){
            return $this->chavePixArtista;
        }
        public function setchavePixArtista($id){
            $this->chavePixArtista = $id;
        }

        public function getIdArtista(){
            return $this->idArtista;
        }
        public function setIdArtista($id){
            $this->idArtista = $id;
        }
    }
?>