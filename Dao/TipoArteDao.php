<?php
    require_once 'GlobalDao.php';

    class TipoArteDao{
        public static function cadastrar($tag){
            $conexao = Conexao::conectar();

            $queryInsert = "INSERT INTO tbTipoArte(nomeTipoArte)
                            VALUES(?)";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $tag->getNomeTipoArte());
            $prepareStatement->execute();
            return 'Cadastrou';  
        }
        public static function consultarIdTipoArte($tag){
            $conexao = Conexao::conectar();
            $querySelect = "SELECT idTipoArte FROM tbTipoArte WHERE nomeTipoArte LIKE '".$tag->getNomeTipoArte()."'";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            foreach ($lista as $tag)
                $id = $tag['idTipoArte'];
            return $id;   
        }
        public static function atualizarImagemTipoArte($tag){
            $conexao = Conexao::conectar();

            $queryInsert = "UPDATE tbTipoArte
                            SET imagemTipoArte = ?
                            WHERE idTipoArte = ?";
            
            $prepareStatement = $conexao->prepare($queryInsert);
            
            $prepareStatement->bindValue(1, $tag->getImagemTipoArte());
            $prepareStatement->bindValue(2, $tag->getIdTipoArte());

            $prepareStatement->execute();
            return 'Atualizou';
        }
        public static function ListaTag(){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT * FROM tbTipoArte');
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            
            return $resultado;
        }
    }
?>