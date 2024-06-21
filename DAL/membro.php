<?php
    namespace DAL;
    require_once 'C:\xampp\htdocs\gestaophp\DAL\Conexao.php';
    require_once 'C:\xampp\htdocs\gestaophp\MODEL\membro.php';

    class Membro{
        public function Select(){
            $sql = "Select * from membro;";
            $con = Conexao::conectar();
            $dados = $con->query($sql);
            $con = Conexao::desconectar();

            foreach ($dados as $linha){
                $membro = new \MODEL\membro();
                $membro->setID($linha['id']);
                $membro->setNome($linha['nome']);
                $membro->setContato($linha['contato']);
                $membro->setEndereco($linha['endereco']);
                $listaMembro[] = $membro;
            }

            return $listaMembro;
        }

        public function SelectId(int $id){}
        public function SelectNome(string $nome){}
        public function SelectContato(string $contato){}
        public function SelectEndereco(string $endereco){}
    }
?>