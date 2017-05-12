<?php 
	include "conexao.php";	
    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $valor = $_POST["valor"];

    if($_GET["n"]==1)
    {
        $marca = $_POST["marca"];
        
        $sql = "INSERT INTO sede (nome, email, valor, marca, tipo) values ('$nome', '$email', $valor, '$marca', 1)";
        $result = $conn->query($sql);
        
        $subject = "[AO VIVO] - Confirmação de Doação";
        $message = "Olá <b>".$nome."</b>,<br><br>Agradecemos imensamente sua contribuição de <b>R$".$valor.",00</b> para nossa futura sede. Nela terá um logo do nosso projeto composto pelo nome de todas as pessoas que nos ajudaram, dentre eles o seu será: <b>".$marca."</b>.<br><br>Atenciosamente,<br><br><b>Projeto Social Ao Vivo e em Cores</b>";
    }
    
    if($_GET["n"]==2)
    {
        $sql = "INSERT INTO sede (nome, email, valor, tipo) values ('$nome', '$email', $valor, 2)";
        $result = $conn->query($sql);

        $to      = $email;
        $subject = "[AO VIVO] - Confirmação de Doação";
        $message = "Olá <b>".$nome."</b>,<br><br>Agradecemos imensamente sua contribuição de <b>R$".$valor.",00</b> para nossa futura sede.<br><br>Atenciosamente,<br><br><b>Projeto Social Ao Vivo e em Cores</b>";
    }

    if($_GET["n"]==3)
    {
        $marca = $_POST["marca"];
        
        $sql = "INSERT INTO sede (nome, email, valor, marca, tipo) values ('$nome', '$email', $valor, '$marca', 3)";
        $result = $conn->query($sql);
        echo $marca;
        
        $subject = "[AO VIVO] - Confirmação de Doação";
        $message = "Olá <b>".$nome."</b>,<br><br>Agradecemos imensamente a contribuição de <b>R$".$valor.",00</b> para nossa futura sede. Nela terá o logo do nosso projeto assim como o da sua empresa, <b>".$marca."</b>, que nos ajudou a construir este sonho.<br><br>Para tanto, pedimos que nos envie o logo da sua empresa vetorizado, por gentileza.<br><br>Atenciosamente,<br><br><b>Projeto Social Ao Vivo e em Cores</b>";
    }
    
    $to      = $email;
    $headers = "MIME-Version: 1.0"."\r\n";
    $headers .= "Content-type:text/html; charset=UTF-8"."\r\n";
    $headers .= 'From: aovivoeemcores@dafae.com';

    mail($to, $subject, $message, $headers);
	
	$conn->close();

    header("Location: http://www.aovivoeemcores.com.br/sede.html");
?>