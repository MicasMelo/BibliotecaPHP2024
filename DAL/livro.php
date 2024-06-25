<?php
    namespace DAL;
    require_once 'C:\xampp\htdocs\gestaophp\DAL\Conexao.php';
    require_once 'C:\xampp\htdocs\gestaophp\MODEL\livro.php';

    class Livro{
        public function Select(){
            $sql = "Select * from livro;";
            $con = Conexao::conectar();
            $dados = $con->query($sql);
            $con = Conexao::desconectar();

            $listaLivro = [];
            foreach ($dados as $linha){
                $livro = new \MODEL\livro();
                $livro->setID($linha['id']);
                $livro->setTitulo($linha['titulo']);
                $livro->setAutor($linha['autor']);
                $livro->setGenero($linha['genero']);
                $livro->setStatus($linha['status']);
                $listaLivro[] = $livro;
            }
            return $listaLivro;
        }

        public function SelectId(int $id){
            $sql = "Select * from livro where id=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($id));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $livro = new \MODEL\livro();
            $livro->setID($linha['id']);
            $livro->setTitulo($linha['titulo']);
            $livro->setAutor($linha['autor']);
            $livro->setGenero($linha['genero']);
            $livro->setStatus($linha['status']);
            
            return $livro;
        }

        public function SelectTitulo(string $titulo){
            $sql = "Select * from livro where titulo like '%" . $titulo .  "%' order by titulo;";
            
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            $listaLivro = [];
            foreach($result as $linha){
                $livro = new \MODEL\livro();
                $livro->setID($linha['id']);
                $livro->setTitulo($linha['titulo']);
                $livro->setAutor($linha['autor']);
                $livro->setGenero($linha['genero']);
                $livro->setStatus($linha['status']);

                $listaLivro[] = $livro;
            }
            return $listaLivro;
        }

        public function Insert(\MODEL\livro $livro){
            $sql = "INSERT INTO livro (titulo, autor, genero, status)
                    VALUES ('{$livro->getTitulo()}','{$livro->getAutor()}','{$livro->getGenero()}','{$livro->getStatus()}');";
            $con = Conexao::conectar();
            $result = $con->query($sql);
            $con = Conexao::desconectar();

            return $result;
        }

        public function Update(\MODEL\livro $livro){
            $sql = "UPDATE livro SET titulo=?, autor=?, genero=?, status=? WHERE id=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($livro->getTitulo(),$livro->getAutor(),$livro->getGenero(),$livro->getStatus(),$livro->getID()));
            $con = Conexao::desconectar();

            return $result;
        }

        public function Delete(int $id){
            $sql = "DELETE FROM livro WHERE id=?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $result = $query->execute(array($id));
            $con = Conexao::desconectar();

            return $result;
        }
    }
?>
