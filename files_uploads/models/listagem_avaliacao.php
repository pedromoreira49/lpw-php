<?php

include "conecta.php";
include 'nav-bar.php';

$sql = "select `avaliacao`.`observacao`, `avaliacao`.`nota`, `pessoa`.`nome`, `produto`.`nomeprod`, `produto`.`descprod`, `produto`.`codproduto`, `pessoa`.`codpessoa` from avaliacao inner join `produto` on `avaliacao`.`produto_id` = `codproduto` inner join `pessoa` on `avaliacao`.`usuario_id` = `codpessoa`;";

echo "<a style='float: left;' href='form_pessoa_produto.php'>Voltar </a> <br />";

$resultado = mysqli_query($conexao,$sql);

while($linha=mysqli_fetch_assoc($resultado)) {
	include 'dados_avaliacao.php';
}
?>