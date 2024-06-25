<?php 
    namespace VIEW\livro;
    include_once 'C:\xampp\htdocs\gestaophp\MODEL\livro.php'; 
    include_once 'C:\xampp\htdocs\gestaophp\BLL\livro.php'; 

    $livro = new \MODEL\livro();

    $livro->setTitulo($_POST['txtTitulo']);
    $livro->setAutor($_POST['txtAutor']);
    $livro->setGenero($_POST['txtGenero']);
    $livro->setStatus($_POST['txtStatus']);

    $bllLivro = new \BLL\livro(); 
    $result =  $bllLivro->Insert($livro);  

    if ($result->errorCode() == '00000'){
        header("location: listarLivro.php");
    } else echo $result->errorInfo();
?>