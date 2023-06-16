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
    }
?>