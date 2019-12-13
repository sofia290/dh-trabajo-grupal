<div class="container-fluid">
  <div class="row">
    <div class="col">
      <header>
        <nav class="navbar navbar-expand-lg navbar-light" id="menu">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php"> Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="preguntas.php"> Preguntas frequentes </a>
              </li>
            </ul>
            <ul class="navbar-nav ml-md-auto">
              <?php
              if(!isset($_SESSION["user_id"])){
                ?>
                <!-- Button trigger modal -->
                <li id="boton-registro"><a href="registro.php" role="button" class="btn btn-success">Registrarse</a>
                </li>
                <li id="boton-login"><a href="login.php" role="button" class="btn btn-success ml-3">Iniciar sesión </a>
                </li>

                <?php
              };
              if(isset($_SESSION["user_id"])){
                $username = $bd->mostrarUsername($_SESSION["user_id"]);
                ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="user" data-toggle="dropdown"><i class="fa fa-user-circle"></i> <?= $username  ?> </a>
                  <div class="dropdown-menu dropdown-menu-lg-left"  aria-labelledby="user">
                    <a class="dropdown-item" href="perfil.php">Mi cuenta</a>
                    <a class="dropdown-item" href="editarPerfil.php"> Editar perfil </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php"> Cerrar sesión </a>
                  </div>
                </li>
                <?php
              };
              ?>
            </ul>
          </div>
        </nav>
      </header>
    </div>
  </div>
</div>
