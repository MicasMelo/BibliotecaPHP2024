<?php 
namespace VIEW\emprestimo;
include_once 'C:\xampp\htdocs\gestaophp\MODEL\emprestimo.php'; 
include_once 'C:\xampp\htdocs\gestaophp\BLL\emprestimo.php'; 
include_once 'C:\xampp\htdocs\gestaophp\BLL\livro.php'; // Adicione esta linha

$empt = new \MODEL\emprestimo();

$empt->setIDLivro($_POST['selectIdLivro']);
$empt->setIDMembro($_POST['selectIdMembro']);
$empt->setData_emprestimo($_POST['txtDataEmprestimo']);
$empt->setData_devolutiva($_POST['txtDevolucao']);

$bllEmpt = new \BLL\emprestimo(); 
$result =  $bllEmpt->Insert($empt);  

// Verificar se o empréstimo foi inserido com sucesso
if ($result->errorCode() == '00000'){
    // Atualizar o status do livro para "Emprestado"
    $idLivro = $_POST['selectIdLivro'];
    $bllLivro = new \BLL\livro();
    $livro = $bllLivro->SelectID($idLivro);
    $livro->setStatus(1); // Supondo que 1 seja o status para "Emprestado"
    $bllLivro->Update($livro);

    // Redirecionar para a página de listagem de empréstimos
    header("location: listarEmpt.php");
} else {
    echo $result->errorInfo();
}
?>
