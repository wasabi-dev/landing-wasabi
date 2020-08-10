<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'wasabidevelopment@gmail.com';          // SMTP username
    $mail->Password   = 'hjFq$9341';                            // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('wasabidevelopment@gmail.com', 'WasabiDev');
    $mail->addAddress('wasabidevelopment@gmail.com', 'Sres WasabiDev');     // Add a recipient
    $mail->addAddress('danielmaio62@gmail.com');                            // Name is optional

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Acá va el asunto';
    $mail->Body    = 'Y acá va el mensaje propiamente dicho <b>in bold!</b>';

    $mail->send();
    echo 'El mensaje fue enviado con éxito!';
} catch (Exception $e) {
    echo "Lo siento, hubo un error. Mailer Error: {$mail->ErrorInfo}";
}