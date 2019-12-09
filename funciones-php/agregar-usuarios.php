<?php
function insertarUsuario(PDO $db) {
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"];
  $celular = $_POST["celular"];
  $fechaDeNacimiento = $_POST["anio"] . "-" .  $_POST["mes"] . "-" . $_POST["dia"];
  $productoPreferido = $_POST["producto_preferido"];

  $query = $db->prepare("INSERT into clientes values (null, :nombre, :apellido, :email, :telefono, :celular, :fecha, :idproducto)");
  $query->bindValue(":nombre", $nombre);
  $query->bindValue(":apellido", $apellido);
  $query->bindValue(":email", $email);
  $query->bindValue(":celular", $celular);
  $query->bindValue(":fecha", $fechaDeNacimiento);
  $query->bindValue(":telefono", $telefono);
  $query->bindValue(":idproducto", $productoPreferido);
  $query->execute();
}


?>
