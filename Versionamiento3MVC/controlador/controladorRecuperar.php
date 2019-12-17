<?php
include_once("../dao/envio.php");
/*$usuario=$_POST['usuario'];
$correo=$_POST['email'];

$length = 10;
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(3, $charactersLength - 5)];
        }
echo"holi ".$usuario." ".$correo."<br>".$randomString;*/
if(isset($_POST['recupera'])){
    $length = 10;
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(3, $charactersLength - 5)];
        }
       
        
$usuario=$_POST['usuario'];
$correo=$_POST['email'];

$objetoRecupera = new Recuperar();

if($objetoRecupera->recupera($usuario,$correo,$randomString)){
           
  $objetoRecupera->editaCorreo($usuario,$correo,$randomString);
  
    echo"<script>alert('contraseña enviada el correo, porfavor ingrese con la nueva contraseña');
         window.location= '../index.php';</script>"; 
    //header("Location:../index.php");
              
}else{

    echo "<script>
    alert('Mensaje de recuperacion de contraseña no enviado');
    window.location= '../index.php';
</script>";           
}
}

?>