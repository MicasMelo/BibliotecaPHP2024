<?php 
    namespace VIEW\membro;
    include_once 'C:\xampp\htdocs\gestaophp\MODEL\membro.php'; 
    include_once 'C:\xampp\htdocs\gestaophp\BLL\membro.php'; 

    $membro = new \MODEL\membro();

    $membro->setID($_POST['txtID']);
    $membro->setNome($_POST['txtNome']);
    $membro->setContato($_POST['txtContato']);
    $membro->setEndereco($_POST['txtEndereco']);

    $bllMembro = new \BLL\membro(); 
    $result =  $bllMembro->Update($membro);  

    header("location: listarMembro.php");
?>