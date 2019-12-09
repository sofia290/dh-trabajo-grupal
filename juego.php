<?php
echo "<br>";
require_once 'clases/Usuario.php';
require_once 'clases/Pregunta.php';
require_once 'clases/Respuesta.php';
require_once 'clases/Partida.php';

$pedro = new Usuario;
$pedro->nombre = "Pedro";
$pedro->email = "pedro@pedro.com";

$juana = new Usuario;
$juana->nombre = "Juana";
$juana->email = "juana@juana.com";

$rodrigo = new Usuario;
$rodrigo->nombre = "Rodrigo";
$rodrigo->email = "rodrigo@rodrigo.com";

$marta = new Usuario;
$marta->nombre = "Marta";
$marta->email = "marta@marta.com";

$primerJuego = new Partida;
$primerJuego->usuarios[] = $pedro;
$primerJuego->usuarios[] = $marta;
$primerJuego->usuarios[] = $rodrigo;
$primerJuego->usuarios[] = $juana;

$primerJuego->fecha = "12/11/2019";

$respuesta1 = new Respuesta;
$respuesta1->texto = "Digital House";
$respuesta1->correcta = true;
$respuesta1->puntos = 5;

$respuesta2 = new Respuesta;
$respuesta2->texto = "Mi casa";
$respuesta2->correcta = false;
$respuesta2->puntos = 0;

$respuesta3 = new Respuesta;
$respuesta3->texto = "La cancha de River";
$respuesta3->correcta = false;
$respuesta3->puntos = 0;

$respuesta4 = new Respuesta;
$respuesta4->texto = "Otro lado";
$respuesta4->correcta = false;
$respuesta4->puntos = 0;

$pregunta1 = new Pregunta;
$pregunta1->texto = "Donde estamos?";
$pregunta1->respuestas[] = $respuesta1;
$pregunta1->respuestas[] = $respuesta2;
$pregunta1->respuestas[] = $respuesta3;
$pregunta1->respuestas[] = $respuesta4;

echo "Pregunta 1:<br>";
echo $pregunta1->texto."<br><br>";
echo "Respuestas:<br>";
foreach($pregunta1->respuestas as $respuesta){
  echo $respuesta->texto;
  echo "<br>";
}

$juana->responder($pregunta1,3);
$rodrigo->responder($pregunta1,0);
$marta->responder($pregunta1,0);
$pedro->responder($pregunta1,2);

var_dump($primerJuego);
