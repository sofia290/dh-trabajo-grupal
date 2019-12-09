<?php

class BD{
  public $con;
  private $db_user;
  private $db_pass;

  public function __construct(){
      $dsn = 'mysql:host=localhost;dbname=ecopreguntas;port=3306';
      $db_user = 'root';
      $db_pass = 'root';
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

    /*$consulta = $this->con->prepare("INSERT INTO usuarios (id, nombre, apellido, password, email, fecha_de_nac, username) VALUES (null, :nombre, :apellido, :password, :email, :fecha, :username)");*/

    /*$consulta->bindValue(":nombre", '"'.$nombre . '"');
    $consulta->bindValue(":apellido",'"'.$apellido . '"');
    $consulta->bindValue(":password", '"'. $password .'"');
    $consulta->bindValue(":email", '"'.$email.'"');
    $consulta->bindValue(":fecha", '"'. $fecha . '"');
    $consulta->bindValue(":userman", '"' . $username . '"');*/
    
    
    /*$consulta = $this->con->prepare("INSERT INTO usuarios (id, nombre, apellido, password, email, fecha_de_nac, username) VALUES (null, '".$nombre."', '".$apellido."', '".$password."', '".$email."','".$fecha"', '".$username."')");*/
    /*$consulta->bindValue('nombre', ".$usuario->getNombre()." );
    $consulta->bindValue('apellido', ".$usuario->getApellido()." );
    $consulta->bindValue('password', ".$usuario->getPassword()." );
    $consulta->bindValue('email', ".$usuario->getEmail()." );
    $consulta->bindValue('fecha', ".$usuario->getFechaDeNac()." );
    $consulta->bindValue('username', ".$usuario->getUsername()." );*/
    $consulta->execute();
    var_dump($usuario);
  }
}








 ?>
