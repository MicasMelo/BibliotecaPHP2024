<?php 
    include_once 'C:\xampp\htdocs\gestaophp\BLL\livro.php';
    use \BLL\livro;

    $bllLivro = new \BLL\livro(); //!!!!!!!!!
    $listaLivro = $bllLivro->Select(); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="icon" href="/gestaophp/IMG/ikon.png">
    <style>
        .red-darken-4-margin {
            border: 5px solid #b71c1c;
            padding: 10px;
            margin: 10px;
            border-radius: 15px;
        }
    </style>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script>
        function remover(id){
            if(confirm('Excluir Livro ' + id + '?')){
                location.href = 'delLivro.php?id=' + id;}}
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros Cadastrados</title>
</head>
<body>
<?php include_once '../menu.php'; ?>
    <br><br>
    <div class="container orange lighten-4 brown-text col s12 red-darken-4-margin">
        <div class="center">
            <h1>Lista de Livros</h1>
            <table class="highlight">
                <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Gênero</th>
                <th>Status</th>
                <th>Operações</th>
                <th><a class="btn-floating btn-large waves-effect waves-light red darken-4">
                    <i class="material-icons" onclick="javascript:location.href='formLivro.php'">add</i></a></th>
                </tr>

            <?php foreach ($listaLivro as $livro) {?>
                <tr>
                <td><?php echo $livro->getId();?></td>
                <td><?php echo $livro->getTitulo();?></td>
                <td><?php echo $livro->getAutor();?></td>
                <td><?php echo $livro->getGenero();?></td>
                <td><?php echo $livro->getStatus();?></td>
                <td><a class="btn-floating btn-small waves-effect waves-light red darken-4"
                        onclick="javascript:location.href='formEditLivro.php?id=' + '<?php echo $livro->getID();?>'">
                        <i class="material-icons">edit</i></a>
                    <a class="btn-floating btn-small waves-effect waves-light red darken-4"
                        onclick="javascript:location.href='formDetLivro.php?id=' + '<?php echo $livro->getID();?>'">
                        <i class="material-icons">search</i></a>
                    <a class="btn-floating btn-small waves-effect waves-light red darken-4"
                        onclick="javascript:remover(<?php echo $livro->getID(); ?>)">
                        <i class="material-icons">delete</i></a>
                </td>
                </tr>
            <?php } ?>
        </table>
</body>
</html>