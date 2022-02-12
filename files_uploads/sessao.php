<?php

	include 'conecta.php';
	$email = $_SESSION['email'];
	$sql = "select * from pessoa where email='$email';";

	$result = mysqli_query($conexao, $sql);

	while($line = mysqli_fetch_assoc($result)){
		include 'dados_avaliacao.php';
	}
?>