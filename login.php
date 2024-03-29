<!DOCTYPE html>
<?php
session_start();
//si existe el indice "usuario" como cookie
//si el usuario tiene la sesion abierta
if(isset($_COOKIE["username"]) || isset($_SESSION["user_id"])){
    header("Location:index.php");

}

$errorEmail = "";
$errorPassword = "";
$errorChequear = "";
$usuarioEscrito = "";
$loginCompleto = "";
$errores = false;

if($_POST){

	 /*traigo los usuarios de la base de datos
    $jsonLogin = file_get_contents("usuarios.json");
    lo convierto a php
    $jsonLogin = json_decode($jsonLogin, true)*/;
    if($_POST["email"] == ""){
        $errorEmail = "El email es obligatorio.";
        $errores = true;
    }else if(strlen($_POST["email"]) < 2){
        $usuarioEscrito = $_POST["email"];
        $errorEmail = "El nombre debe tener al menos dos caracteres.";
    }
    if($_POST["password"] == ""){
        $errorPassword = "La contraseña es obligatoria.";
        $usuarioEscrito = $_POST["email"];
        $errores = true;
    }
    if(!$errores){
      include 'clases/BD.php';
      include 'clases/Usuario.php';
      $bd = new BD();
      if ($bd->existeUsuario($_POST["email"])) {
        $usuarioId = $bd->existeUsuario($_POST["email"]);
        $usuarioLoguearse = $bd->traerUsuario($usuarioId);
        /*var_dump($usuarioLoguearse["password"]);
        var_dump($_POST["password"]);*/
        /*if (password_verify($_POST["password"], $usuarioLoguearse["password"])) {
          echo "Login completo";
          var_dump($usuarioLoguearse);
          exit;
        }*/
        if ($_POST["password"] == $usuarioLoguearse["password"]) {
          $loginCompleto = "Login completo";
          $_SESSION["user_id"] = $usuarioId;
        }
        else {
          $errorChequear = "El usuario y/o la contraseña son invalidos";
        }
      }

      /*
   		los recorro
    	foreach($jsonLogin as $usuario) {
      		pregunto si machea el email
    		if($usuario["email"]==$_POST["email"]) {
        		pregunto si machea la contraseña
        		if( password_verify($_POST["password"],$usuario["password"])){
               le doy la bienvenida
    						header("Location:index.php");
                //echo "<img src='".$usuario["avatar"]."'>";
                exit;
            }
        }
    }*/}
        elseif (!$errores){
        $errorChequear = "El usuario y/o la contraseña son invalidos";
        $usuarioEscrito = $_POST["email"];
      }

    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="imagenes/recycle-solid.png">

  <title> Inicie sesión en Ecopreguntas </title>
  <link href="css/styles.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
  <div class="page-container">
    <div class="content-wrap">
      <?php
      include("header.php");
      if($loginCompleto != ""){
        ?>
        <h3 class="text-center"><?= $loginCompleto ?></h3> 
        <?php exit;
      }
      ?>
      <div class="container-fluid"> <!-- Aca empieza el formulario -->
        <div class="row mt-3">
          <div class="col-12 col-lg-4 offset-lg-4 flexbox">
            <h1 class="text-center">Inicia sesión</h1>
            <p> ¿No tenes cuenta? <a href="registro.php">Registrate aca </a></p>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-4 offset-lg-4">
            <form method="POST">
              <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-at"></i>
                    </div>
                  </div>
                  <input id="email" name="email" placeholder="Ingrese su correo electrónico" type="email" class="form-control" value="<?=$usuarioEscrito?>">
                </div>
                <span style="color:red;"><?=$errorEmail?></span>
              </div>
              <div class="form-group">
                <label for="contraseña">Contraseña</label> <span> <a href="olvido-password.php">¿Olvidó su contraseña?</a></span>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-lock"></i>
                    </div>
                  </div>
                  <input id="password" name="password" placeholder="Ingrese su contraseña" type="password" class="form-control">
                </div>
                <p style="color:red;"><?=$errorPassword?></p>
              </div>
              <div class="form-group">
                <input name="recordarme" type="checkbox"> <span> Recordarme </span>
              </div>
              <div class="form-group">
                <button name="submit" type="submit" class="btn btn-success btn-lg btn-block">Iniciar sesion </button>
                <p><?=$errorChequear?></p>
              </div>
            </form>
          </div>
        </div> <!-- Aca termina el formulario -->
        <div class="row fixed-bottom d-none">
          <div class="col" style="width: 100%; height: 100px; background-color: green;"> <!-- Aca va el footer--> </div>
        </div>
      </div>
      <?php
      require_once 'footer.php';
      ?>
    </div>
  </div>
  <?php
  require_once 'linksjs.php';
  ?>
</body>
</html>
