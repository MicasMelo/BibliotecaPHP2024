<?php 
    namespace VIEW\livro;
    include_once 'C:\xampp\htdocs\gestaophp\BLL\livro.php'; 

    $id = $_GET['id'];

    $bllLivro = new \BLL\livro(); 
    $result =  $bllLivro->Delete($id);

    header("location: listarLivro.php");
?>