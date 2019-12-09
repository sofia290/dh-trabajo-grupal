<?php

class Validador{

  public function estaVacio($dato){
    return $dato == "";
  }

  public function tieneFormatoEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }



}



 ?>
