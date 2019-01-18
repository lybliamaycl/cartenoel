<?php
error_reporting(E_ALL ^ E_NOTICE | E_WARNING);
ini_set('display_errors', 'ON');

require_once './phpmailer/class.phpmailer.php';

$resultat ="";


//if (isset($_POST["envoi"])) {
//    if ( !empty($_POST['email']) ){

        //$to = $_POST['email'];
        $to = 'kleymiely@gmail.com';

        $fichier = "./test.html";
        $message = file_get_contents($fichier);

        $mail = new PHPMailer();

        $mail->IsMail();
        //$mail->SMTPDebug = 2;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->IsHTML(true);
        $mail->Username = 'kleymiely@gmail.com';
        $mail->Password = 'MkXI110694151217';
        $mail->From = 'kleymiely@gmail.com';
        $mail->FromName = 'Clem';

        /*$mail->SmtpConnect(
            array(
                "ssl"   => array(
                    "verify_peer"   => false,
                    "verify_peer_name"  => false,
                    "allow_self_signed" => true
                )
            )
        );
        */

        $mail->Subject = 'Carte de voeux pour Noel';
        $mail->Body = $message;
        $mail->AddAddress($to, '2eme Clem');

        if (!$mail->Send()) {
            //echo "Mailer Error: " . $mail->ErrorInfo;
            $resultat = "L'email n'a pas pu être envoyé.";
        } else {
            //echo "No error ! Message sent!";
            $resultat = "L'email contenant la carte de voeux a été envoyé avec succès ! :D";
        }

    //}
//} 

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body class="c1">

    <section class="w100 h100 d-flex flex-column justify-center align-center">
        <div class="w50 c1 text-center p20">
            <?php echo $resultat ?>
        </div>

        <div class="w50 c1 text-center p20">
            <a class="text-nodeco c1" href="./index.html">Retour</a>
        </div>
    </section>

</body>