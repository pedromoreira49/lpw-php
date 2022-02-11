<?php

$obsprod = $_POST['observacao'];
$nota = $_POST['nota'];
$codproduto = $_POST['codproduto'];
$codpessoa = $_POST['codpessoa'];

include 'conecta.php';

$sql = "insert into avaliacao (observacao, nota, produto_id, usuario_id) values ('$obsprod', '$nota','$codproduto', '$codpessoa')";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
	echo "Produto avaliado com sucesso";
}else{
	echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
    echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
}


?>
<br><a href='form_pessoa_produto.php'>Voltar </a>
<a href='sair.php'>Sair</a>