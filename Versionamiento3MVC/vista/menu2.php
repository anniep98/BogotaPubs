
<?php
session_start();
$_SESSION["nombre"];


if($_SESSION['nombre']==null || $_SESSION['nombre']==''){
header('location:../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>menu</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<style >
    body {
    
    font-family: "Homer Simpson", cursive;
    font-size: 100%;
}


/*---navbar---*/

.navbar {
    background: transparent;
}
.navbar-shrink{
    padding-top: 0;
    padding-bottom: 0;
}
.navbar-brand {
    font-size: 2em;
    font-weight: bolder;
}



.navbar a:not(.navbar-brand) {
    font-weight: bolder;
    font-size: 1.4em;
    color: #ffffff !important;
}
.navbar a:not(.navbar-brand):hover{
    color:red !important;
}

header.masthead {
    position: relative;
    background-color: #343a40;
    height: 100vh;
    background: url(../FOTOS/amigos.jpg) no-repeat fixed center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    padding-top: 8rem;
    padding-bottom: 8rem;
}

header.masthead .overlay {
    position: absolute;
    background-color: #212529;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    opacity: .3
}

header.masthead h1 {
    font-size: 2rem
}

@media (min-width:768px) {
    header.masthead {
        padding-top: 12rem;
        padding-bottom: 12rem
    }
    header.masthead h1 {
        font-size: 4rem;
        font-weight:bold;
    }
}

.my-padding {
    padding-top: 8rem;
    padding-bottom: 8rem;
}

.form-row>.col,
.form-row>[class*=col-] {
    padding-right: 0;
    padding-left: 0;
}


/*---gallery---*/

#photos {
    padding-top: 5rem;
    padding-bottom: 5rem;
    background-color: black;
}

#photos img {
    width: 100%;
    height: 15em;
    border-radius: 0.8em;
    transition: transform 2s ease-in-out;
}

#photos img:hover {
    opacity: 0.8;
    transform: scale(1.15);
}

#photos h2 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-top: 0.15em solid black;
    border-bottom: 0.15em solid black;
    color: red;
    display: none;
}

#photos .col-lg-4:hover h2 {
    display: block;
}

.portfolio-item {
    position: relative;
    margin-bottom: 2rem;
}

img.img-fluid.rounded-circle.mb-3 {
    height: 192px;
    width: 192px;
    object-fit: cover;
}
.featherlight .featherlight-image{
    width:600px;
    height:400px;
}

/*-----parallax-----*/
.color {
    text-align: center!important;
    color:#ffbf0bf0;
}
.mybg {
    position: relative;
    background: linear-gradient(to right, rgba(255, 255, 255, 0.7686274509803922), rgba(255, 255, 255, 0.7686274509803922)), url(https://images.pexels.com/photos/5317/food-salad-restaurant-person.jpg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260) no-repeat center center fixed;
    background-size: cover;
}

.call-to-action {
    position: relative;
    background-color: #1c1c1c;
    padding-top: 7rem;
    padding-bottom: 7rem
}

.call-to-action .overlay {
    position: absolute;
    background-color: #212529;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    opacity: .3
}

footer.footer {
    padding-top: 4rem;
    padding-bottom: 4rem
}

.myhr {
    border-top: 1px solid rgba(255, 255, 255, 0.1) !important;
}

.myform {
    border-radius: 0px !important;
}

.mybtn {
    border-radius: 0px !important;
}

.txt-upper {
    text-transform: uppercase;
}

.mybg-dark {
    background: #000000 !important;
}

.order-now a {
    background: #fff;
    border: 3px solid black;
    padding: 6px 15px;
    font-size: 1.5em;
    font-weight: bold;
    color: #0056b3;
    text-decoration: none;
    opacity: 0.6;
}

.order-now a:hover {
    background: red;
    color:#fff;
    opacity: 1;
}

.myfont-color {
    color: #979797 !important;
}


/*----testimonials----*/

.testimonials {
    padding-top: 7rem;
    padding-bottom: 7rem
}

.testimonials .testimonial-item {
    max-width: 18rem
}

.testimonials .testimonial-item img {
    max-width: 12rem;
    box-shadow: 0 5px 5px 0 #adb5bd
}


/* Footer */

section {
    padding: 60px 0 18px;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#footer {
    background: #232323 !important;
}

#footer h5 {
    padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color: #ffffff;
}

#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}

#footer ul.social li {
    padding: 3px 0;
}

#footer ul.social li a i {
    margin-right: 5px;
    font-size: 25px;
    -webkit-transition: .5s all ease;
    -moz-transition: .5s all ease;
    transition: .5s all ease;
}

#footer ul.social li:hover a i {
    font-size: 30px;
    margin-top: -10px;
}

#footer ul.social li a,
#footer ul.quick-links li a {
    color: #979797;
}

#footer ul.quick-links li a:hover {
    color: #fff;
}

#footer ul.social li a:hover {
    color: #eeeeee;
}

#footer ul.quick-links li {
    padding: 3px 0;
    -webkit-transition: .5s all ease;
    -moz-transition: .5s all ease;
    transition: .5s all ease;
}

#footer ul.quick-links li:hover {
    padding: 3px 0;
    margin-left: 5px;
    font-weight: 700;
}

#footer ul.quick-links li a i {
    margin-right: 5px;
}

#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px) {
    #footer h5 {
        padding-left: 0;
        border-left: transparent;
        padding-bottom: 0px;
        margin-bottom: 10px;
    }
}


/*-----scroll-top-----*/

.scroll-top-wrapper {
    position: fixed;
    opacity: 0;
    visibility: hidden;
    overflow: hidden;
    text-align: center;
    z-index: 99999999;
    background-color: #777777;
    color: #eeeeee;
    width: 50px;
    height: 48px;
    line-height: 48px;
    right: 30px;
    bottom: 30px;
    padding-top: 2px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
    border-bottom-left-radius: 10px;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}

.scroll-top-wrapper:hover {
    background-color: #888888;
}

.scroll-top-wrapper.show {
    visibility: visible;
    cursor: pointer;
    opacity: 1.0;
}

.scroll-top-wrapper i.fa {
    line-height: inherit;
}
</style>

 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
<link href="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css" type="text/css" rel="stylesheet" />
<script src="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

<body>
   

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark  fixed-top">
        <div class="container">
            
            <a class="nav-link" href="../dao/cerrar.php">CERRAR SESION</a>
            <h3><?php echo $_SESSION['nombre'];?></h3>
            
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href='#comidas'comidas>COMIDAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=#bebidas>BEBIDAS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=#eventos>EVENTOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=#reservas>RESERVAS</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto mt-5">
                    <h1 class="mb-5">PUBS BOGOT&#193</h1>
                </div>
                <div class="col-xl-12 mx-auto order-now my-padding">
                    <a href="#">Order Now!</a>
                </div>
            </div>
        </div>
    </header>

    <!--Gallery-->
    <section id="photos">
        <a name=comidas><h1 class="mb-5 text-center color" >COMIDAS</h1></a>
        <div class="container">
            <div class="row">
                

                   <div class="col-lg-4 col-sm-6 portfolio-item">

                    <img class="card-img-top" class="alert alert-info" src="../FOTOS/winshd.jpg" alt="" role="alert">
                    <div class="alert alert color" role="alert">
                  ALITAS X8<br>
                  PRECIO=15K
                    </div>
                    <a href="#" data-featherlight="../FOTOS/winshd.jpg"><h2>Alitas</h2></a>

                   </div>
                
                <div class="col-lg-4 col-sm-6 portfolio-item">

                    <img class="card-img-top" src="../FOTOS/Hamb.jpg" alt="">
                    <div class="alert alert color" role="alert">
                  Hamburguesa 2 carnes<br>
                  PRECIO=13k
                    </div>
                    <a href="#" data-featherlight="../FOTOS/Hamb.jpg"><h2>Hamburguesa</h2></a>

                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">

                    <img class="card-img-top" src="../FOTOS/empanada.jpg" alt="">
                    <div class="alert alert color" role="alert">
                  Empanadas c/u  <br>
                  PRECIO=2K
                    </div>
                    <a href="#" data-featherlight="../FOTOS/empanada.jpg"><h2>Empanadas</h2></a>

                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">

                    <img class="card-img-top" src="../FOTOS/SALCHIPA.jpg" alt="">
                    <div class="alert alert color" role="alert">
                  Salchipapas<br>
                  PRECIO=6.5k
                    </div>
                    <a href="#" data-featherlight="../FOTOS/SALCHIPA.jpg"><h2>Salchipapas</h2></a>

                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">

                    <img class="card-img-top" src="../FOTOS/nachos.jpg" alt="">
                    <div class="alert alert color" role="alert">
                  Nachos<br>
                  PRECIO=7K
                    </div>
                    <a href="#" data-featherlight="../FOTOS/nachos.jpg"><h2>Nachos</h2></a>

                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">

                    <img class="card-img-top" src="../FOTOS/costilla.jpg" alt="">
                    <div class="alert alert color" role="alert">
                  Costillitas BBQ<br>
                  PRECIO=22K
                    </div>
                    <a href="#" data-featherlight="../FOTOS/costilla.jpg"><h2>Costillitas BBQ</h2></a>

                </div>

            </div>
        </div>
    </section>
    <!--gallery end-->

    <!--galleria start-->
    <section id="photos">
        <a name=bebidas><h1 class="mb-5 text-center color" >BEBIDAS</h1></a>
        <div class="container">
            <div class="row">
                

                   <div class="col-lg-4 col-sm-6 portfolio-item">

                    <img class="card-img-top" class="alert alert-info" src="../FOTOS/corona.jpg" alt="">
                    <div class="alert alert color" role="alert">
                  Corona <br>
                  PRECIO=5K
                    </div>
                    <a href="#" data-featherlight="../FOTOS/corona.jpg"><h2> CORONA</h2></a>
                   </div>
                
                <div class="col-lg-4 col-sm-6 portfolio-item">

                    <img class="card-img-top " src="../FOTOS/clubcolombia.jpg" alt="">
                    <div class="alert alert color" role="alert">
                  Club Colobia: Dorada, Roja, Negra <br>
                  PRECIO=5K
                    </div>
                    <a href="#" data-featherlight="../FOTOS/clubcolombia.jpg"><h2>Club Colombia</h2></a>

                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">

                    <img class="card-img-top" src="../FOTOS/heineken.jpg" alt="">
                    <div class="alert alert color" role="alert">
                  Heineken<br>
                  PRECIO=5K
                    </div>
                    <a href="#" data-featherlight="../FOTOS/heineken.jpg"><h2>Heineken</h2></a>

                </div>
                <div class="col-lg-4 col-sm-6 portfolio-item">

                    <img class="card-img-top" src="../FOTOS/budweiser.gif" alt="">
                    <div class="alert alert color" role="alert">
                  Budweiser<br>
                  PRECIO=5K
                    </div>
                    <a href="#" data-featherlight="../FOTOS/budweiser.gif"><h2>Budweiser</h2></a>

                </div>

                <div class="col-lg-4 col-sm-6 portfolio-item">

                    <img class="card-img-top" src="../FOTOS/poker.jpg" alt="">
                    <div class="alert alert color" role="alert">
                  Poker<br>
                  PRECIO=3K
                    </div>
                    <a href="#" data-featherlight="../FOTOS/poker.jpg"><h2>Poker</h2></a>

                </div>

                <div class="col-lg-4 col-sm-6 portfolio-item">

                    <img class="card-img-top" src="../FOTOS/andina.jpg" alt="">
                    <div class="alert alert color" role="alert">
                  Andina<br>
                  PRECIO=3K
                    </div>
                    <a href="#" data-featherlight="../FOTOS/andina.jpg"><h2>Andina</h2></a>

                </div>
                
                
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center mybg">
        <div class="container">
            <h2 class="mb-5">EVENTOS</h2>
            <a name=eventos><h1 class="mb-5 text-center color" ></h1></a>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="../FOTOS/bandarock.jpg" alt="">
                        <h5>NOCHE DE ROCK .</h5>
                        <p class="font-weight-dark mb-0">"Satelite 3 rock en vivo 3 de Octubre"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="../FOTOS/comediantes.jpg" alt="">
                        <h5>NOCHE DE COMEDIANTES</h5>
                        <p class="font-weight-dark mb-0">"Personajes como Camilo y Franco bonilla estaran presentandose 10 de Octubre  "</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="../FOTOS/jazz.jpg" alt="">
                        <h5> NOCHE DE JAZZ    .</h5>
                        <p class="font-weight-dark mb-0">"YASSER TEJEDA EN VIVO 6 DE NOVIEMBRE"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
        <a name=reservas><h1 class="mb-5 text-center color" >RESERVAS</h1></a>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">Estas interesado?</h2>
                    <h2 class="mb-4">Haz click y reserva una mesa</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        
                        <div class="form-row ">
                            
                            <div class="col-12 col-md-3 ">
                              <center>  <button type="submit" class="btn mybtn btn-block btn-lg btn-danger">Reserva</button></center>
                            </div>
                            
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row text-xs-center text-sm-left text-md-left mb-5">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <h5 class="txt-upper">ACERCA DE NOSOTROS</h5>
                    <p class="myfont-color text-justify">Lorem ipsum dolor sit amet! Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
                    <p class="myfont-color">SIGUENOS:</p>
                    <ul class="list-unstyled list-inline social">
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 myfont-color">
                    <h5 class="txt-upper">HORARIOS</h5>
                    <p> TARDE:
                        <br> Lun-Vier: 11:30 AM - 2:30 PM
                        <br>
                        <br> NOCHE

                        <br> Lun-Jue: 4:45 PM - 10:30 PM
                        <br> Vier: 4:45 PM - 11 PM
                        <br> Sab: 4:30 PM - 11 PM
                        <br> Dom: 5:00 PM - 10:30 PM
                        <p>

                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <h5 class="txt-upper">Menus</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="javascript:void();">Alitas</a></li>
                        <li><a href="javascript:void();">Hamburguesas</a></li>
                        <li><a href="javascript:void();">Nachos</a></li>
                        <li><a href="javascript:void();">Empanadas</a></li>
                        <li><a href="javascript:void();">Papitas chips</a></li>
                        <li><a href="javascript:void();">Pasta</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <h5 class="txt-upper">Links</h5>
                    <ul class="list-unstyled quick-links">
                               <li><a href="javascript:void();">Home</a></li>
                        <li><a href="javascript:void();">Acerca de</a></li>
                        <li><a href="javascript:void();">Eventos</a></li>
                        <li><a href="javascript:void();">Contactenos</a></li>

                    </ul>
                </div>
            </div>
            <hr class="myhr">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2  text-white">

                    <p class="h6">Copyright © All Rights Reserved.<a class="text-green ml-2" href="#" target="_blank">PUBS BOGOTA</a></p>
                </div>
                <hr>
            </div>
        </div>
    </section>
    <!--Footer -->

    <div class="scroll-top-wrapper ">
        <span class="scroll-top-inner">
    <i class="fa fa-2x fa-arrow-circle-up"></i>
  </span>
    </div>
</body>
</html>