<?php 
$docu=$_GET['dato'];

    $host="sql312.260mb.net";
    $user="n260m_24465151";
    $password="1803170";
    $BD="n260m_24465151_PUB";
    
    $conexion=Mysqli_connect($host,$user,$password,$BD)or die("No se pudo conectar al servidor".mysqli_error($conexion));
    if($conexion){echo"";}else{echo"No hay conexion con el servidor";}
    $sql ="DELETE FROM Empleado WHERE DOC =$docu";

    $sqlquery=mysqli_query($conexion,$sql);

    if($sqlquery==true){
      
     header("location:admin-result.php");
    }else{

        header("location:admin-list.php");
    }

    


?>