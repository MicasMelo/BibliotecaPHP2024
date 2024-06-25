<?php
    include_once 'C:\xampp\htdocs\gestaophp\MODEL\emprestimo.php';
    include_once 'C:\xampp\htdocs\gestaophp\BLL\emprestimo.php';
    $id = $_GET['id'];

    $bllEmpt = new BLL\emprestimo();
    $empt = $bllEmpt->SelectID($id);
?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
<link rel="icon" href="/gestaophp/IMG/ikon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    <script>
        function remover(id){
            if(confirm('Excluir Empréstimo ' + id + '?')){
                location.href = 'delEmpt.php?id=' + id;
            }
        }
    </script>

    <!--<script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->

    <title>Detalhes de Membro</title>
    <style>
        .red-darken-4-margin {
            border: 5px solid #b71c1c;
            padding: 10px;
            margin: 10px;
            border-radius: 15px;
        }
        .underline {
            text-decoration: underline;
        }
    </style>
</head>

<body>
<?php include_once '../menu.php'?>
    <br><br>    
    <div class="container orange lighten-4 brown-text col s12 red-darken-4-margin">
        <div class="center"><h1 class="underline">Mais Informações do Empréstimo</h1></div>
        <div class="row">
            <div class="input-field col s7">
                <h5>ID: <?php echo $empt->getID() ?></h5>
                <input type="hidden" name="txtID" value="<?php echo $id;?>">
                <h5>ID do Livro: <?php echo $empt->getIDLivro() ?></h5>
                <h5>ID do Membro: <?php echo $empt->getIDMembro() ?></h5>
                <h5>Data do Empréstimo: <?php echo $empt->getData_emprestimo() ?></h5>
                <h5>Data para Devolução: <?php echo $empt->getData_devolutiva() ?></h5>
            </div>
            <div class="center brown-lighten-5 col s12">
                <button class="btn red darken-4 waves-effect waves-light" type="button"
                        onclick="javascript:location.href='formEditEmpt.php?id=' + '<?php echo $empt->getID(); ?>'">Editar</button>
                <button class="btn red darken-4 waves-effect waves-light" type="button"
                        onclick="javascript:remover(<?php echo $empt->getID(); ?>)">Remover</button>
                <button class="btn red darken-4 waves-effect waves-light" type="button" 
                        onclick="javascript:location.href='listarEmpt.php'">Voltar</button>
            </div>
        </div>
    </div>
</body>
</html>
