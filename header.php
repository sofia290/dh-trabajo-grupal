<div class="container-fluid">
  <div class="row" id="menu">
    <div class="col">
      <header>
        <nav>
          <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="preguntas.php">FAQs</a></li>
            <li><a href="registro.php"> Registrate </a></li>
            <li><a href="login.php"> Inicia sesión </a></li>
          </ul>
        </nav>
      </header>
    </div>
  </div>
</div>

<?php
  /*if(isset(!$_SESSION["usuario"])){
    ?>
    <li><a href="registro.php"> Registrate </a></li>
    <li><a href="registro.php"> Inicia sesión </a></li>
  <?php 
  if(isset($_SESSION["usuario"])){
    ?>
    <li> <?= $_SESSION["usuario"] ?> </li>
    <?php
} */
?>