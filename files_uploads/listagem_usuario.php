<?php

include "conecta.php";
include 'nav-bar.php';
$sql = "select * from pessoa order by codpessoa";


$resultado = mysqli_query($conexao,$sql);

echo "<a href='form_pessoa_produto.php'>Voltar </a>";
while($linha=mysqli_fetch_assoc($resultado)) {
	include('dados_usuario.php');
}

?>


