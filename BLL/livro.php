<?php
    namespace BLL;
    include_once 'C:\xampp\htdocs\gestaophp\DAL\livro.php';

    class Livro{
        public function Select(){
            $dalLivro = new \DAL\livro();
            return $dalLivro->Select();
        }

        public function SelectID(int $id){
            $dalLivro = new \DAL\livro();
            return $dalLivro->SelectID($id);
        }

	    public function SelectTitulo(string $titulo){
            $dalLivro = new \DAL\livro();
            return $dalLivro->SelectTitulo($titulo);
        }

        public function Insert(\MODEL\livro $livro){
            $dalLivro = new \DAL\livro();
            return $dalLivro->Insert($livro);
        }

        public function Update(\MODEL\livro $livro){
            $dalLivro = new \DAL\livro();
            return $dalLivro->Update($livro);
        }

        public function Delete($id){
            $dalLivro = new \DAL\livro();
            return $dalLivro->Delete($id);
        }
    }
?>