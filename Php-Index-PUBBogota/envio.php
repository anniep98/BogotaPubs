<?php 




use  PHPMailer \ PHPMailer \ PHPMailer ; 
use  PHPMailer \ PHPMailer \ SMTP ; 
use  PHPMailer \ PHPMailer \ Exception ;
        require  'PHPMailer/src/Exception.php'; 
        require  'PHPMailer/src/PHPMailer.php '; 
        require  'PHPMailer/src/SMTP.php';

        $mailer = new PHPMailer();
        
        $mailer->isSMTP();
        $mailer->Hots="smtp.gmail.co";
        $mailer->SMTPAuth   = true; 
        $mailer->Port=587;
        $mailer->SMTPSecure="tls";
        $mailer->SMTPSecure=TRUE;
        $mailer->Username   = 'pubbogota@gmail.com';                     // SMTP username
        $mailer->Password   = '123456pubbogota';
        $mailer->setFrom("mabautista6@misena.edu.co","Miguel");
        echo"prueba 1".'<br>';
        $mailer->addCC("mabautista6@misena.edu.co");
        echo"prueba 2".'<br>';
        $mailer->Subjet="asunto de prueba";
        echo"prueba 3".'<br>';
        $mailer->msgHTML("asdasd");
        echo"prueba 4".'<br>';
        if(!$mailer->send()){
      echo"error de envio".$mailer->ErrorInfo;
        }

?>