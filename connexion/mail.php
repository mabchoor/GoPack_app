<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Create an instance; passing `true` enables exceptions
function mailsend($email, $randomNumber){
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0;                                      // Set SMTP debug output level to 0 to disable verbose output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'abderrahmane.mabchour.c137133470@gmail.com';    // SMTP username
        $mail->Password   = 'tuhlatfvhzzohvyg';                       // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Enable implicit TLS encryption
        $mail->Port       = 465;                                    // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        // Recipients
        $mail->setFrom('abderrahmane.mabchour.c137133470@gmail.com');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);                                      // Set email format to HTML
        $mail->Subject = 'No Reply';
        $mail->Body    = 'Here is the verification code: <b>'.$randomNumber.'</b>';

        $mail->send();
        return true; // Return true if email sent successfully
    } catch (Exception $e) {
        return false; // Return false if there was an error sending the email
    }
}

?>