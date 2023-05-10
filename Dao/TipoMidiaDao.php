<?php
    require_once 'GlobalDao.php';

    class TipoMidiaDao{
        public static function ListaTipoMidia(){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT * FROM tbTipoMidia');
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            
            return $resultado;
        }
    }
?>