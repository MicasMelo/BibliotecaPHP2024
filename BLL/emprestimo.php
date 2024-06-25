<?php
    namespace BLL;
    include_once 'C:\xampp\htdocs\gestaophp\DAL\emprestimo.php';

    class Emprestimo{
        public function Select(){
            $dalEmpt = new \DAL\emprestimo();
            return $dalEmpt->Select();
        }

        public function SelectID(int $id){
            $dalEmpt = new \DAL\emprestimo();
            return $dalEmpt->SelectID($id);
        }

        public function SelectByIdLivro(int $idLivro){
            $dalEmpt = new \DAL\emprestimo();
            return $dalEmpt->SelectByIdLivro($idLivro);
        }

        public function SelectByIdMembro(int $idMembro){
            $dalEmpt = new \DAL\emprestimo();
            return $dalEmpt->SelectByIdMembro($idMembro);
        }

        public function Insert(\MODEL\emprestimo $empt){
            $dalEmpt = new \DAL\emprestimo();
            return $dalEmpt->Insert($empt);
        }

        public function Update(\MODEL\emprestimo $empt){
            $dalEmpt = new \DAL\emprestimo();
            return $dalEmpt->Update($empt);
        }

        public function Delete($id){
            $dalEmpt = new \DAL\emprestimo();
            return $dalEmpt->Delete($id);
        }
    }
?>