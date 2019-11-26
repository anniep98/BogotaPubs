
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Login Inicio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        /*@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");*/
.login-block{
background-image: url('FOTOS/loginFondo.jpg');    
background-size:contain;
background-position: center center;
background-attachment: fixed;

/*background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);   Chrome 10-25, Safari 5.1-6 */
/*background: linear-gradient(to bottom, #FFB88C, #DE6262);  W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ 
float:left;*/
width:100%;

padding : 100px 0;
}
.banner-sec{background:fondo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:rgba(255, 242, 242, 0.794); border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#4d472fc4;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: rgb(112, 29, 29);}
.login-sec h2:after{content:" "; width:100px; height:5px; background:rgb(105, 13, 0); display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background:  rgb(48, 29, 29); color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff; font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"}
.container-fotos{widows: 100%;  flex-wrap:wrap}
.fotos{width:50%; height:200%; object-fit: cover; }
#resultado{color:red; font-family: Charcoal, sans-serif;}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
</head>
<body>
    
   

<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Iniciar sesión</h2>
            
<form action="loginValida.php" method="POST" class="login-form">
     <div class="form-group">
                    <label for="exampleInputEmail1" class="text-uppercase">Usuario</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Usario o correo electronico">
                    
        </div>
        <div  class="form-group">
                    <label for="exampleInputPassword1" class="text-uppercase">Contraseña</label>
                    <input type="password" class="form-control" id="clave" name="clave" placeholder="Password">
        </div>

        <div class="form-group">
                    
  </div>
               <?php 
                    
                if($_COOKIE["E"])
                {
                    echo'<div id="resultado"> Error de usuario o contraseña <br> Por favor intente de nuevo.</div>';
                }
                
                ?>


        <div class="form-check">
                <label class="form-check-label">
                <button type="submit" class="btn btn-login float">INICIAR SESIÓN</button>
                
            </form>
             <br><br>
	        <i ></i> ¿No tienes cuenta aún? <a href='registro.html'>Regístrate</a><br>
                	
                    <i ></i> ¿Se te olvidó tu contraseña? <a href='recuperarclave.php'> Recuperar</a>
                    
              
                </div>



<div class="copy-text">Creado  <i class="fa fa-heart"></i> por<a href="#"> Ana Maria Pedraza y Miguel Bautista</a></div>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" class="container-fotos" src="FOTOS/BEER.jpg" alt="First slide" >
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>PUBS Bogotá</h2>
            <p>BIENVENIDOS A PUBS BOGOTÁ, UN LUGAR DONDE PODRÁS ENCONTRAR LOS MEJORES PRODUCTOS EN COMIDAS Y CERVEZAS</p>
        </div>	
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" class="container-fotos" src="FOTOS/bupfood.jpg"  alt="First slide"   >
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>PUBS Bogotá</h2>
            <p>REGISTRATE PARA MÁS INFORMACIÓN</p>
        </div>	
    </div>
 </div>
                 <div class="carousel-item">
                            <img class="d-block img-fluid" class="container-fotos" src="FOTOS/met.jpg" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <div class="banner-text" >
                                    <h2>PUBS Bogota</h2>
                                    <p>VEN Y CONOCE  NUESTRO PUB TE ENCANTARÁ </p>
                        </div>	
                    </div>
                </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>	
																			                            
<script type="text/javascript">

</script>
</body>
</html>
