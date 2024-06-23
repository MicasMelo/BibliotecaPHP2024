<?php 
    namespace VIEW\membro;
    include_once 'C:\xampp\htdocs\gestaophp\BLL\membro.php'; 

    $id = $_GET['id'];

    $bllMembro = new \BLL\membro(); 
    $result =  $bllMembro->Delete($id);  

    header("location: listarMembro.php");
?>