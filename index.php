<?php

require "./classes/Mail.php";

$mail = new Mail();

$mail->setTo('azxki01@gmail.com');
$mail->setFrom('cococoursan@gmail.com');
$mail->setMessage('Bonjour');
$mail->setSubject('Bienvenue');

mail($mail->getTo(), $mail->getSubject(), $mail->getMessage());
