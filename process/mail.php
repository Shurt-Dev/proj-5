<?php
$to      = 'abielski@gaming.tech';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From:'.$_POST['email']. "\r\n" .'Reply-To: abielski@gaming.tech';
mail($to, $subject, $message, $headers);

header('Location:../index.php')
 ?>
