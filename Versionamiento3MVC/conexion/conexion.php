<?php 


class Conexion{

    private $server;
    private $user;
    private $pas;
    private $db;
    private $conn;

    public function __construct (){
       $this->server="sql312.260mb.net";
       $this->user="n260m_24465151";
       $this->pas="1803170";
       $this->db="n260m_24465151_PUB";
       $this->conn= new mysqli($this->server,$this->user,$this->pas,$this->db)or die("Erro al conectar".mysqli_error($conn));
        return $this->conn;
    }

    public function ejecutarConsulta($sql)
     {
           $c=$this->conn->query($sql);
           return $c->fetch_all();
           //$resul=mysqli_fetch_all($c);
     }
      public function ejecutarActualizacion($sql){

                $this->conn->query($sql);
      }
    public function cerrarConexion()
    {
        $this->conn->close();
    
    
    }
    public function LoginValida($usuario,$clave){
            $sql="SELECT* FROM cliente WHERE usuario='$usuario' AND clave ='$clave'";
           $fila=$this->conn->query($sql);
            $row=$fila->num_rows;
           if($row==1){
            return true;
           }else{
                return false;
           }

    }
    
    
    

}

?>