<!DOCTYPE html>
<?php
session_start();
?>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="estilo.css">
  <link rel="shortcut icon" type="image/png" href="imagenes/recycle-solid.png">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/styles.css">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <title>Preguntas frequentes</title>
</head>
<body>
<div class="page-container">
<div class="content-wrap">
  <?php
  include('header.php');
  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1 class="text-center"><u>Preguntas Frecuentes</u></h1>
      </div>
    </div>
    <div id="juego"  class="row">
      <div class="col text-center" >
        <h2> ¿Cómo jugar?</h2>
        <p>Muy simple, la jugada empieza con una serie de preguntas fáciles, pero ¡OJO!, solo habrá un tiempo de 30 segundos en cada pregunta. Cada respuesta correcta valdrá 10 puntos.  </p>
      </div>
    </div>

    <div id="puntos">
      <h3>¿Cómo funcionan los puntos?</h3>
      <p>Cada respuesta válida obtendrá el valor de 10 puntos. Cuando una respuesta es inválida, al jugador se le descontarán 5 puntos.</p>

    </div>
    <div id="tematica">
      <h2><u>¿Sobre que tratan estas preguntas? Las temáticas son:</u></h2>
      <p><br>&bull; Reciclaje <br>
        <br> &bull; Ecología<br>
        <br>&bull; Ambiente <br></p>

      </div>
      <div id="amigos">
        <h3>¿Puedo jugar con mis amigos?</h3>
        <p><u>¡Por supuesto!</u> El juego tiene 2 modalidades:  <br>
          &bull; Solitario. La partida será jugada por un solo usuario.
          <br>  &bull; Competencia. Se podrá armar un grupo de máximo 4 usuarios, estos competirán entre sí y el ganador se llevará los puntos sumados por todos los usuarios.<br>   </p>


        </div>
        <div id="preguntas">
          <h3><u>¿Para que funciona la página? ¿Cual es el objetivo del juego?</u> </h3>
          <p>Nuestro objetivo es que por medio de este juego cada participante pueda aprender, y asi tomar conciencia sobre las problematicas que existen en el mundo</p>
        </div>
        <div id="participacion">
          <h3><u>¿Quiénes pueden participar?</u></h3>
          <p>No hay edad para jugar, puede participar cualquier persona que tenga ganas de aprender.</p>
        </div>
        <div id="sugerir">
          <h3>¿Puedo sugerir preguntas? </h3>
          <p> <u>¡CLARO!</u>  La pregunta que sugieras pasará a una etapa de evaluación para despues agregarla a nuestro ecopreguntas. </p>
        </div>

        <div id="conciencia">
          <h3>¿Cómo surgió ecopreguntas? </h3>
          <p>Queremos que la gente tome conciencia sobre las problematicas que hay en el mundo,  asi aprender y ayudar a mejorar el medioambiente. <u>Tu granito de arena ayuda al planeta y animales.</u>  </p>
        </div>
      </div>
      <?php require_once 'footer.php'; ?>
      <!--<footer >
      <form class="row" action="index.html" method="post">
      <div class="offset-md-4 col-md-4 offset-sm-2 col-sm-8" >
      <p id="textform">¿Quieres hacernos una consulta? <br> ¿Pasabas por aquí y te apetece saludar?¡Pues no te cortes! Mándanos un correo y te responderé a la velocidad del rayo!  </p>
      <input type="text" name="nombre" placeholder="Nombre" value=""  required>
      <input type="text" name="correo" placeholder="Correo" value="" required>
      <textarea name="mensaje" placeholder="Escriba aquí su mensaje" required></textarea>
      <input type="button"  value="Enviar" id="boton">
    </div>
  </form>
</footer>-->
</div>
</div>
</body>
</html>
