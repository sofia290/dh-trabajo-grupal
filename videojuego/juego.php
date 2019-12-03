<?php

require_once 'clases/Usuario.php';
require_once 'clases/Pregunta.php';
require_once 'clases/Respuesta.php';

$pedro = new Usuario("Pedro","pedro@pedro.com",30);

$pregunta1 = new Pregunta("¿Qué día es hoy?");
$respuesta1 = new Respuesta("Lunes");
$respuesta2 = new Respuesta("Martes",1);
$respuesta3 = new Respuesta("Sábado");
$respuesta4 = new Respuesta("Viernes");
$respuesta5 = new Respuesta("Santi",1);

$pregunta1->agregarRespuesta($respuesta1);
$pregunta1->agregarRespuesta($respuesta2);
$pregunta1->agregarRespuesta($respuesta3);
$pregunta1->agregarRespuesta($respuesta4);

echo "Pregunta:". $pregunta1->mostrarTexto();
echo "<br>";
echo "Respuestas:<br>";
foreach($pregunta1->getRespuestas() as $respuesta){
    echo $respuesta->mostrarTexto()."<br>";
}

$respuestaElegida = 3;
echo "La respuesta elegida es ".$pregunta1->getRespuestas()[$respuestaElegida]->mostrarResultado();

