<?PHP
    class Presenca{
        private $idUsuario, $idPresenca, $idEvento;

        public function getIdPresenca(){
            return $this->idPresenca;
        }
        public function setIdPresenca($id){
            $this->idPresenca = $id;
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function setIdUsuario($id){
            $this->idUsuario = $id;
        }

        public function getIdEvento(){
            return $this->idEvento;
        }
        public function setIdEvento($id){
            $this->idEvento = $id;
        }
    }
?>