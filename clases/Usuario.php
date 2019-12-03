<?php

class Usuario{
    public $nombre;
    public $email;
    public $puntaje = 0;
    private $id;

    public function __construct($nom,$ema, $id){
        $this->nombre = $nom;
        $this->email = $ema;
        $this->id = $id;
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

}
