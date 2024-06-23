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
            
                return $listaMembro;
            }
        }

        public function SelectID(int $id){ //recuperar uma linha só
            $sql = "Select * from membro where id=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $membro = new \MODEL\membro();
            $membro->setID($linha['id']);
            $membro->setNome($linha['nome']);
            $membro->setContato($linha['contato']);
            $membro->setEndereco($linha['endereco']);
            
            return $membro;
        }

        public function Insert(\MODEL\membro $membro){
            $sql = "INSERT INTO membro (nome, contato, endereco)
                    VALUES ('{$membro->getNome()}','{$membro->getContato()}','{$membro->getEndereco()}');";
            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            return $result;
        }

        public function Update(\MODEL\membro $membro){
            $sql = "UPDATE membro SET nome=?, contato=?, endereco=? WHERE id=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($membro->getNome(),$membro->getContato(),$membro->getEndereco(),$membro->getID()));
            $con = Conexao::desconectar();

            return $result;
        }

        public function Delete(int $id){
            $sql = "DELETE FROM membro WHERE id=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();

            return $result;
        }
    }
?>
