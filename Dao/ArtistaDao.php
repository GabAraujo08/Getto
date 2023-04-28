<?php
    require_once 'GlobalDao.php';
    class ArtistaDao{
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

        public static function atualizarBioArtista($artista){
            $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbArtista
                            SET bioArtista = ?
                            WHERE idArtista = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $artista->getBioArtista());
            $prepareStatement->bindValue(2, $artista->getIdArtista());

            $prepareStatement->execute();
            return 'Atualizou';
        }

        public static function atualizarGeneroArtista($artista){
            $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbArtista
                            SET generoArtista = ?
                            WHERE idArtista = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $artista->getGeneroArtista());
            $prepareStatement->bindValue(2, $artista->getIdArtista());

            $prepareStatement->execute();
            return 'Atualizou';
        }

        public static function consultarArtista($artista){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT * FROM tbArtista WHERE idUsuario = ?');
            $consulta->bindValue(1, $artista);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
            
            return $resultado;
        }

        public static function deletar($artista){
            $conexao = Conexao::conectar();
            $delete = $conexao->prepare("DELETE FROM tbArtista WHERE idArtista = ?");
            $delete->bindValue(1, $artista);
            $delete->execute();

            return 'Deletou';
        }
    }
?>