<?php 
    include_once 'C:\xampp\htdocs\gestaophp\DAL\emprestimo.php';
    require_once 'C:\xampp\htdocs\gestaophp\DAL\Conexao.php';
    use \DAL\emprestimo;

    $dalEmpt = new \DAL\emprestimo();
    $listaEmpt = $dalEmpt->Select(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo de Livros</title>
</head>
<body>
<h1>Lista de Empréstimos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>ID Livro</th>
            <th>ID Membro</th>
            <th>Data do Empréstimo</th>
            <th>Devolução</th>
        </tr>

        <?php foreach ($listaEmpt as $empt) {?>
            <tr>
                <td><?php echo $empt->getId();?></td>
                <td><?php echo $empt->getIDLivro();?></td>
                <td><?php echo $empt->getIDMembro();?></td>
                <td><?php echo $empt->getData_empresimo();?></td>
                <td><?php echo $empt->getData_devolutiva();?></td>
            </tr>
        <?php } ?>
   </table>
</body>
</html>
