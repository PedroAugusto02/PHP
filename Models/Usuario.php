<?php
class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $endereco;
    
public function setEmail($email) { 
    return $this->email = $email;    
    }
    
public function getEmail() { 
    return $this->email;   
    }
    
public function setSenha($senha) { 
    return $this->senha = $senha;
        }

public function getSenha() { 
    return $this->senha;   
    }
}

?>
