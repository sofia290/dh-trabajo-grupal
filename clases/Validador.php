<?php

class Validador{

  public function estaVacio($dato){
    return $dato == "";
  }

  public function Persistencia($dato){
    if(!estaVacio($dato)){
      return $dato;
    }
  }

  public function tieneFormatoEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }



}



 ?>
