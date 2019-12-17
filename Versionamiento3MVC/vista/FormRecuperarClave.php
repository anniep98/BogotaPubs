<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>RECUPERAR CLAVE</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>

<div class="container">
	<div class="row">
	
        <div class="col-md-6 col-md-offset-3">
  <h4 style="border-bottom: 1px solid #c5c5c5;">
    <i class="glyphicon glyphicon-user">
    </i>
    Cuenta de Acceso
     <br>
      Olvidaste tu contraseña?
    </h4>
    <form action="../controlador/controladorRecuperar.php" accept-charset="UTF-8" role="form" id="login-recordar" method="post" >
      <fieldset>
        <span class="help-block">
      
         Digite la dirección de correo electrónico que utiliza para iniciar sesión en su cuenta

          <br>
          A su correo se le enviará una nueva clave con la que podrá ingresar al sistema.
        </span>
        <div class="form-group input-group">
          <span class="input-group-addon">
            @
          </span>
          <input class="form-control" type="text" name="usuario" placeholder="ingrese su nombre o usario">
          <input class="form-control" placeholder="Email" name="email" type="email" required="">
        </div>
        <button type="submit" name="recupera" class="btn btn-primary btn-block" id="btn-olvidado">
          ENVIAR
        </button>
        <p class="help-block">
          <a class="text-muted" href="../index.php" id="acceso"><small> Regresar a login</small></a>
        </p>
      </fieldset>
    </form>
  </div>
</div>

	</div>
</div>
</div>
</body>
</html>