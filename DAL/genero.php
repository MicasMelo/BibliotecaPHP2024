<?php
    namespace DAL;
    require_once 'C:\xampp\htdocs\gestaophp\DAL\Conexao.php';
    require_once 'C:\xampp\htdocs\gestaophp\MODEL\genero.php';

    class Genero{
        public function Select(){

            $sql = "Select * from genero;";
            $con = Conexao::conectar();
            $dados = $con->query($sql);
            $con = Conexao::desconectar();

            foreach ($dados as $linha){
                $gnr = new \MODEL\genero();
                $gnr->setID($linha['id']);
                $gnr->setDescricao($linha['descricao']);
                $listaGenero[] = $gnr;
            
                return $listaGenero;
            }
        }

        public function SelectId(int $id){}
    }
?>