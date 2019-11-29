<?php 

$id=$_POST['id'];
$Producto=$_POST['nomProd'];
$precio=$_POST['precio'];
$tipo_id=$_POST['tipo_id'];
 
$host="sql312.260mb.net";
    $user="n260m_24465151";
    $password="1803170";
    $BD="n260m_24465151_PUB";
    
    $conexion=Mysqli_connect($host,$user,$password,$BD)or die("No se pudo conectar al servidor".mysqli_error($conexion));
    if($conexion){echo"";}else{echo"No hay conexion con el servidor";}
    $sql ="INSERT INTO producto VALUES($id,'$Producto',$precio,$tipo_id)";
    $sqlquery=mysqli_query($conexion,$sql);
    if($sqlquery==true){
       
       header("location:admin-agregar-productoResul.php");     
    }else{

        header("location:admin-list-producto.php");
    }

?>