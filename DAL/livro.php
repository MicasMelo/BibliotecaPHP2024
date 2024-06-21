<?php
    namespace DAL;
    require_once 'C:\xampp\htdocs\gestaophp\DAL\Conexao.php';
    require_once 'C:\xampp\htdocs\gestaophp\MODEL\livro.php';

    class Livro{
        public function Select(){

            $sql = "Select * from livro;";
            $con = Conexao::conectar();
            $dados = $con->query($sql);
            $con = Conexao::desconectar();

            foreach ($dados as $linha){
                $livro = new \MODEL\livro();
                $livro->setID($linha['id']);
                $livro->setTitulo($linha['titulo']);
                $livro->setAutor($linha['autor']);
                $livro->setGenero($linha['genero']);
                $livro->setStatus($linha['status']);
                $listaLivro[] = $livro;
            }
            
            return $listaLivro;
        }

        public function SelectId(int $id){}
    }
?>