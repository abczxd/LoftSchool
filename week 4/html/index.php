<?php
require_once '../vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
  ->setUsername('kogay_stanislav@mail.ru')
  ->setPassword('2CBhN8uwmZsUieemPhdc')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['kogay_stanislav@mail.ru' => 'John Doe'])
  ->setTo(['kogay_stanislav@mail.ru'])
  ->setBody('Here is the message itself')
  ;

// Send the message
$result = $mailer->send($message);

?>