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
        .underline {
            text-decoration: underline;
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

    <title>Inserir Membro</title>
</head>

<body>
<?php include_once '../menu.php'?>
<br><br>    
<div class="container orange lighten-4 brown-text col s12 red-darken-4-margin">
        <div class="center"><h1>Cadastrar Membro</h1></div>
        <div class="center row">
            <form action="insMembro.php" method="POST" class="col s12 center row">
                <div class="input-field col s7">
                    <input id="nome" name="txtNome" type="text" class="validate">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s7">
                    <input placeholder="(xx)xxxxx-xxxx ou e-mail" id="contato" name="txtContato" type="text" class="validate">
                    <label for="contato">Contato</label>
                </div>
                <div class="input-field col s7">
                    <input id="endereco" name="txtEndereco" type="text" class="validate">
                    <label for="endereco">Endereço</label>
                </div>
                <div class="brown-lighten-5 col s12">
                    <div class="center">
                    <button class="btn red darken-4 waves-effect waves-light" type="submit">Salvar</button>
                    <button class="btn red darken-4 waves-effect waves-light" type="reset">Limpar</button>
                    <button class="btn red darken-4 waves-effect waves-light" type="button" 
                            onclick="javascript:location.href='listarMembro.php'">Voltar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>