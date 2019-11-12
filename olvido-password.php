<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> ¿Olvido su contraseña? </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row"  id="menu">
			<div class="col">
        <header>
            </div>
            <nav>
                  <ul>
                    <li><a href="index.html">home</a></li>
                    <li><a href="preguntas.html">Preguntas frecuentes</a></li>
                    <li><a href="registro.html">Registrate </a></li>
                    <li><a href="login.html"> Inicia sesión </a></li>
                  </ul>
              </nav>
      </header>
    </div>
		</div>
	</div>
	<div class="container-fluid"> <!-- Aca empieza el formulario -->
		<div class="row mt-3">
			<div class="col-12 col-lg-4 offset-lg-4 flexbox">
				<h1 class="text-center">Recuperar cuenta</h1>
				<p class="text-center">Conteste la pregunta de respaldo</p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-8 offset-md-2 col-lg-4 offset-lg-4">
				<form>
				  <div class="form-group">
				    <label for="email"> Pregunta </label>
				    <div class="input-group">
				      <div class="input-group-prepend">
				        <div class="input-group-text">
				          <i class="fa fa-question-circle"></i>
				        </div>
				      </div>
				      <input id="question" name="question" placeholder="Ingrese su respuesta" type="text" required="required" class="form-control">
				    </div>
				  </div>
				  <div class="form-group">
				    <button name="submit" type="submit" class="btn btn-success btn-lg btn-block"> Recuperar cuenta </button>
				  </div>
				</form>
			</div>
		</div> <!-- Aca termina el formulario -->
		<div class="row fixed-bottom d-none">
			<div class="col" style="width: 100%; height: 100px; background-color: green;"> <!-- Aca va el footer--> </div>
		</div>
	</div>
	<footer >
  <form class="row" action="index.html" method="post">
  <div class="offset-md-4 col-md-4 offset-sm-2 col-sm-8" >
   <p id="textform">¿Quieres hacernos una consulta? <br> ¿Pasabas por aquí y te apetece saludar?¡Pues no te cortes! Mándanos un correo y te responderé a la velocidad del rayo!  </p>
   <input type="text" name="nombre" placeholder="Nombre" value=""  required>
   <input type="text" name="correo" placeholder="Correo" value="" required>
   <textarea name="mensaje" placeholder="Escriba aquí su mensaje" required></textarea>
   <input type="button"  value="Enviar" id="boton">
    </div>
  </form>
  </footer>
</body>
</html>
