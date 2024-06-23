<?php
    include_once 'C:\xampp\htdocs\gestaophp\BLL\membro.php';
    use \BLL\membro;

    $bllMembro = new \BLL\membro;
    $listaMembro = $bllMembro->Select();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script>
        function remover(id){
            if(confirm('Excluir Membro ' + id + '?')){
                location.href = 'delMembro.php?id=' + id;}}
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membros Cadastrados</title>
</head>
<body>
<?php include_once '..\menu.php'; ?>
<h1>Lista de Pessoas</h1>
    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Contato</th>
            <th>Endereço</th>
            <th>Operações</th>
            <th><a class="btn-floating btn-large waves-effect waves-light deep-orange lighten-2">
                <i class="material-icons" onclick="javascript:location.href='formMembro.php'">add</i></a></th>
        </tr>

        <?php foreach ($listaMembro as $membro) {?>
            <tr>
                <td><?php echo $membro->getId();?></td>
                <td><?php echo $membro->getNome();?></td>
                <td><?php echo $membro->getContato();?></td>
                <td><?php echo $membro->getEndereco();?></td>
                <td><a class="btn-floating btn-small waves-effect waves-light deep-orange lighten-2"
                        onclick="javascript:location.href='formEditMembro.php?id=' + '<?php echo $membro->getID();?>'">
                        <i class="material-icons">edit</i></a>
                    <a class="btn-floating btn-small waves-effect waves-light deep-orange lighten-2"
                        onclick="javascript:location.href='formDetMembro.php?id=' + '<?php echo $membro->getID();?>'">
                        <i class="material-icons">search</i></a>
                    <a class="btn-floating btn-small waves-effect waves-light deep-orange lighten-2"
                        onclick="javascript:remover(<?php echo $membro->getID(); ?>)">
                        <i class="material-icons">delete</i></a>
                </td>
            </tr>
        <?php } ?>
   </table>
</body>
</html>