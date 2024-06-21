<?php
    namespace MODEL;
    class Emprestimo{
        private ?int $id;
        private ?int $idLivro;
        private ?int $idMembro;
        private ?string $data_empresimo;
        private ?string $data_devolutiva;

        public function __construct(){}

        public function getID(){
            return $this->id;}

        public function setID(int $id){
            $this->id = $id;}

        public function getIDLivro(){
            return $this->idLivro;}

        public function setIDLivro(int $idLivro){
            $this->idLivro = $idLivro;}

        public function getIDMembro(){
            return $this->idMembro;}

        public function setIDMembro(int $idMembro){
            $this->idMembro = $idMembro;}

        public function getData_empresimo(){
            return $this->data_empresimo;}

        public function setData_empresimo(string $data_empresimo){
            $this->data_empresimo = $data_empresimo;}

        public function getData_devolutiva(){
            return $this->data_devolutiva;}

        public function setData_devolutiva(string $data_devolutiva){
            $this->data_devolutiva = $data_devolutiva;}
    }
?>