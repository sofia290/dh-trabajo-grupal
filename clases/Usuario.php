<?php

class Usuario{
  private $id;
  private $nombre;
  private $apellido;
  private $email;
  private $password;
  private $fechaDeNac;
  private $username;
  private $puntaje = 0;
  private $fotoDePerfil;

  public function __construct($nombre, $apellido, $email, $fechaDeNac, $username){
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->fechaDeNac = $fechaDeNac;
    $this->username = $username;
  }


  public function responder(Pregunta $pregunta,$cualRespuesta){
    echo $this->nombre." respondió ".$pregunta->respuestas[$cualRespuesta]->texto;
    echo "<br>";
    if($pregunta->respuestas[$cualRespuesta]->correcta){
      echo "Es correcta<br><br>";
      $this->sumarPuntaje($pregunta->respuestas[$cualRespuesta]->puntos);
    }else{
      echo "Es incorrecta.<br><br>";
    }
  }

  public function sumarPuntaje($puntos){
    $this->puntaje = $this->puntaje + $puntos;
  }

  // SETTERS Y GETTERS
  public function getId(){
    return $this->id;
  }
  public function setId($id){
    $this->id = $id;

    return $this;
  }
  public function getNombre(){
    return $this->nombre;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;

    return $this;
  }

  public function getApellido(){
    return $this->apellido;
  }

  public function setApellido($apellido){
    $this->apellido = $apellido;

    return $this;
  }




  public function getEmail(){
    return $this->email;
  }
  public function setEmail($email){
    $this->email = $email;

    return $this;
  }

  public function getPassword(){
    return $this->password;
  }
  public function setPassword($password){
    $this->password = $password;

    return $this;
  }


  public function getFechaDeNac(){
    return $this->fechaDeNac;
  }
  public function setFechaDeNac($fechaDeNac){
    $this->fechaDeNac = $fechaDeNac;

    return $this;
  }
  public function getUsername(){
    return $this->username;
  }
  public function setUsername($username){
    $this->username = $username;

    return $this;
  }
  public function getPuntaje(){
    return $this->puntaje;
  }
  public function setPuntaje($puntaje){
    $this->puntaje = $puntaje;

    return $this;
  }

  public function getFotoDePerfil(){
    return $this->fotoDePerfil;
  }

  public function setFotoDePerfil($fotoDePerfil){
    $this->fotoDePerfil = $fotoDePerfil;

    return $this;
  }

}
