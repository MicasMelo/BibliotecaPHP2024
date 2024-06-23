<?php
    namespace DAL;
    require_once 'C:\xampp\htdocs\gestaophp\DAL\Conexao.php';
    require_once 'C:\xampp\htdocs\gestaophp\MODEL\usuario.php';

    class Usuario{
        public function SelectUser(string $usuario){

            $sql = "Select * from usuario where usuario LIKE ?;";
            $con = Conexao::conectar();
            $query = $con->prepare($sql);
            $query->execute(array($usuario));
            $linha = $query->fetch(\PDO::FETCH_ASSOC);
            $con = Conexao::desconectar();

            $user = new \MODEL\usuario();

            if($linha != null){
                $user->setID($linha['id']);
                $user->setUsuario($linha['usuario']);
                $user->setSenha($linha['senha']);
                $user->setEmail($linha['email']);
            } return $user;
        }
    }
?>