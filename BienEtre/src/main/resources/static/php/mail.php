<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMAiler.php';
require 'phpmailer/src/SMTP.php';

echo 'mail : '.$_SESSION['email'];

function message_send(){
    $score = $_SESSION['score'];

    switch ($score) {
        case ($score <= 3):
            return "Hey ! Tout va bien ne t'en fait pas, nous allons tout faire pour t'aider à t'améliorer dans ta vie.";
            break;
        case ($score <= 4):
            return "Bravo ! Tu es excellent ! Si tu le souhaites tu peux venir en aide à d'autres étudiants !";
            break;
        default:
            return "Rien à dire, nous te proposons de devenir tuteur officiel du site et de te proposer pour aidez l'ensemble des étudiants.";
            break;
    }

}

function sendmail($mail,$receveur){
    $mail->addAddress($receveur);

    $mail->isHTML(true);

    $mail->Subject = "NT2A : Nouveau message !";
    $mail->Body = message_send();

    $mail->send();

    return true;
}

if(isset($_SESSION['identifiant'])){

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ayoub.chenini1@gmail.com';
    $mail->Password = 'roqzssvdtieuftao';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('ayoub.chenini1@gmail.com');

    sendmail($mail,$_SESSION['email']);
    header("Location: profil.php");
    
}

?>