<?php

class Respuesta{

    private $texto;
    private $correcta;

    public function __construct($respuesta,$correctaOno = 0){
        $this->texto = $respuesta;
        $this->correcta = $correctaOno;
    }

    public function mostrarTexto(){
        return $this->texto;
    }

    public function mostrarResultado(){
        return $this->correcta;
    }


}