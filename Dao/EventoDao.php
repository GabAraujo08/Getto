<?PHP
require_once 'GlobalDao.php';

class EventoDao
{

    public static function cadastrar($evento)
    {
        $conexao = Conexao::conectar();

        $queryInsert = "INSERT INTO tbEvento(horarioInicioEvento, horarioFinalEvento, dataEvento, descEvento, tituloEvento, statusEvento, logradouroEvento, imagemEvento, numLogEvento, cepEvento, bairroEvento, cidadeEvento, estadoEvento, idArtista, idTipoArte)
                            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $prepareStatement = $conexao->prepare($queryInsert);

        $prepareStatement->bindValue(1, $evento->getHorarioInicioEvento());
        $prepareStatement->bindValue(2, $evento->getHorarioFinalEvento());
        $prepareStatement->bindValue(3, $evento->getDataEvento());
        $prepareStatement->bindValue(4, $evento->getDescEvento());
        $prepareStatement->bindValue(5, $evento->getTituloEvento());
        $prepareStatement->bindValue(6, $evento->getStatusEvento());
        $prepareStatement->bindValue(7, $evento->getLogradouroEvento());
        $prepareStatement->bindValue(8, $evento->getImagemEvento());
        $prepareStatement->bindValue(9, $evento->getNumLogEvento());
        $prepareStatement->bindValue(10, $evento->getCepEvento());
        $prepareStatement->bindValue(11, $evento->getBairroEvento());
        $prepareStatement->bindValue(12, $evento->getCidadeEvento());
        $prepareStatement->bindValue(13, $evento->getEstadoEvento());
        $prepareStatement->bindValue(14, $evento->getIdArtista());
        $prepareStatement->bindValue(15, $evento->getIdTipoArte());
        $prepareStatement->execute();
        return 'Cadastrou';
    }


    public static function consultarIdEvento($evento){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idEvento FROM tbEvento WHERE descEvento LIKE '".$evento->getDescEvento()."'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        foreach ($lista as $evento)
            $id = $evento['idEvento'];
        return $id;   
    }



    public static function ListaEvento(){
            
        $conexao = Conexao::conectar();
        $consulta = $conexao->prepare('SELECT tbEvento.idEvento, tbEvento.horarioInicioEvento, tbEvento.horarioFinalEvento, tbEvento.dataEvento, tbEvento.quantidadeCurtidas, tbEvento.descEvento, tbEvento.tituloEvento, tbEvento.logradouroEvento, tbEvento.imagemEvento, tbEvento.numLogEvento, tbEvento.cepEvento, tbEvento. bairroEvento, tbEvento.cidadeEvento, tbEvento.estadoEvento FROM tbEvento');

        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        
        return $resultado;
    
    }

    public static function QuantEvento($id){
        $conexao = Conexao::conectar();

            $query = $conexao->prepare('SELECT COUNT(idEvento) as quantEvent FROM tbEvento WHERE idArtista = ?');
            $query->bindValue(1, $id);
             $query->execute();
            $resultado1 = $query->fetchAll(PDO::FETCH_ASSOC);

            return $resultado1;
        
    }
    public static function AtualizaFoto($e){
        $conexao = Conexao::conectar();

        $queryInsert = "UPDATE tbEvento
                        SET imagemEvento = ?
                        WHERE idEvento = ?";
        
        $prepareStatement = $conexao->prepare($queryInsert);
        
        $prepareStatement->bindValue(1, $e->getImagemEvento());
        $prepareStatement->bindValue(2, $e->getIdEvento());

        $prepareStatement->execute();
        return 'Atualizou';
    }

    public static function ListaMeusEventos($id){
            
        $conexao = Conexao::conectar();
        $consulta = $conexao->prepare(' SELECT tbEvento.tituloEvento, tbEvento.logradouroEvento FROM tbEvento
                                        WHERE tbEvento.idArtista = ?');
        $consulta->bindValue(1, $id);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        
        return $resultado;
    }


    public static function ConfirmarEvento(){
            
        $conexao = Conexao::conectar();
        $consulta = $conexao->prepare('SELECT idPresenca, idEvento FROM tbPresenca 
                                        WHERE idUsuario = ?');

        $consulta->bindValue(1, $_SESSION['idUsuario']);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        
        return $resultado;
    }
}
