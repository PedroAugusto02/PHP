<html>
    <body>
        <form action="" method="post">
            Email: <input type="text" name="email" value=""> <br> 
            Senha: <input type="text" name="senha" value=""> <br>
            <button type="submit" name="logar">Entrar</button>
            <button>Cadastrar</button>
        </form>
    </body>
</html>

<?php 
    $path = $_SERVER['DOCUMENT_ROOT'].'/ecommerce';
    include_once($path."/Controllers/usuario_controller.php");
    if (isset($_POST['logar'])) {
    
    $objUsuario = new Usuario();
  
    $objUsuario->setEmail($_POST["email"]);
    $objUsuario->setSenha($_POST["senha"]);
    
    $controllerUsuario = new UsuarioController();
    $resposta = $controllerUsuario->cadastraUsuario(objUsuario);
    
    if ($resposta == "sucesso"){
        header("Location: https://localhost/ecommerce/Views/inicio.php");
    }else{
    echo $resposta;
    }

}

?>