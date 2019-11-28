<!DOCTYPE html>
<?php
session_start();
//si existe el indice "usuario" como cookie
//si el usuario tiene la sesion abierta
if(isset($_COOKIE["usuario"]) || isset($_SESSION["usuario"])){
  header("Location:index.php");

}
if($_POST){
  var_dump($_FILES);
  //validacion
  $errores = false;

  if(!$errores){
    //$name = $_FILES['foto_perfil']['name'];
    //$ext = pathinfo($name, PATHINFO_EXTENSION);
    //creo un usuario como array
    $nuevoUsuario = [
      "nombre" => $_POST["nombre"],
      "apellido"=>$_POST["apellido"],
      "email" => $_POST["email"],
      "fecha-de-nacimiento" =>$_POST["fecha-de-nacimiento"],
      "username"=>$_POST["username"],
      "password" => password_hash($_POST["password"],PASSWORD_DEFAULT)
      //"contrasenia" => md5($_POST["password"])
    ];
    //traerme la base de datos
    $usuariosEnJSON = file_get_contents("usuarios.json");
    //convertir a php el json
    $usuariosEnPHP = json_decode($usuariosEnJSON,true);
    //agregarle el nuevo usuario al array de la base de datos
    $usuariosEnPHP[] = $nuevoUsuario;
    //convertir la base completa a json
    $usuariosEnJSON = json_encode($usuariosEnPHP);
    //sobreescribir el json
    file_put_contents("usuarios.json",$usuariosEnJSON);
    //move_uploaded_file($_FILES["foto_perfil"]["tmp_name"], "avatars/".$_POST["email"].".".$ext);

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
  <link rel="stylesheet" href="/css/index.css">
</head>
<body>
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
        <form method="POST">
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
</body>
</html>
