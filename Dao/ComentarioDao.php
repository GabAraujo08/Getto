<?php
     require_once 'GlobalDao.php';
     class ComentarioDao{
         public static function cadastrar($artista){
             $conexao = Conexao::conectar();
 
             $queryInsert = "INSERT INTO tbArtista(generoArtista, bioArtista, portfolio, idUsuario)
                             VALUES(?, ?, ?, ?)";
             
             $prepareStatement = $conexao->prepare($queryInsert);
             
             $prepareStatement->bindValue(1, $artista->getGeneroArtista());
             $prepareStatement->bindValue(2, $artista->getBioArtista());
             $prepareStatement->bindValue(3, $artista->getPortfolioArtista());
             $prepareStatement->bindValue(4, $artista->getUsuario());
             $prepareStatement->execute();
             return 'Cadastrou';
         }
    }
?>