<?php



   class conexion{
  
    private $conn;
    private $lista;
    private $agrega;
    private $modifica;
    private $elimina;
    private $host="sql312.260mb.net";
    private $user="n260m_24465151";
    private $password="1803170";
    private $BD="n260m_24465151_PUB";

    public function connecta(){
    
    $this->conn= mysqli_connect($this->host,$this->user,$this->password,$this->BD)or die
    ("No se pudo conectar al servidor".mysqli_error($conexion));
    if($conexion){echo"";}else{echo"error de conexion llave";}

         return $this->conn;
    }


    public function listar(){

       $sql="SELECT * FROM Empleado";
       $this->lista=mysqli_query($this->conn,$sql);
       return $this->lista;

    }

     public function agregar($doc,$nom1,$nom2,$ape1,$ape2,$tel,$clave,$correo,$tip_empleado,$cargo){

        $sql = "INSERT INTO Empleado VALUES($dod,$nom1,$nom2,$ape1,$ape2,$tel,$clave,$correo,$tip_empleado,$cargo)";
        $this->agrega=mysqli_query($this->conn,$sql);
        return $this->agrega;

     }

     public function modificar($doc,$nom1,$nom2,$ape1,$ape2,$tel,$clave,$correo,$id_tipo,$cargo){
         $sql ="UPDATE Empleado set
                                DOC =$doc ,
                                nom_usu='$nom1',
                                nom2_usu='$nom2',
                                ape_usu='$ape1',
                                ape2_usu='$ape2',
                                tel_usu=$tel,
                                clave='$clave',
                                correo_usu='$correo',
                                usu_id=$id_tipo,
                                cargo='$cargo'";    
                                
            $this->modifica=mysqli_query($this->conn,$sql);                    
                                  return $this->modifica;
     }
     public function eliminar($doc){
          $sql="DELETE FROM Empleado WHERE doc=$doc";
          $this->elimina=mysqli_query($this->conn,$sql);
          return $this->elimina;

     }
      
   }

    

             
    








?>
