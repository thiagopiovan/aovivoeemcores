<?php 
	include "conexao.php";	

	$sql = "SELECT * FROM depoimentos ORDER BY rand() LIMIT 1";
	$result = $conn->query($sql);

   while($row = $result->fetch_assoc()) {
     	$nome = $row['nome'];
     	$cargo = $row['cargo'];
     	$descricao = $row['descricao'];
     	$imagem = $row['img'];
   }
	
	$conn->close();
?>