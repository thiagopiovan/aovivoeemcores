<?php

$to      = 'aovivoeemcores@dafae.com';
$subject = "[SITE] - ".$_POST['assunto'];
$message = "<b>Nome: </b>".$_POST['nome']."<br><br><b>E-mail: </b>".$_POST['email']."<br><br><b>Mensagem: </b>".$_POST['mensagem'];
$headers = "MIME-Version: 1.0"."\r\n";
$headers .= "Content-type:text/html; charset=UTF-8"."\r\n";
$headers .= 'From: '.$_POST['email'];

mail($to, $subject, $message, $headers);

header("Location: http://www.aovivoeemcores.com.br/previa/contato.html");
?>