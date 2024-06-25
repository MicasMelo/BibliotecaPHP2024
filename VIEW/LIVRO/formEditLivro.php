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
    <style>
        .red-darken-4-margin {
            border: 5px solid #b71c1c;
            padding: 10px;
            margin: 10px;
            border-radius: 15px;
        }
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Inclusão do jQuery-->
    <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <!-- Inclusão do Plugin jQuery Validation-->
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../JS/init.js"></script>
    <?php include_once 'C:\xampp\htdocs\gestaophp\BLL\genero.php' ?>

    <title>Editar Livro</title>
</head>

<body>
<?php include_once '../menu.php'; ?>
    <br><br>
    <div class="container orange lighten-4 brown-text col s12 red-darken-4-margin">
        <div class="center">
            <h1>Editar Livro</h1>
        </div>
        <div class="center row">
            <form action="editLivro.php" method="POST" class="col s12 center row">
                <div class="input-field col s7">
                    <label for="id" class="black-text bold">ID: <?php echo $livro->getID() ?></label><br><br>
                    <input type="hidden" name="txtID" value="<?php echo $id;?>">
                </div>
                <div class="input-field col s7">
                    <input id="titulo" name="txtTitulo" type="text" required minlength="2"
                        class="validate" value="<?php echo $livro->getTitulo();?>">
                    <label for="titulo">Titulo</label>
                </div>
                <div class="input-field col s7">
                    <input id="autor" name="txtAutor" type="text" required minlength="2"
                        class="validate" value="<?php echo $livro->getAutor();?>">
                    <label for="autor">Autor</label>
                </div>
                <div class="input-field col s7">
                    <select id="genero" name="selectGnr">
                        <option value="" disabled selected><?php echo $livro->getGenero();?></option>
                        <?php
                            $bllGnr = new BLL\genero();
                            $listaGnr = $bllGnr->Select();
                            foreach ($listaGnr as $gnr){?>
                                <option value="<?php echo $gnr->getID();?>">
                                    <?php echo $gnr->getDescricao();?></option>
                            <?php } ?>
                    </select>
                    <label>Gênero</label>
                </div>
                <div class="input-field col s7">
                    <input id="status" name="txtStatus" type="text"
                        class="validate" value="<?php echo $livro->getStatus();?>">
                    <label for="status">Status</label>
                </div>
                <div class="center brown-lighten-5 col s12">
                    <button class="btn red darken-4 waves-effect waves-light" type="submit">Salvar</button>
                    <button class="btn red darken-4 waves-effect waves-light" type="reset">Limpar</button>
                    <button class="btn red darken-4 waves-effect waves-light" type="button" 
                            onclick="javascript:location.href='listarLivro.php'">Voltar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>