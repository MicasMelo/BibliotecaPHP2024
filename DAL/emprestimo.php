<?php
    namespace DAL;
    require_once 'C:\xampp\htdocs\gestaophp\DAL\Conexao.php';
    require_once 'C:\xampp\htdocs\gestaophp\MODEL\emprestimo.php';

    class Emprestimo{
        public function Select(){

            $sql = "Select * from emprestimo;";
            $con = Conexao::conectar();
            $dados = $con->query($sql);
            $con = Conexao::desconectar();

            foreach ($dados as $linha){
                $empt = new \MODEL\emprestimo();
                $empt->setID($linha['id']);
                $empt->setIDLivro($linha['idLivro']);
                $empt->setIDMembro($linha['idMembro']);
                $empt->setData_empresimo($linha['data_emprestimo']);
                $empt->setData_devolutiva($linha['data_devolutiva']);
                $listaEmpt[] = $empt;
            }

            return $listaEmpt;
        }

        public function SelectId(int $id){}
        public function SelectIDLivro(string $idLivro){}
        public function SelectIDMembro(string $idMembro){}
    }
?>