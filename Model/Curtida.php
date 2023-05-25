<?PHP
    class Curtida{
        private $idUsuario, $idCurtida, $idPublicacao;

        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function setIdUsuario($id){
            $this->idUsuario = $id;
        }

        public function getIdPublicacao(){
            return $this->idPublicacao;
        }
        public function setIdPublicacao($id){
            $this->idPublicacao = $id;
        }

        public function getIdCurtida(){
            return $this->idCurtida;
        }
        public function setIdCurtida($id){
            $this->idCurtida = $id;
        }
    }
?>