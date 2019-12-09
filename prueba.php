<?php
session_start();
//si existe el indice "usuario" como cookie
//si el usuario tiene la sesion abierta

if($_POST){
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
  if(isset($_COOKIE["usuario"]) || isset($_SESSION["usuario"])){
    header("Location: index.php");
    exit;

    //var_dump($_FILES);

    if(!$errores){
      include 'clases/BD.php';
      include_once 'clases/Usuario.php';
      $bd = new BD();
      $usuarioNuevo = new Usuario();
      exit;
      /*$name = $_FILES['foto_perfil']['name'];
      $ext = pathinfo($name, PATHINFO_EXTENSION);
      //creo un usuario como objeto
      $password = password_hash($_POST["password"],PASSWORD_DEFAULT);

      $nuevoUsuario = new Usuario($_POST["nombre"], $_POST["apellido"], $_POST["email"], $password, $_POST["fecha-de-nacimiento"]);

      // si tiene foto de perfil
      if(isset($_FILES['foto_perfil']['name'])){
      $nuevoUsuario->setFotoDePerfil() = "avatars/". $_POST["email"]. "." . $ext;
    }
    $nuevoUsuario = [
    "nombre" => $_POST["nombre"],
    "apellido"=>$_POST["apellido"],
    "email" => $_POST["email"],
    "avatar" => "avatars/". $_POST["email"]. "." . $ext,
    "fecha-de-nacimiento" =>$_POST["fecha-de-nacimiento"],
    "username"=>$_POST["username"],
    "password" => password_hash($_POST["password"],PASSWORD_DEFAULT)
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
  move_uploaded_file($_FILES["foto_perfil"]["tmp_name"], "avatars/".$_POST["email"].".".$ext);
  */
}



} ?>
