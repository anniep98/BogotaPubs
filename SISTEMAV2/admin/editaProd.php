<?php 
$id=$_GET['id'];
$doc=$_POST['doc'];
$nom1=$_POST['nom1'];
$nom2=$_POST['nom2'];
$ape1=$_POST['ape1'];
$ape2=$_POST['ape2'];
$tel=$_POST['tel'];
$clav=$_POST['clav'];
$correo=$_POST['correo'];
$id_tipo=$_POST['id_tipo'];
$cargo=$_POST['cargo'];
 
$host="sql312.260mb.net";
    $user="n260m_24465151";
    $password="1803170";
    $BD="n260m_24465151_PUB";
    
    $conexion=Mysqli_connect($host,$user,$password,$BD)or die("No se pudo conectar al servidor".mysqli_error($conexion));
    if($conexion){echo"";}else{echo"No hay conexion con el servidor";}
    $sql ="UPDATE Empleado SET DOC=$doc,
                                nom_usu='$nom1',
                                nom2_usu='$nom2',
                                ape_usu='$ape1',
                                ape2_usu='$ape2',
                                tel_usu=$tel,
                                 clave='$clav',
                                 correo_usu='$correo',
                                 usu_id=$id_tipo,cargo='$cargo' WHERE DOC =$id";
    $sqlquery=mysqli_query($conexion,$sql);
    if($sqlquery==true){
       
       header("location:admin-list.php");     
    }else{

        header("location:admin-list.php");
    }

?>