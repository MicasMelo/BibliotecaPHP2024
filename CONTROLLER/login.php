<?php 
    include_once 'C:\xampp\htdocs\gestaophp\BLL\usuario.php'; 

    $usuario = $_POST['usuario']; 
    $senha = $_POST['senha'];

    echo "Usuario: " . $usuario . "</br>"; 
    echo "Senha: " . $senha . "  -  ".  md5($senha) . " <br/> . <br/>";

    $bll = new \BLL\usuario();
    $objUser = new \MODEL\usuario();
    $objUser = $bll->SelectUser($usuario);

    if($objUser != null){
        if(md5($senha) == $objUser->getSenha()){
            session_start();
            $_SESSION['login'] = $objUser->getUsuario();
            header("location:/gestaophp/VIEW/menu.php");
        }
        else header("location:/gestaophp/VIEW/index.php");
    }
    else echo "Usuario não encontrado!";
?>