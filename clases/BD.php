<?php

class BD{
  public $con;
  private $db_user;
  private $db_pass;

  public function __construct(){
      $dsn = 'mysql:host=localhost;dbname=ecopreguntas;port=3306';
      $db_user = 'root';
      $db_pass = '';
      $opt = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',);
      $this->con = new PDO($dsn, $db_user, $db_pass, $opt);
    }

  public function registrarUsuario( Usuario $usuario){
    $consulta = $this->con->prepare("INSERT INTO usuarios (id, nombre, apellido, password, email, fecha_de_nac, username) VALUES (null, '".$usuario->getNombre()."', '".$usuario->getApellido()."', '".$usuario->getPassword()."', '".$usuario->getEmail()."','".$usuario->getFechaDeNac()."', '".$usuario->getUsername()."')");
    $consulta->bindValue('nombre', ".$usuario->getNombre()." );
    $consulta->bindValue('apellido', ".$usuario->getApellido()." );
    $consulta->bindValue('password', ".$usuario->getPassword()." );
    $consulta->bindValue('email', ".$usuario->getEmail()." );
    $consulta->bindValue('fecha', ".$usuario->getFechaDeNac()." );
    $consulta->bindValue('username', ".$usuario->getUsername()." );
    $consulta->execute();
    var_dump($usuario);
  }
}








 ?>
