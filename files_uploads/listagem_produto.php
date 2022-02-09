<?php

include "conecta.php";
include 'nav-bar.php';

$sql = "select * from produto order by codproduto";

echo "<a href='form_pessoa_produto.php'>Voltar </a>";

$resultado = mysqli_query($conexao,$sql);

while($linha=mysqli_fetch_assoc($resultado)) {
	include 'dados_produto.php';
}
?>
