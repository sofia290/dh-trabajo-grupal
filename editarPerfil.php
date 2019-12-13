<!DOCTYPE html>
<?php
session_start();
//echo $_SESSION["user_id"];

include "clases/BD.php";
include "clases/Usuario.php";

$bd = new BD;
$usuario= $bd-> traerUsuario($_SESSION["user_id"]);
//var_dump($usuario);


$errores = false;
$errorNombre = "";
$errorApellido = "";
$errorEmail = "";
$errorFecha = "";
$errorUsuario = "";
$errorPassword = "";


if($_POST){
  //include_once 'clases/Usuario.php';
  include_once 'clases/Validador.php';


  //validacion
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
  /*if($validador->estaVacio($_POST["password"])){
  $errorPassword = "La contraseña es obligatoria";
  $errores = true;
};*/

//validador  y al final  si no hay errores actualizar el usuario
if($_FILES["foto_perfil"]["error"] === 'UPLOAD__ERR_OK'){
  $name = $_FILES['foto_perfil']['name'];
  $ext = pathinfo($name, PATHINFO_EXTENSION);
  if($ext != "jpg" && $ext != "png" && $ext != "jpeg"){
    echo "El formato de la imagen no es el correcto";
  }
  if($ext == "jpg" || $ext == "png" || $ext == "jpeg") {
    $fotoNombre = "avatars/imagen" . "." . $ext;
    move_uploaded_file($_FILES['foto_perfil']["tmp_name"], $fotoNombre);
    $usuarioNuevo->setFotoDePerfil($fotoNombre);
    $bd->cargarFotoDePerfil();
  }
}
if($_FILES["foto_perfil"]["error"] != 'UPLOAD__ERR_OK') {
  echo "Hubo un error al cargar la imagen";
}
if (!$errores) {
  // actualizar el usuario
  $bd->actualizarUsuario ($_POST["nombre"], $_POST["apellido"], $_POST["email"], $_POST["fecha-de-nacimiento"], $_POST["username"]);
  //redirigir

  echo "Usuario actualizado.";exit;
  // Agregar subir foto
}
}

?>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Editar Perfil</title>
  <link href="css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="shortcut icon" type="image/png" href="imagenes/recycle-solid.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <div class="page-container">
    <div class="content-wrap">
      <?php include_once 'header.php'; ?>
      <div class="container"> <!-- Aca empieza el formulario -->
        <div class="row mt-3">
          <div class="col flexbox">
            <h1 class="text-center">Editar perfil</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-2">
            <img src="$foto" alt="">
            <?php /*if ($usuario["foto_de_perfil"]) {
              ?>
              <img src=<?=$usuario["foto_de_perfil"]?> class="usuario-imagen">
            <?php};
            else{*/
             ?>
          </div>
          <div class="col-12 col-lg-8">
            <form action="" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="nombre"> Nombre * </label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-address-card"></i>
                    </div>
                  </div>
                  <input id="nombre" name="nombre" placeholder="Introduzca su nombre" type="text" required="required" class="form-control" value="<?=$usuario['nombre']?>">
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
                  <input id="apellido" name="apellido" placeholder="Introduzca su apellido" type="text" required="required" class="form-control" value="<?=$usuario['apellido']?>">
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
                  <input id="email" name="email" placeholder="Introduzca su correo electrónico" type="email" required="required" class="form-control" value="<?=$usuario['email']?>">
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
                  <input type="file" name="foto_perfil" value="<?=$usuario['foto_de_perfil']?>">
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
                  <input placeholder="Introduzca su fecha de nacimiento" class="textbox-n form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="fecha-de-nacimiento" name="fecha-de-nacimiento" required="required" value="<?=$usuario['fecha_de_nac']?>">
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
                  <input id="username" name="username" placeholder="Cree un nombre de usuario" type="text" required="required" class="form-control" value="<?=$usuario['username']?>">
                </div>
              </div>
              <div class="form-group">
                <button name="submit" type="submit" class="btn btn-success btn-block">Guardar cambios</button>
              </div>
            </form>
          </div>
        </div> <!-- Aca termina el formulario -->
      </div>
      <?php
      include_once 'footer.php';
      ?>
    </div>
  </div>
  <?php
  require_once 'linksjs.php';
  ?>
</body>
</html>
