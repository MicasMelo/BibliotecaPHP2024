<?php
  session_start();
  if(!isset($_SESSION['login'])){
    header("location:/gestaophp/CONTROLLER/index.php");
  }
?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
<style>
  body {
    background-image: url('/gestaophp/IMG/books.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
  }
</style>
<link rel="icon" href="/gestaophp/IMG/ikon.png">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   
  <title> Cabeceira </title>
</head>

<body>
<nav class="red darken-4 z-depth-0">
  <div class="nav-wrapper container">
    <a href="/gestaophp/VIEW/menu.php" class="brand-logo left">Cabeceira</a>
    <a href="#" data-target="menu-mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="/gestaophp/VIEW/LIVRO/listarLivro.php">Livros</a></li>
      <li><a href="/gestaophp/VIEW/MEMBRO/listarMembro.php">Membros</a></li>
      <li><a href="/gestaophp/VIEW/EMPRESTIMO/listarEmpt.php">Emprestimos</a></li>
      <li><a href="../CONTROLLER/logout.php">Logout</a></li>
    </ul>
  </div>
</nav> 

<ul id="menu-mobile" class="sidenav">
  <li><a href="/gestaophp/VIEW/LIVRO/listarLivro.php">Livros</a></li>
  <li><a href="/gestaophp/VIEW/MEMBRO/listarMembro.php">Membros</a></li>
  <li><a href="/gestaophp/VIEW/EMPRESTIMO/listarEmpt.php">Emprestimos</a></li>
  <li><a href="../CONTROLLER/logout.php">Logout</a></li>
</ul>

<!-- jQuery and Materialize JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
    });
</script>
</body>
</html>
