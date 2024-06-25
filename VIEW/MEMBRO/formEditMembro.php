<?php
    include_once 'C:\xampp\htdocs\gestaophp\MODEL\membro.php';
    include_once 'C:\xampp\htdocs\gestaophp\BLL\membro.php';
    $id = $_GET['id']; //echo 'ID: ' . $id . "</br>";

    $bllMembro = new BLL\membro();
    $membro = $bllMembro->SelectID($id);
    //TESTE echo "Descricao: " . $membro->getNome() . "</br>";
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

    <title>Editar Membro</title>
</head>

<body>
<?php include_once '../menu.php'; ?>
    <br><br>
    <div class="container orange lighten-4 brown-text col s12 red-darken-4-margin">
        <div class="center">
            <h1>Editar Membro</h1>
        </div>
        <div class="center row">
            <form action="editMembro.php" method="POST" class="col s12 center row">
                <div class="input-field col s7">
                    <label for="id" class="black-text bold">ID: <?php echo $membro->getID() ?></label><br><br>
                    <input type="hidden" name="txtID" value="<?php echo $id;?>">
                    
                </div>
                <div class="input-field col s7">
                    <input id="nome" name="txtNome" type="text" required minlength="2"
                        class="validate" value="<?php echo $membro->getNome();?>">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s7">
                    <input placeholder="Exemplo: (xx)xxxxx-xxxx ou e-mail" id="contato" name="txtContato" type="tel" 
                        class="validate" value="<?php echo $membro->getContato();?>">
                    <label for="contato">Contato</label>
                </div>
                <div class="input-field col s7">
                    <input id="endereco" name="txtEndereco" type="text"
                        class="validate" value="<?php echo $membro->getEndereco();?>">
                    <label for="endereco">Endereço</label>
                </div>
                <div class="center brown-lighten-5 col s12">
                    <button class="btn red darken-4 waves-effect waves-light" type="submit">Salvar</button>
                    <button class="btn red darken-4 waves-effect waves-light" type="reset">Limpar</button>
                    <button class="btn red darken-4 waves-effect waves-light" type="button" 
                            onclick="javascript:location.href='listarMembro.php'">Voltar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>