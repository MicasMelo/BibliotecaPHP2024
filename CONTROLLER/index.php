<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        body {
            background-image: url('/gestaophp/IMG/books.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .red-darken-4-margin {
            border: 5px solid #b71c1c;
            padding: 10px;
            margin: 10px;
            border-radius: 15px;
        }
        .bold-heading {
            font-weight: bold;
        }
        .footer{
            position: absolute;
            bottom:0%;
            width: 100%;
        }
    </style>
    <meta charset="utf-8">
    <link rel="icon" href="../IMG/ikon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <title>Login</title>
</head>
<body>
    <nav class="red darken-4 z-depth-0">
        <div class="nav-wrapper container">
            <a href="/gestaophp/VIEW/menu.php" class="brand-logo left">Cabeceira</a>
        </div>
    </nav>

    <div class="had-container">
        <div class="row"><br>
            <div class="col m8 s8 offset-m2 offset-s2 center"><br><br>
                <img src="../VIEW/images/logo.png" alt="" height="80">
                <div class="row login">
                    <div class="orange lighten-4 brown-text col s12 red-darken-4-margin">
                        <h4 class="bold-heading">Faça seu login</h4>
                        <form method="POST" action="login.php" class="col s12">
                            <div class="row">
                                <div class="input-field col m12 s12">
                                    <i class="material-icons iconis prefix">account_box</i>
                                    <input id="icon_prefix" type="text" name="usuario" class="validate">
                                    <label for="icon_prefix">Usuário</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col m12 s12">
                                    <i class="material-icons iconis prefix">enhanced_encryption</i>
                                    <input id="password" type="password" name="senha" class="validate">
                                    <label for="password">Senha</label>
                                </div>
                            </div>
                            <div class="row">
                                <button class="btn red darken-4 waves-effect waves-light" type="submit" name="action">Acessar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer"><?php include_once 'footer.php' ?></div>
</body>
</html>