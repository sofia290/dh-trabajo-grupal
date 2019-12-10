<!DOCTYPE html>
<?php
session_start();
?>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/index.css">
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
                if(isset($_SESSION["usuario"])){
                  ?>
                  <p class="text-center">Bienvenido/a  <?=$_SESSION["usuario"]?> a Ecopreguntas , esperamos que te diviertas probando tus conocimientos sobre la ecología.</p>
                <?php };
                if(isset($_SESSION["usuario"])==null){
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
                if(isset($_SESSION["usuario"])==null){
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
      </div>
      <?php require_once 'footer.php'; ?>
    </div>
  </div>
</body>
</html>
