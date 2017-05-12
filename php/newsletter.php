<?php 
	include "conexao.php";	
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];

	$sql = "INSERT INTO newsletter (nome, email) values ('$nome', '$email')";
	$result = $conn->query($sql);

    $to      = $email;
    $subject = "[AO VIVO] - Newsletter";
    $message = "Olá <b>".$nome.",</b><br><br>Agradecemos por ter se inscrito em nossa newsletter.<br><br>Atenciosamente,<br><br><b>Projeto Social Ao Vivo e em Cores</b>";
    $headers = "MIME-Version: 1.0"."\r\n";
    $headers .= "Content-type:text/html; charset=UTF-8"."\r\n";
    $headers .= 'From: aovivoeemcores@dafae.com';

    mail($to, $subject, $message, $headers);
	
	$conn->close();

    header("Location: http://www.aovivoeemcores.com.br");
?>