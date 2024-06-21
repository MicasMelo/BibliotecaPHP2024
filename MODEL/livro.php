<?php
    namespace MODEL;
    class Livro{
        private ?int $id;
        private ?string $titulo;
        private ?string $autor;
        private ?int $genero;
        private ?int $status;

        public function __construct(){}

        public function getID(){
            return $this->id;}

        public function setID(int $id){
            $this->id = $id;}

        public function getTitulo(){
            return $this->titulo;}

        public function setTitulo(string $titulo){
            $this->titulo = $titulo;}

        public function getAutor(){
            return $this->autor;}

        public function setAutor(string $autor){
            $this->autor = $autor;}

        public function getGenero(){
            return $this->genero;}

        public function setGenero(int $genero){
            $this->genero = $genero;}

        public function getStatus(){
            return $this->status;}

        public function setStatus(int $status){
            $this->status = $status;}
    }
?>