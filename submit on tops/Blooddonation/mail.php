<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader

if(isset($_POST["send"]))
{

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->SMTPDebug = 1;    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'bkpandey.pandey@gmail.com';                     //SMTP username
    $mail->Password   = 'lgacnbymmoahfkgu';                               //SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($_POST["email"], 'Mailer');
    $mail->addAddress('bkpandey.pandey@gmail.com','Repent');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Enquiry contact us Form customers details';
    $mail->Body    = "<div style='width:80%; height:auto; margin:auto; padding:15px'>"."<img src='https://email.uplers.com/blog/wp-content/uploads/2022/07/1-Signatures-blog.gif' style='width:100%; height:200px'>"."<p><b>Customer Name : </b>".$_POST['name']."</p>"."<p><b>Customer Email : </b>".$_POST['email']."</p>"."<p><b>Customer FirstName : </b>".$_POST['fname']."</p>"."<p><b>Customer LastName : </b>".$_POST['lname']."</p>"."<p><b>Customer Phone : </b>".$_POST['phone']."</p>"."<p><b>Customer Message : </b>".$_POST['message']."</p>"."<p>Our office details : Tops technology pvt Ltd<br>Email us <a href='mailto:info@tops-int.com'>Info@tops-int.com</a>.</p>"."</div>";
 
 
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script>
    alert('Thanks for contact with us our one of Admin will contact with you Soon we get your email')
    
    window.location='contactus.php';
    </script>";

} 
catch (Exception $e)
 {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>