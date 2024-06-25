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

    <title>Editar Empréstimo</title>
</head>

<body>
<?php include_once '../menu.php'; ?>
    <br><br>
    <div class="container orange lighten-4 brown-text col s12 red-darken-4-margin">
        <div class="center">
            <h1>Editar Empréstimo</h1>
        </div>
        <div class="center row">
            <form action="editEmpt.php" method="POST" class="col s12 center row">
                <div class="input-field col s7">
                    <label for="id" class="black-text bold">ID: <?php echo $empt->getID() ?></label><br><br>
                    <input type="hidden" name="txtID" value="<?php echo $id;?>">
                </div>
                <div class="input-field col s7">
                    <input id="idLivro" name="txtIdLivro" type="text"
                        class="validate" value="<?php echo $empt->getIDLivro();?>">
                    <label for="idLivro">ID Livro</label>
                </div>
                <div class="input-field col s7">
                    <input id="idMembro" name="txtIdMembro" type="text" 
                        class="validate" value="<?php echo $empt->getIDMembro();?>">
                    <label for="idMembro">ID Membro</label>
                </div>
                <div class="input-field col s7">
                    <label for="dataEmprestimo" class="black-text bold">Data do Empréstimo: 
                        <br><?php echo $empt->getData_emprestimo() ?></label><br><br><br>
                    <input type="hidden" name="txtDataEmprestimo" value="<?php echo $empt->getData_emprestimo();?>">
                </div>
                <div class="input-field col s7">
                    <input id="devolucao" name="txtDevolucao" type="date"
                        class="validate" value="<?php echo $empt->getData_devolutiva();?>">
                    <label for="devolucao">Devolução</label>
                </div>
                <div class="center brown-lighten-5 col s12">
                    <button class="btn red darken-4 waves-effect waves-light" type="submit">Salvar</button>
                    <button class="btn red darken-4 waves-effect waves-light" type="reset">Limpar</button>
                    <button class="btn red darken-4 waves-effect waves-light" type="button" 
                            onclick="javascript:location.href='listarEmpt.php'">Voltar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>