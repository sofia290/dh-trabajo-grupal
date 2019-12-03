<?php

class Pregunta{

    private $texto;
    private $respuestas = [];

    public function __construct(string $pregunta){
        $this->texto = $pregunta;
    }

    public function mostrarTexto(){
        return $this->texto;
    }

    public function agregarRespuesta(Respuesta $respuesta){
        $this->respuestas[] = $respuesta;
    }

    public function getRespuestas(){
        return $this->respuestas;
    }

}
