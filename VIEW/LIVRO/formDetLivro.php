<?php
    include_once 'C:\xampp\htdocs\gestaophp\MODEL\livro.php';
    include_once 'C:\xampp\htdocs\gestaophp\BLL\livro.php';
    $id = $_GET['id'];

    $bllLivro = new BLL\livro();
    $livro = $bllLivro->SelectID($id);
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
            if(confirm('Excluir Livro ' + id + '?')){
                location.href = 'delLivro.php?id=' + id;
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
        <div class="center"><h2 class="underline">Mais Informações do Livro</h2></div>
        <div class="row">
            <div class="input-field col s7">
                <h5>ID: <?php echo $livro->getID() ?></h5>
                <input type="hidden" name="txtID" value="<?php echo $id;?>">
                <h5>Título: <?php echo $livro->getTitulo() ?></h5>
                <h5>Autor: <?php echo $livro->getAutor() ?></h5>
                <h5>Gênero: <?php echo $livro->getGenero() ?></h5>
                <h5>Status: <?php echo $livro->getStatus() ?></h5>
            </div>
            <div class="center brown-lighten-5 col s12">
                <button class="btn red darken-4 waves-effect waves-light" type="button"
                        onclick="javascript:location.href='formEditLivro.php?id=' + '<?php echo $livro->getID(); ?>'">Editar</button>
                <button class="btn red darken-4 waves-effect waves-light" type="button"
                        onclick="javascript:remover(<?php echo $livro->getID(); ?>)">Remover</button>
                <button class="btn red darken-4 waves-effect waves-light" type="button" 
                        onclick="javascript:location.href='listarLivro.php'">Voltar</button>
            </div>
        </div>
    </div>
</body>
</html>
