<?php 
    include_once 'C:\xampp\htdocs\gestaophp\BLL\emprestimo.php';
    use \BLL\emprestimo;

    $bllEmpt = new \BLL\emprestimo;
    $listaEmpt = $bllEmpt->Select(); 
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
            if(confirm('Excluir Emprestimo ' + id + '?')){
                location.href = 'delEmpt.php?id=' + id;}}
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo de Livros</title>
</head>
<body>
<?php include_once '../menu.php'; ?>
    <br><br>
    <div class="container orange lighten-4 brown-text col s12 red-darken-4-margin">
        <div class="center">
            <h1>Lista de Empréstimos</h1>
            <table>
                <tr>
                <th>ID</th>
                <th>ID Livro</th>
                <th>ID Membro</th>
                <th>Data do Empréstimo</th>
                <th>Devolução</th>
                <th>Operações</th>
                <th><a class="btn-floating btn-large waves-effect waves-light red darken-4">
                    <i class="material-icons" onclick="javascript:location.href='formEmpt.php'">add</i></a></th>
                </tr>

            <?php foreach ($listaEmpt as $empt) {?>
                <tr>
                <td><?php echo $empt->getId();?></td>
                <td><?php echo $empt->getIDLivro();?></td>
                <td><?php echo $empt->getIDMembro();?></td>
                <td><?php echo $empt->getData_emprestimo();?></td>
                <td><?php echo $empt->getData_devolutiva();?></td>
                <td><a class="btn-floating btn-small waves-effect waves-light red darken-4"
                        onclick="javascript:location.href='formEditEmpt.php?id=' + '<?php echo $empt->getID();?>'">
                        <i class="material-icons">edit</i></a>
                    <a class="btn-floating btn-small waves-effect waves-light red darken-4"
                        onclick="javascript:location.href='formDetEmpt.php?id=' + '<?php echo $empt->getID();?>'">
                        <i class="material-icons">search</i></a>
                    <a class="btn-floating btn-small waves-effect waves-light red darken-4"
                        onclick="javascript:remover(<?php echo $empt->getID(); ?>)">
                        <i class="material-icons">delete</i></a>
                </td>
                </tr>
            <?php } ?>
        </table>
</body>
</html>