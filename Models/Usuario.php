<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/ecommerce/';
include_once($path.'/Conexao/usuario_controller.php');

class Usuario{
    private $id;
    private $nome;
    private $email;
    private $senha;
    private $endereco;

public function Cadastrar(){
    $objConexao = new Conexao();
    $conexao = $objConexao->GetConexao();

    $sql = "INSERT INTO Usuarios (Nome,Email,Senha)
    VALUES (".$this->nome.",".$this->email.",".$this->senha.")";

    if (mysqli_query($conexao, $sql)){
        return "Sucesso";
    }else{
        return "Erro";
    }

    mysqli_close($conexao);
}
    
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
