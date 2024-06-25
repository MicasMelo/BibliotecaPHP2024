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
    
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" 
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../JS/init.js"></script>
    <?php include_once 'C:\xampp\htdocs\gestaophp\BLL\membro.php' ?>
    <?php include_once 'C:\xampp\htdocs\gestaophp\BLL\livro.php' ?>

    <title>Fazer Empréstimo</title>
</head>

<body>
<?php include_once '../menu.php'?>
<br><br>    
<div class="container orange lighten-4 brown-text col s12 red-darken-4-margin">
        <div class="center"><h1>Realizar Empréstimo</h1></div>
        <div class="center row">
            <form action="insEmpt.php" method="POST" class="col s12 center row">
                <div class="input-field col s7">
                    <select name="selectIdLivro">
                        <option value="" disabled selected>Selecione o livro</option>
                        <?php
                            $bllLivro = new BLL\livro();
                            $listaLvr = $bllLivro->Select();
                            foreach ($listaLvr as $livro){?>
                                <option value="<?php echo $livro->getID();?>">
                                    <?php echo $livro->getTitulo();?></option>
                            <?php } ?>
                    </select>
                    <label>Livro</label>
                </div>
                <div class="input-field col s7">
                    <select name="selectIdMembro">
                        <option value="" disabled selected>Selecione o membro</option>
                        <?php
                            $bllMembro = new BLL\membro();
                            $listaMembro = $bllMembro->Select();
                            foreach ($listaMembro as $membro){?>
                                <option value="<?php echo $membro->getID();?>">
                                    <?php echo $membro->getNome();?></option>
                            <?php } ?>
                    </select>
                    <label>Pessoa</label>
                </div>
                <div class="input-field col s7">
                    <input placeholder="Data do sistema (Hoje)" id="dataEmprestimo" name="txtDataEmprestimo" type="date" class="validate">
                    <label for="dataEmprestimo">Data do Empréstimo</label>
                </div>
                <div class="input-field col s7">
                    <input id="devolucao" name="txtDevolucao" type="date" class="validate">
                    <label for="devolucao">Data para Devolução</label>
                </div>
                <div class="brown-lighten-5 col s12">
                    <div class="center">
                    <button class="btn red darken-4 waves-effect waves-light" type="submit">Salvar</button>
                    <button class="btn red darken-4 waves-effect waves-light" type="reset">Limpar</button>
                    <button class="btn red darken-4 waves-effect waves-light" type="button" 
                            onclick="javascript:location.href='listarEmpt.php'">Voltar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>