<?php
    namespace BLL;
    include_once 'C:\xampp\htdocs\gestaophp\DAL\usuario.php';

    class Usuario{
        public function SelectUser(string $usuario){
            $dal = new \DAL\usuario();
            return $dal->SelectUser($usuario);
        }
    }
?>