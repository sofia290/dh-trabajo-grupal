<?php

class BD{
  public $con;

  public function __construct(){
      $dsn = 'mysql:host=localhost;dbname=ecopreguntas;port=3306';
      $db_user = 'root';
      $db_pass = '';
      $opt = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
      $this->con = new PDO($dsn, $db_user, $db_pass, $opt);
    }

  public function registrarUsuario( Usuario $usuario){

    $nombre = $usuario->getNombre();
    $apellido = $usuario->getApellido();
    $email = $usuario->getEmail();
    $password = $usuario->getPassword();
    $fecha = $usuario->getFechaDeNac();
    $username = $usuario->getUsername();
    //$foto = $usuario->setFotoDePerfil("avatars/" . $_POST["email"] . ".jpg");

    //CON BIND VALUE
    $consulta = $this->con->prepare("INSERT INTO usuarios (id, nombre, apellido, password, email, fecha_de_nac, username) VALUES (null, :nombre, :apellido, :password, :email,:fecha, :username)");

    $consulta->bindValue('nombre', $nombre, PDO::PARAM_STR);
    $consulta->bindValue('apellido', $apellido, PDO::PARAM_STR);
    $consulta->bindValue('password', $password, PDO::PARAM_STR);
    $consulta->bindValue('email', $email, PDO::PARAM_STR);
    $consulta->bindValue('fecha', $fecha, PDO::PARAM_STR);
    $consulta->bindValue('username', $username, PDO::PARAM_STR);
    //$consulta->bindValue('foto', $foto, PDO::PARAM_STR);
    $consulta->execute();

    return $this->con->lastInsertId();
  }

  public function cargarFotoDePerfil($id, $foto){
    //$name = $_FILES['foto_perfil']['name'];
    //$ext = pathinfo($name, PATHINFO_EXTENSION);
    //$foto = "avatars/" . $_POST["email"] . "." . $ext;
    $consulta = $this->con->prepare("UPDATE usuarios  SET foto_de_perfil= '". $foto . "' WHERE id = '". $id . "'");

    $consulta->execute();
  }

  public function existeUsuario($email){

    $consulta = $this->con->query("SELECT email, id FROM usuarios WHERE email = '" . $email . "'");
    //$consulta->bindValue('email', $email, PDO::PARAM_STR);
    $usuario = $consulta->fetch(PDO::FETCH_ASSOC);

    return $usuario["id"];
  }

  public function traerUsuario($id){
        $consulta = $this->con->query("SELECT * FROM usuarios WHERE id = ".$id);
        $usuario = $consulta->fetch(PDO::FETCH_ASSOC);

        return $usuario;
    }

    public function actualizarUsuario($nombre,$apellido,$email,$fecha, $username){
       $consulta = $this->con->prepare("UPDATE usuarios SET nombre = :nombre , email = :email,   apellido = :apellido, email = :email ,fecha_de_nac = :fecha, username = :username WHERE id = ".$_SESSION["user_id"]);
       $consulta->bindValue('nombre', $nombre, PDO::PARAM_STR);
       $consulta->bindValue('apellido', $apellido, PDO::PARAM_STR);
       $consulta->bindValue('email', $email, PDO::PARAM_STR);
       $consulta->bindValue('fecha', $fecha, PDO::PARAM_STR);
       $consulta->bindValue('username', $username, PDO::PARAM_STR);
       $consulta->execute();

   }

    public function mostrarUsername($id){
      $consulta = $this->con->query("SELECT username FROM usuarios WHERE id = ".$id);
      $usuario = $consulta->fetch(PDO::FETCH_ASSOC);
      $username = $usuario["username"];

      return $username;
    }




}








 ?>
