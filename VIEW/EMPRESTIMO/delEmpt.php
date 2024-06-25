<?php 
    namespace VIEW\emprestimo;
    include_once 'C:\xampp\htdocs\gestaophp\BLL\emprestimo.php'; 

    $id = $_GET['id'];

    $bllEmpt = new \BLL\emprestimo(); 
    $result =  $bllEmpt->Delete($id);

    header("location: listarEmpt.php");
?>