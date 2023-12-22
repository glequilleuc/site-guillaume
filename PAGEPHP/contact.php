<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once './vendor/autoload.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $gender = $_POST['gender'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $message = $_POST['message'];
    $email = $_POST['email'];

   
    $mail = new PHPMailer(true);

    try {
       
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'guillaume.lequilleuc.test@gmail.com';
        $mail->Password = 'owxx fijb aono cers';
        $mail->Port = 465;
        $mail->SMTPSecure = 'ssl';

       
        $mail->setFrom('guillaume.lequilleuc.test@gmail.com', 'guillaume le quilleuc');
        $mail->addAddress('guillaume.lequilleuc.test@gmail.com', 'guillaume le quilleuc');

       
        $mail->isHTML(true);
        $mail->Subject = 'Formulaire reçus';
        $mail->Body = "Gender: $gender<br>First Name: $nom<br>Last Name: $prenom<br>message: $message<br>email: $email";

        if (!$mail->send()) {
            echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent.';
        }

        $mail->smtpClose();
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}
?>
