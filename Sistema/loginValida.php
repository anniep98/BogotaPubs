<?PHP
    session_start();
  
  // Set session variables
  $nombre=$_POST["nombre"];
   $_SESSION["nombre"]=$nombre;
    
    $clave=$_POST["clave"];

    $claveEncriptada=MD5($clave);
    $host="sql312.260mb.net";
    $user="n260m_24465151";
    $password="1803170";
    $BD="n260m_24465151_PUB";
    $admin="admin";
    $claveadmin="123";
    $conexion=Mysqli_connect($host,$user,$password,$BD)or die("No se pudo conectar al servidor".mysqli_error($conexion));
    if($conexion){echo"";}else{echo"No hay conexion con el servidor";}



    $usuario="SELECT * FROM cliente WHERE nom_cliente='$nombre' AND clave='$claveEncriptada'";
    
            $query1=mysqli_query($conexion,$usuario);

            $count = mysqli_num_rows($query1);
            

             if($nombre==$admin && $clave==$claveadmin){
             header("location:admin/adminpage2.html");
            }
            else if($count == 1) { 
                        
                header("location:menu2.php");

            }else
            { 
                setcookie('E',1);
                header("location:index.php");
                
                
            
            }
   
   
  
 
   echo "Bienvenido Usuario: " . $_SESSION["nombre"];
   echo "<a href='cerrar.php'>  Cerrar sesion</a>";
 
   

?>
