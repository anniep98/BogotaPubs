<?php
  session_start();
  
  // Set session variables

  if($_POST["nombre"])
  {
    $_SESSION["nombre"] = $_POST["nombre"];
  }
  
   if(!isset($_SESSION['nombre']))
   {
        echo "No hay ninguna sesion iniciada";
        header("location:index.php");
//esto ocurre cuando la sesion caduca.
        
   }
   else
   { 
     session_destroy();
       //echo "Has cerrado la sesion";
echo "<meta content='0;URL=http://pubbogota.260mb.net/' http-equiv='REFRESH'> </meta>";   
   }
 

 
   
?>