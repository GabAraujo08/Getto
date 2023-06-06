<?PHP
require_once 'GlobalDao.php';

class EventoDao
{

    public static function cadastrar($evento)
    {
        $conexao = Conexao::conectar();

        $queryInsert = "INSERT INTO tbEvento(horarioInicioEvento, horarioFinalEvento, dataEvento, quantidadeCurtidas, descEvento, tituloEvento, statusEvento, logradouroEvento, imagemEvento, numLogEvento, cepEvento, bairroEvento, cidadeEvento, estadoEvento, idArtista)
                            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $prepareStatement = $conexao->prepare($queryInsert);

        $prepareStatement->bindValue(1, $evento->getHorarioInicioEvento());
        $prepareStatement->bindValue(2, $evento->getHorarioFinalEvento());
        $prepareStatement->bindValue(3, $evento->getDataEvento());
        $prepareStatement->bindValue(4, $evento->getConfirmarEvento());
        $prepareStatement->bindValue(5, $evento->getDescEvento());
        $prepareStatement->bindValue(6, $evento->getTituloEvento());
        $prepareStatement->bindValue(7, $evento->getStatusEvento());
        $prepareStatement->bindValue(8, $evento->getLogradouroEvento());
        $prepareStatement->bindValue(9, $evento->getImagemEvento());
        $prepareStatement->bindValue(10, $evento->getNumLogEvento());
        $prepareStatement->bindValue(11, $evento->getCepEvento());
        $prepareStatement->bindValue(12, $evento->getBairroEvento());
        $prepareStatement->bindValue(13, $evento->getCidadeEvento());
        $prepareStatement->bindValue(14, $evento->getEstadoEvento());
        $prepareStatement->bindValue(15, $evento->getIdArtista());
        $prepareStatement->execute();
        return 'Cadastrou';
    }


    public static function consultarIdEvento($evento){
        $conexao = Conexao::conectar();
        $querySelect = "SELECT idEvento FROM tbEvento WHERE imagemEvento LIKE '".$evento->getImagemEvento()."'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        foreach ($lista as $evento)
            $id = $evento['idEvento'];
        return $id;   
    }



    public static function ListaEvento(){
            
        $conexao = Conexao::conectar();
        $consulta = $conexao->prepare('SELECT  tbEvento.horarioInicioEvento, tbEvento.horarioFinalEvento, tbEvento.dataEvento, tbEvento.quantidadeCurtidas, tbEvento.descEvento, tbEvento.tituloEvento  FROM tbEvento');

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

    }
