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

        public static function listarComentario($idPubli) {
            $conexao = Conexao::conectar();
        
            $consulta = $conexao->prepare('SELECT tbUsuario.idUsuario, tbUsuario.emailUsuario, tbUsuario.nicknameUsuario, tbUsuario.nivelContaUsuario, tbUsuario.fotoPerfilUsuario, tbComentario.statusComentario, tbComentario.idComentario, tbComentario.comentario, TIMESTAMPDIFF(MINUTE, tbComentario.horaComentario, NOW()) as minutosComentario FROM tbPublicacao
                INNER JOIN tbComentario ON tbComentario.idPublicacao = tbPublicacao.idPublicacao
                INNER JOIN tbUsuario ON tbUsuario.idUsuario = tbComentario.idUsuario
                WHERE tbPublicacao.idPublicacao = ? AND tbComentario.statusComentario = "Normal"
                ORDER BY tbComentario.horaComentario DESC');
        
            $consulta->bindValue(1, $idPubli);
            $consulta->execute();
            $resultado2 = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $resultado2;
        }
        
        public static function consultarQuantComentario($idpub){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT COUNT(idComentario) as totalComentario FROM tbComentario WHERE idPublicacao = ?');
            $consulta->bindValue(1, $idpub);
            $consulta->execute();
            $resultado = $consulta->fetch();
            
            if($resultado == false){
                $nada = 0;
                return $nada;
            }else{
                return $resultado['totalComentario'];
            }
            
           
        }
        public static function atualizarStatusComentario($c){
            $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbComentario
                            SET statusComentario = ?
                            WHERE idComentario = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $c->getStatusComentario());
            $prepareStatement->bindValue(2, $c->getIdComentario());

            $prepareStatement->execute();
            return 'Atualizou';
        }
    }
?>