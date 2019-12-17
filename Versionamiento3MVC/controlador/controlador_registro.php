<?php
include_once("../modelo/cliente.php");
include_once("../dao/DAOregistro.php");
session_start();
    $_SESSION['nombre']=$_POST['usuario'];
$clavev=$_POST["clave"];



if(!!isset($_POST['registra'])){
    
    
    $c= new  Cliente();    
    $c->nom_cliente=$_POST["nombre"];
    $c->ape_cliente=$_POST["apellido"];
    $c->correo=$_POST["email"];
    $c->telefono=$_POST["telefono"];
    $c->clave=MD5($clavev); 
    $c->usuario=$_POST["usuario"];
    
    $objetoDAOregistro = new DAOregistro(); 
    $objetoDAOregistro->ingresarCliente($c);
    
	header("Location:../vista/menu2.php");
}else
{
    echo"<script>
    alert ('NO SE PUDO REGISTRAR INTENTELO DE NUEVO');
    window.location='../vista/FormRegistro.php';      
    </script>";
    }
?>