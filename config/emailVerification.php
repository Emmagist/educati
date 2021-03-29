<?php
    require_once "db.php";

    require_once 'vendor/autoload.php';

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername(EMAIL)
    ->setPassword(EMAIL_PASSWORD);
    ;

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    

    class emailVerification{
        public function sendPasswordResendLink($email,$token){
            global $db, $mailer;
            $body = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Verify Email</title>
            </head>
            <body>
                <div class="email_wrap">
                   <p>Please click on the link below to reset your password.</p>
                   <a href="http://localhost/educati/password-reset-verify.php?token=' . $token .'">Reset password here.</a>
                </div> 
               <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
            </body>
            </html>';
            // Create a message
            $message = (new Swift_Message('Reset your password by clicking on the below link'))
            ->setFrom(EMAIL)
            ->setTo($email)
            ->setBody($body, 'text/html');
            // Send the message
            $result = $mailer->send($message);
        }
    }
    $emailVer = new emailVerification;

?>