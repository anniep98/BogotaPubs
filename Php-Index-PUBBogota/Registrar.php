<?php 

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["email"];
$telefono=$_POST["telefono"];
$clave=$_POST["clave"];
$usuario=$_POST["usuario"];
$claveEncriptada=MD5($clave);

$host="sql312.260mb.net";
$user="n260m_24465151";
$password="1803170";
$BD="n260m_24465151_PUB";

$conn=mysqli_connect($host, $user,$password,$BD) or die("Error en conexion".mysqli_error($conn));
$consulta="INSERT INTO cliente values('$nombre','$apellido',$telefono,'$correo','$claveEncriptada',default,'$usuario')";
$sql=mysqli_query($conn,$consulta);

if($sql)
{
	header("location:menu.html");
}
else
{
    echo"error de registro";
    echo'<input onClick="javascript:window.history.back();" type="button" name="Submit" value="Atrás" class="btn btn-primary btn-lg btn-block login-button" />';
}

?>