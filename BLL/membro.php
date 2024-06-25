<?php
    namespace BLL;
    include_once 'C:\xampp\htdocs\gestaophp\DAL\membro.php';

    class Membro{
        public function Select(){
            $dalMembro = new \DAL\membro();
            return $dalMembro->Select();
        }

        public function SelectID(int $id){
            $dalMembro = new \DAL\membro();
            return $dalMembro->SelectID($id);
        }

        public function Insert(\MODEL\membro $membro){
            $dalMembro = new \DAL\membro();
            return $dalMembro->Insert($membro);
        }

        public function Update(\MODEL\membro $membro){
            $dalMembro = new \DAL\membro();
            return $dalMembro->Update($membro);
        }

        public function Delete($id){
            $dalMembro = new \DAL\membro();
            return $dalMembro->Delete($id);
        }
    }
?>
