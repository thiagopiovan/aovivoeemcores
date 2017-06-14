<?php 
	include "conexao.php";

    $sql = "SELECT SUM(valor) AS soma FROM sede";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total = $row["soma"];
    $atual=$total/300;

    $conn->close();
?>