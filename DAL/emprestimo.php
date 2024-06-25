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
                $empt->setData_emprestimo($linha['data_emprestimo']);
                $empt->setData_devolutiva($linha['data_devolutiva']);
                $listaEmpt[] = $empt;

                return $listaEmpt;
            }
        }

        public function SelectId(int $id){
            $sql = "Select * from emprestimo where id=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $empt = new \MODEL\emprestimo();
            $empt->setID($linha['id']);
            $empt->setIDLivro($linha['idLivro']);
            $empt->setIDMembro($linha['idMembro']);
            $empt->setData_emprestimo($linha['data_emprestimo']);
            $empt->setData_devolutiva($linha['data_devolutiva']);
            
            return $empt;
        }

        public function SelectByIdLivro(int $idLivro){
            $sql = "Select * from emprestimo where idLivro=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($idLivro));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $empt = new \MODEL\emprestimo();
            $empt->setID($linha['id']);
            $empt->setIDLivro($linha['idLivro']);
            $empt->setIDMembro($linha['idMembro']);
            $empt->setData_empresimo($linha['data_emprestimo']);
            $empt->setData_devolutiva($linha['data_devolutiva']);
            
            return $empt;
        }

        public function SelectByIdMembro(int $idMembro){
            $sql = "Select * from emprestimo where idMembro=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($idMembro));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $empt = new \MODEL\emprestimo();
            $empt->setID($linha['id']);
            $empt->setIDLivro($linha['idLivro']);
            $empt->setIDMembro($linha['idMembro']);
            $empt->setData_empresimo($linha['data_emprestimo']);
            $empt->setData_devolutiva($linha['data_devolutiva']);
            
            return $empt;
        }

        public function Insert(\MODEL\emprestimo $empt){
            $sql = "INSERT INTO emprestimo (idLivro, idMembro, data_emprestimo, data_devolutiva)
                    VALUES ('{$empt->getIDLivro()}','{$empt->getIDMembro()}','{$empt->getData_emprestimo()}','{$empt->getDAta_devolutiva()}');";
            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            return $result;
        }

        public function Update(\MODEL\emprestimo $empt){
            $sql = "UPDATE emprestimo SET idLivro=?, idMembro=?, data_emprestimo=?, data_devolutiva=? WHERE id=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($empt->getIDLivro(),$empt->getIDMembro(),$empt->getData_emprestimo(),$empt->getData_devolutiva(),$empt->getID()));
            $con = Conexao::desconectar();

            return $result;
        }

        public function Delete(int $id){
            $sql = "DELETE FROM emprestimo WHERE id=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();

            return $result;
        }
    }
?>