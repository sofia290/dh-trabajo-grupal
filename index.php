<?php session_start();
include 'clases/BD.php';
include 'clases/Usuario.php';
$bd = new BD();
?>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/styles.css">
  <title> Ecopreguntas </title>
  <link rel="shortcut icon" type="image/png" href="imagenes/recycle-solid.png">
  <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
  <title></title>
</head>
<body>
  <div class="page-container">
    <div class="content-wrap">
      <?php
      include('header.php');
      ?>
      <div class="container-fluid">
        <section>
          <div class="row">
            <div class="col-md-12" >
              <img src="imagenes/tres.png" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div id="titulo">
                <?php
                if(isset($_SESSION["user_id"])){
                  ?>
                  <p class="text-center">Bienvenido/a  <?= $username ?> a Ecopreguntas , esperamos que te diviertas probando tus conocimientos sobre la ecología.</p>
                <?php };
                if(isset($_SESSION["user_id"])==null){
                  ?>
                  <p class="text-center">Bienvenido/a a Ecopreguntas , esperamos que te diviertas probando tus conocimientos sobre la ecología.</p>
                  <?php
                };?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div id="botones">
                <?php
                if(isset($_SESSION["user_id"])==null){
                  ?>
                  <a role="button" class="btn btn-success m-3" href="login.php">Iniciar sesión</a>
                  <a role="button" class="btn btn-success m-3" href="registro.php">Registrarse</a>
                  <?php
                };
                ?>
              </div>
            </div>
          </div>
        </section>
        <section class="subtitulos">
            <h2 >Temáticas del juego</h2>
        </section>
        <section class="fotos">
          <article class="col-4 ">
              <div class="row">
                  <div class="offset-md-4 col-md-4 offset-sm-2 col-sm-8  col-xs-12">
                    <h4> Reciclaje</h4>
                  </div>
                  <div class="col-12">
                      <img src="/imagenes/reci.jpg" alt="">
                  </div>
              </div>
          </article>
          <article class="col-4 ">
              <div class="row">
                  <div class="offset-md-4 col-md-4 offset-sm-2 col-sm-8  col-xs-12">
                    <h4> Ecología</h4>
                  </div>
                  <div class="col-12">
                      <img src="/imagenes/eco.jpg" alt="">
                  </div>
              </div>
          </article>
          <article class="col-4">
              <div class="row">
                  <div class="offset-md-4 col-md-4 offset-sm-2 col-sm-8  col-xs-12">
                    <h4> Ambiente</h4>
                  </div>
                  <div class="col-12">
                      <img src="/imagenes/ambi.jpg" alt="">
                  </div>
              </div>
          </article>
        </section>
        <section class="subtitulos">
            <h2 >Creadores</h2>
        </section>

        <section class="fotos">
          <article class="col-3">
            <div class="row">
                <div class="offset-md-4 col-md-4  col-sm-12  col-xs-12">
                  <h4> Sofía</h4>
                </div>
                <div class="col-12">
                    <img src="/imagenes/sofi.jpg" alt="">
                </div>
            </div>
          </article>
          <article class="col-3">
            <div class="row">
                <div class="offset-md-4 col-md-4  col-sm-12  col-xs-12">
                  <h4> Mariana</h4>
                </div>
                <div class="col-12">
                    <img src="/imagenes/sofi.jpg" alt="">
                </div>
            </div>
          </article>
          <article class="col-3">
            <div class="row">
                <div class="offset-md-4 col-md-4  col-sm-12  col-xs-12">
                  <h4> Camila </h4>
                </div>
                <div class="col-12">
                    <img src="/imagenes/sofi.jpg" alt="">
                </div>
            </div>
          </article>
          <article class="col-3">
            <div class="row">
                <div class="offset-md-4 col-md-4  col-sm-12  col-xs-12">
                  <h4> Emiliano</h4>
                </div>
                <div class="col-12">
                    <img src="/imagenes/sofi.jpg" alt="">
                </div>
            </div>
          </article>
        </section>
        <section class="subtitulos">

            <h2>Ranking</h2>

        </section>
        <section class="fotos">
          <article class="col-4">
            <div class="row">
                <div class="offset-md-3 col-md-6  col-sm-12  col-xs-12">
                  <h4> 1* Puesto:IanMarcos</h4>
                </div>
                <div class="col-12">
                    <img src="/imagenes/emiliano.jpg" alt="">
                </div>
            </div>
          </article>
          <article class="col-4">
            <div class="row">
                <div class="offset-md-3 col-md-6  col-sm-12  col-xs-12">
                  <h4> 2* Puesto:AnnaMaría33</h4>
                </div>
                <div class="col-12">
                    <img src="/imagenes/emiliano.jpg" alt="">
                </div>
            </div>
          </article>
          <article class="col-4">
            <div class="row">
                <div class=" offset-md-3 col-md-6  col-sm-12  col-xs-12">
                  <h4> 3* Puesto:JuanCarlos22</h4>
                </div>
                <div class="col-12">
                    <img src="/imagenes/emiliano.jpg" alt="">
                </div>
            </div>
          </article>
        </section>
      </div>
      <?php require_once 'footer.php'; ?>
    </div>
  </div>
  <?php
  require_once 'linksjs.php';
   ?>
</body>
</html>
