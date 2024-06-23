<?php 
    include_once 'C:\xampp\htdocs\gestaophp\DAL\livro.php';
    require_once 'C:\xampp\htdocs\gestaophp\DAL\Conexao.php';
    use \DAL\livro;

    $dalLivro = new \DAL\livro();
    $listaLivro = $dalLivro->Select(); 
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
    <title>Livros Cadastrados</title>
</head>
<body>
<h1>Lista de Livros</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Gênero</th>
            <th>Status</th>
        </tr>

        <?php foreach ($listaLivro as $livro) {?>
            <tr>
                <td><?php echo $livro->getId();?></td>
                <td><?php echo $livro->getTitulo();?></td>
                <td><?php echo $livro->getAutor();?></td>
                <td><?php echo $livro->getGenero();?></td>
                <td><?php echo $livro->getStatus();?></td>
            </tr>
        <?php } ?>
   </table>
</body>
</html>
