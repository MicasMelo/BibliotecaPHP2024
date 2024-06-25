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
    
    <!--<script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->

    <title>Inserir Livro</title>
</head>

<body>
<?php include_once '../menu.php'?>
<br><br>    
<div class="container orange lighten-4 brown-text col s12 red-darken-4-margin">
        <div class="center"><h1>Cadastrar Livro</h1></div>
        <div class="center row">
            <form action="insLivro.php" method="POST" class="col s12 center row">
                <div class="input-field col s7">
                    <input id="titulo" name="txtTitulo" type="text" class="validate">
                    <label for="titulo">Titulo</label>
                </div>
                <div class="input-field col s7">
                    <input id="autor" name="txtAutor" type="text" class="validate">
                    <label for="autor">Autor</label>
                </div>
                <div class="input-field col s7">
                    <input id="genero" name="txtGenero" type="text" class="validate">
                    <label for="genero">Gênero</label>
                </div>
                <div class="input-field col s7">
                    <input id="status" name="txtStatus" type="text" class="validate">
                    <label for="status">Status</label>
                </div>
                <div class="brown-lighten-5 col s12">
                    <div class="center">
                    <button class="btn red darken-4 waves-effect waves-light" type="submit">Salvar</button>
                    <button class="btn red darken-4 waves-effect waves-light" type="reset">Limpar</button>
                    <button class="btn red darken-4 waves-effect waves-light" type="button" 
                            onclick="javascript:location.href='listarLivro.php'">Voltar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>