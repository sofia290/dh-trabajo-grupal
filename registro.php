<!DOCTYPE html>
<?php
session_start();
//si existe el indice "usuario" como cookie
//si el usuario tiene la sesion abierta
if(isset($_COOKIE["usuario"]) || isset($_SESSION["usuario"])){
  header("Location:index.php");

}
if($_POST){
  //include_once 'clases/Usuario.php';
  include_once 'clases/Validador.php';
  //validacion
  $errores = false;
  $validador = new Validador();
  if($validador->estaVacio($_POST["nombre"])){
    $errorNombre = "El nombre es obligatorio";
    $errores = true;
  };
  if($validador->estaVacio($_POST["apellido"])){
    $errorApellido = "El apellido es obligatorio";
    $errores = true;
  };
  if($validador->estaVacio($_POST["email"])){
    $errorEmail = "El email es obligatorio";
    $errores = true;
  }
  if($validador->tieneFormatoEmail($_POST["email"]) == false){
    $errores = true;
  }

  if($validador->estaVacio($_POST["fecha-de-nacimiento"])){
    $errorFecha = "La fecha de nacimiento es obligatoria";
    $errores = true;

  };
  if($validador->estaVacio($_POST["username"])){
    $errorUsuario = "El nombre de usuario es obligatorio";
    $errores = true;
  };
  if($validador->estaVacio($_POST["password"])){
    $errorPassword = "La contraseña es obligatoria";
    $errores = true;
  };

  if(!$errores){
    include 'clases/BD.php';
    include 'clases/Usuario.php';
    $bd = new BD();
    $usuarioNuevo = new Usuario($_POST["nombre"], $_POST["apellido"], $_POST["email"], $_POST["fecha-de-nacimiento"], $_POST["username"]);
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
    $usuarioNuevo->setPassword($password);
    $bd->registrarUsuario($usuarioNuevo);

    echo "Se ha registrado exitosamente";
    exit;
  }

}
?>

<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Registrate </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
  <div id="page-container">
    <div id="content-wrap">
      <?php
      include('header.php');
      ?>
      <div class="container"> <!-- Aca empieza el formulario -->
        <div class="row mt-3">
          <div class="col flexbox">
            <h1 class="text-center">Registrate</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nombre"> Nombre * </label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-address-card"></i>
                    </div>
                  </div>
                  <input id="nombre" name="nombre" placeholder="Introduzca su nombre" type="text" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="apellido"> Apellido * </label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-address-card"></i>
                    </div>
                  </div>
                  <input id="apellido" name="apellido" placeholder="Introduzca su apellido" type="text" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="email">Correo electrónico * </label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-at"></i>
                    </div>
                  </div>
                  <input id="email" name="email" placeholder="Introduzca su correo electrónico" type="email" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="email"> Foto de perfil </label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-at"></i>
                    </div>
                  </div>
                  <input type="file" name="foto_perfil">
                </div>
              </div>
              <div class="form-group">
                <label for="fecha-de-nacimiento">Fecha de nacimiento *</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-calendar"></i>
                    </div>
                  </div>
                  <input placeholder="Introduzca su fecha de nacimiento" class="textbox-n form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="fecha-de-nacimiento" name="fecha-de-nacimiento" required="required">
                </div>
              </div>
              <div class="form-group">
                <label for="username">Nombre de usuario *</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-user-circle"></i>
                    </div>
                  </div>
                  <input id="username" name="username" placeholder="Cree un nombre de usuario" type="text" required="required" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="password">Contraseña *</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-lock"></i>
                    </div>
                  </div>
                  <input id="password" name="password" placeholder="Cree una nueva contraseña" type="password" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group">
                <button name="submit" type="submit" class="btn btn-success btn-block">Registrate</button>
              </div>
            </form>
          </div>
        </div> <!-- Aca termina el formulario -->
        <div class="row d-none">
          <div class="col" style="width: 100%; height: 100px; background-color: green;"> <!-- Aca va el footer--> </div>
        </div>
      </div>

      <?php include_once 'footer.php'; ?>
    </div>
  </div>
</body>
</html>
