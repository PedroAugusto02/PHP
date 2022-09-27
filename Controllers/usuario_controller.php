<?php
    $path = $_SERVER['DOCUMENT_ROOT'].'/ecommerce/';
    include_once($path.'Models/Usuario.php');
    include_once($path.'Controllers\usuario_controller.php');
    
    class UsuarioController {
        public function validarUsuario($objUsuario){
            if ($this->validaEmail($objUsuario->getEmail())){
                return $objUsuario->login();
            }  
            if ($objUsuario->getSenha() == null || strlen($objUsuario->getSenha()) > 100){
                return "Senha Invalida";
            }
        }

        function validaEmail($email){
            if ($email == null){
                echo "O e-mail é obrigatório";
                return false;
            }elseif (strlen($email) > 100){
                echo "O e-mail deve conter no máximo 100 caracteres";
                return false;
            }
            return true;
        }
    
        public function cadastraUsuario($usuario) {

        }
    }
?>