<?php
include_once("../conexion/conexion.php");




    if(isset($_POST['login'])){
                    $objectConexion =new Conexion();
                    session_start();
                    $usuario=$_POST["usuario"];
                    $_SESSION["nombre"]=$usuario;
                    $clavev=$_POST["clave"];
                    $clave=MD5($clavev);
                    $admin='admin';
                    $claveadmin=123;
                    
                if($objectConexion->LoginValida($usuario,$clave)){

                        
                    header("location:../vista/menu2.php");

                }else if($usuario==$admin && $clavev==$claveadmin){
                    header("location:../admin/adminpage2.php");
                    }
                else{

                    setcookie('E',1);
                    header("location:../");
                }
                
        }


   

?>
