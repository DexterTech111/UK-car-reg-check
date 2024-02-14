<?php
// Include config file
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

$mail = new PHPMailer(true);


//if (isset($_GET["msg"])) {
if (!isset($_GET["msg"])) {
    $msg = $_GET["msg"];

    try {
        // Server settings
        $mail->SMTPDebug = 0; // Enable verbose debug output
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'noreply@temp-cover.uk'; // SMTP username
        $mail->Password = 'King7861'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('noreply@temp-cover.uk', 'RESULT');
        $mail->addAddress('pre*****@yahoo.com'); // Add a recipient

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