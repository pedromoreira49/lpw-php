<?php
session_start();

$email=$_POST['email'];
$senha=$_POST['senha'];
if (!(empty($email) OR empty($senha)))
{
	include "conecta.php";
	$sql="SELECT * from pessoa WHERE email='$email' and senha='$senha';";
	$resultado = mysqli_query($conexao,$sql);
	if (mysqli_num_rows($resultado)== 1)
	{
	$_SESSION['logado']=true;
	$_SESSION['email']=$email;
	header("Location:form_pessoa_produto.php");
	}
	else
	{
		$_SESSION["msg"]="Usuário ou senha inválidos";
		header("Location:index.php");
	}
}
else
{
	$_SESSION["msg"]="Preencha campos email e senha";
	header("Location:index.php");
}

?>
