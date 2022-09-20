<?php
    class Conexao{
        public function GetConexao(){
            
            $host = 'localhost';
            $bd = 'ecommerce';
            $usuariobd = 'root';
            $senhadb = '';

            $conexao =  new mysqli($host, $bd, $usuariobd, $senhadb);
        
            if ($conexao -> connect_errno){
                echo "Failed to conecct to mysql: ". $conexao -> connect_errno;
            }

            return $conexao;
        }
    }
?>