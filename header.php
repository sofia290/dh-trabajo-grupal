<div class="container-fluid">
  <div class="row" id="menu">
    <div class="col">
      <header>
        <nav>
          <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="preguntas.php">FAQs</a></li>
            <?php
            if(isset($_SESSION["user_id"])==null){
              ?>
              <li><a href="registro.php"> Registrate </a></li>
              <li><a href="login.php"> Inicia sesión </a></li>
              <?php
            };
            if(isset($_SESSION["user_id"])){
              //$username = $BD->mostrarUsername($_SESSION["user_id"]);
              ?>
              <li><a href="logout.php"> Cerrar sesion </a></li>
              <li>  </li>
              <?php
            }
            ?>
          </ul>
        </nav>
      </header>
    </div>
  </div>
</div>
