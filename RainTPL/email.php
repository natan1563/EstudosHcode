<?php 

require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
);

Tpl::configure( $config );

// create the Tpl object
$tpl = new Tpl;

// assign a variable
$tpl->assign("name", "Hcode" );
$tpl->assign("version", PHP_VERSION);

// assign an array
// draw the template
$html = $tpl->draw("index", true);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'natromafe@gmail.com';
//Password to use for SMTP authentication
$mail->Password = 'kqdd6161';
//Set who the message is to be sent from
$mail->setFrom('natromafe@gmail.com', 'Nata do Mundo 2');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('madarap90@gmail.com', 'Natã Romão');
//Set the subject line
$mail->Subject = 'Thats me baby, call me back, pls!!';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($html);
//Replace the plain text body with one created manually
$mail->AltBody = 'Ai cara, não desiste você vai conseguir, tchama!!';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Erro no envio: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada';
}

?>
