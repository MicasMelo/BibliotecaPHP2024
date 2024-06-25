<?php 
    namespace VIEW\livro;
    include_once 'C:\xampp\htdocs\gestaophp\MODEL\livro.php'; 
    include_once 'C:\xampp\htdocs\gestaophp\BLL\livro.php'; 

    $livro = new \MODEL\livro();

    $livro->setID($_POST['txtID']);
    $livro->setTitulo($_POST['txtTitulo']);
    $livro->setAutor($_POST['txtAutor']);
    $livro->setGenero($_POST['selectGnr']);
    $livro->setStatus($_POST['txtStatus']);

    $bllLivro = new \BLL\livro();
    $result =  $bllLivro->Update($livro);  

    header("location: listarLivro.php");
?>