<?php
use PHPMailer \PHPMailer \PHPMailer;
use PHPMailer \PHPMailer \Exception;
use PHPMailer \PHPMailer \SMTP;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//require  ' PHPMailerAutoload.php ' ; 

$correo=$_POST['email'];
$usuario=$_usuario['usuario'];
$length = 10;
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$charactersLength = strlen($characters);
$randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(3, $charactersLength - 5)];
    }
    
$mail = new PHPMailer(true);

    $host="sql312.260mb.net";
    $user="n260m_24465151";
    $password="1803170";
    $BD="n260m_24465151_PUB";
    $conn=mysqli_connect($host, $user,$password,$BD) or die("Error en conexion".mysqli_error($conn));
    $claveEncriptada=MD5($randomString);
    $query="UPDATE cliente set clave='$claveEncriptada' WHERE correo ='$correo'";
    $consulta = mysqli_query($conn,$query);





    
try {
    //Server settings
 $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'pubbogota@gmail.com';                     // SMTP username
    $mail->Password   = '123456pubbogota';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('pubbogota@gmail.com', 'Miguelito');
    $mail->addAddress($correo, $usuario);     // Add a recipient
                
    


    // Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
  //  $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensaje de pub bogota';
    $mail->Body    = 'Cordial saludo, podrá acceceder con la siquiente contraseña: '.'<b>'.$randomString.'</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';


    if($mail->send()){
        header('location:index.php');
    }
    
} catch (Exception $e) {
    echo "error llave: {$mail->ErrorInfo}";
}


?>