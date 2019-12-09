<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Mi perfil </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/navbar.css">

</head>
<body>
  <?php include_once 'header.php'; ?> <!-- Acá va el header -->

  <div class="container-fluid">
    <!--<div class="row">
    <form action="">
    <div class="col-2 col-md-2 col-lg-2 text-center">  Imagen usuario
    <img src="imagenes/usuario.png" alt="" id="usuario-imagen">
  </div>
  <div class="col-12 col-lg-10">
  <div class="row">
  <div class="col-12 col-md-2">
  <h2> Tus datos </h2>
</div>
<div class="col-12 col-md-4 mt-2">
<a class="align-bottom" href="#"> Guardar cambios </a>
</div>
</div>Datos usuario
<div class="row">
<div class="col">

</div>
</div>
<p> Nombre: </p>
<p> Nombre de usuario: </p>
<p> Correo electronico: </p>
<p> Fecha de nacimiento: </p>
<p> Número de telefono: </p>
<p></p>
</div>
</form>
</div>-->
<form class="" action="" method="post">
  <div class="row">
    <div class="col-2">
      <img src="imagenes/usuario.png" alt="" class="usuario-imagen">
    </div>
    <div class="col-12 col-lg-10">
      <div class="row">
        <div class="col-12 col-md-2">
          <h2> Tus datos </h2>
          <p> Nombre: </p>
          <p> Nombre de usuario: </p>
          <p> Correo electronico: </p>
          <p> Fecha de nacimiento: </p>
        </div>
        <div class="col-12 col-md-4">
          <a class="align-center" href="#"> Editar perfil </a>
        </div>

      </div>
    </form>
  </div>

  <?php require_once 'footer.php'; ?> <!-- Aca va el footer -->

</body>
</html>
