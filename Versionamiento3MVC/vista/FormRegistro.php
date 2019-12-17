<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> PUBS REGISTRO</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>
<body>
    <style>
        body {
            background-image: url(../FOTOS/pims.jpg);
            background-repeat: no-repeat;
            background-size: 100%;
            height: 100%;
            width: 100%;

        }
    .divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}
.size-form{
    
    padding:2px;
   cursor:pointer;
   
   width:400px;
   
   margin: 0 auto;
   text-align:left;

    
}
       
    </style>
    
    <form class="form-horizontal" method="POST" action="../controlador/controlador_registro.php">
<div class="container">
<br>
<div class="size-form">
<div class="card bg-light">
<article class="card-body mx-auto" style="width: 300px; height: 620px ;">
	<h4 class="card-title mt-3 text-center">Crear Cuenta</h4>
	<p class="text-center">Comienza a crear tu cuenta</p>
	
	
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="nombre" class="form-control" placeholder="Nombre" type="text">
    </div> <!-- form-group// -->

    <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="apellido" class="form-control" placeholder="Apellido" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		
    	<input name="telefono" class="form-control" placeholder="Numero Celular" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">	   
		</div>

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email " type="email">
    </div> <!-- form-group// -->
    
		
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="clave" placeholder="Crear Contraseña" type="password">
    </div> <!-- form-group// -->
    
    
    <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
             </div>
            <input name="usuario" class="form-control" placeholder="Usuario" type="text">
        </div> <!-- form-group// -->
    <div class="form-group">
        <button type="submit" name="registra" class="btn btn-primary btn-block"> Crear Cuenta  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Ya Tienes Cuenta? <a href="../index.php">Iniciar Sesión</a> </p>  
    
    

</article>
</div> <!-- card.// -->
</div>
</div> 
</form>

</body>
</html>