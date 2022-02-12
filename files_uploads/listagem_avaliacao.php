<?php

include "conecta.php";
include 'nav-bar.php';

$sql = "select * from produto";

echo "<a style='float: left;' href='form_pessoa_produto.php'>Voltar </a> <br />";

$resultado = mysqli_query($conexao,$sql);

while($linha=mysqli_fetch_assoc($resultado)) {
	include 'dados_avaliacao.php';
}

?>