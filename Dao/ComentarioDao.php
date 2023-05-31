<?php
     require_once 'GlobalDao.php';
     class ComentarioDao{
        public static function cadastrar($c){
            $conexao = Conexao::conectar();
 
            $queryInsert = "INSERT INTO tbComentario(comentario, numCurtidasComentario, statusComentario, idUsuario, idPublicacao)
                            VALUES(?, ?, ?, ?, ?)";
             
            $prepareStatement = $conexao->prepare($queryInsert);
             
            $prepareStatement->bindValue(1, $c->getComentario());
            $prepareStatement->bindValue(2, $c->getNumCurtidaComentario());
            $prepareStatement->bindValue(3, $c->getStatusComentario());
            $prepareStatement->bindValue(4, $c->getIdUsuario());
            $prepareStatement->bindValue(5, $c->getIdPublicacao());
            
            $prepareStatement->execute();
            
            return 'Cadastrou';
        }
    }
?>