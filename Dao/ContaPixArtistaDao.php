<?php
    require_once 'GlobalDao.php';

    class ContaPixArtistaDao{
        public static function cadastrar($cpa){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbContaPixArtista(nomeContaPixArtista, tipoContaPixArtista, chaveContaPixArtista, idArtista)
                            VALUES(?, ?, ?, ?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $cpa->getnomeContaPixArtista());
            $prepareStatement->bindValue(2, $cpa->gettipoContaPixArtista());
            $prepareStatement->bindValue(3, $cpa->getchavePixArtista());
            $prepareStatement->bindValue(4, $cpa->getIdArtista());
            $prepareStatement->execute();
            return 'Cadastrou';  
        }


        public static function ListaContaPix($id){
            
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare(' SELECT DISTINCT tbContaPixArtista.nomeContaPixArtista, tbContaPixArtista.chaveContaPixArtista FROM tbContaPixArtista
                                                WHERE tbContaPixArtista.idArtista = ?');
            $consulta->bindValue(1, $id);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            
            return $resultado;
        }
    }
?>