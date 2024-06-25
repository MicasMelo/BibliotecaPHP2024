<?php
    namespace BLL;
    include_once 'C:\xampp\htdocs\gestaophp\DAL\genero.php';
    use DAL;

    class Genero{
        public function Select(){
            $dalGnr = new \DAL\genero();
            return $dalGnr->Select();
        }
    }
?>