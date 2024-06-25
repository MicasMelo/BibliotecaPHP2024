<?php 
    namespace VIEW\emprestimo;
    include_once 'C:\xampp\htdocs\gestaophp\MODEL\emprestimo.php'; 
    include_once 'C:\xampp\htdocs\gestaophp\BLL\emprestimo.php'; 

    $empt = new \MODEL\emprestimo();

    $empt->setID($_POST['txtID']);
    $empt->setIDLivro($_POST['txtIdLivro']);
    $empt->setIDMembro($_POST['txtIdMembro']);
    $empt->setData_emprestimo($_POST['txtDataEmprestimo']);
    $empt->setData_devolutiva($_POST['txtDevolucao']);

    $bllEmpt = new \BLL\emprestimo();
    $result =  $bllEmpt->Update($empt);  

    header("location: listarEmpt.php");
?>