<?PHP
    class Seguidores{
        private $idUsuario, $idSeguidores, $idArtista;

        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function setIdUsuario($id){
            $this->idUsuario = $id;
        }

        public function getIdArtista(){
            return $this->idArtista;
        }
        public function setIdArtista($id){
            $this->idArtista = $id;
        }

        public function getIdSeguidores(){
            return $this->idSeguidores;
        }
        public function setIdSeguidores($id){
            $this->idSeguidores = $id;
        }
    }
?>