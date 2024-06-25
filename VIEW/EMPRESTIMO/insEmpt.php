<?php 
    namespace VIEW\emprestimo;
    include_once 'C:\xampp\htdocs\gestaophp\MODEL\emprestimo.php'; 
    include_once 'C:\xampp\htdocs\gestaophp\BLL\emprestimo.php'; 

    $empt = new \MODEL\emprestimo();

    $empt->setIDLivro($_POST['txtIdLivro']);
    $empt->setIDMembro($_POST['txtIdMembro']);
    $empt->setData_emprestimo($_POST['txtDataEmprestimo']);
    $empt->setData_devolutiva($_POST['txtDevolucao']);

    $bllEmpt = new \BLL\emprestimo(); 
    $result =  $bllEmpt->Insert($empt);  

    if ($result->errorCode() == '00000'){
        header("location: listarEmpt.php");
    } else echo $result->errorInfo();
?>