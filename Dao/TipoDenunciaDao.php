<?php
    require_once 'GlobalDao.php';

    class TipoDenunciaDao{
        public static function ListaTipoMidia(){
            $conexao = Conexao::conectar();
            $consulta = $conexao->prepare('SELECT * FROM tbTipoDenuncia');
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
            
            return $resultado;
        }
    }
?>