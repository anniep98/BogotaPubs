<?php 
$docu=$_GET['valor1'];
echo $docu;
$DOC=$_POST['doc'];
$NOMBRE1=$_POST['nom1'];
$NOMBRE2=$_POST['nom2'];
$APELLIDO1=$_POST['ape1'];
$APELLIDO2=$_POST['ape2'];
$TEL=$_POST['tel'];
$CLAVE=$_POST['clave'];
$CORREO=$_POST['correo'];
$IDCARGO=$_POST['idCargo'];
$CARGO=$_POST['cargo'];
   
 $host="sql312.260mb.net";
    $user="n260m_24465151";
    $password="1803170";
    $BD="n260m_24465151_PUB";
    
    $conexion=Mysqli_connect($host,$user,$password,$BD)or die("No se pudo conectar al servidor".mysqli_error($conexion));
    if($conexion){echo"";}else{echo"No hay conexion con el servidor";}
    $sql ="UPDATE  Empleado SET DOC=$DOC,
                               nom_usu='$NOMBRE1',
                               nom2_usu='$NOMBRE2',
                               ape_usu='$APELLIDO1',
                               ape2_usu='$APELLIDO2',
                               tel_usu=$TEL,
                               clave='$CLAVE',
                               correo_usu='$CORREO',
                               usu_id=$IDCARGO,
                               cargo='$CARGO' WHERE DOC= $docu";
    $sqlquery=mysqli_query($conexion,$sql);
 
    if($sqlquery==true){
      
     header('location:admin-result.php');
    }else{
        header('location:admin-list.php');
         
    }

?>