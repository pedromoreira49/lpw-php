<?php
$nomeprod=$_POST['nomeprod'];
$descprod=$_POST['descprod'];

include "conecta.php";

$sql="insert into produto (nomeprod,descprod) values ('$nomeprod','$descprod')";

$resultado = mysqli_query($conexao,$sql);

if($resultado)
{
   echo "Produto Efetuado com sucesso";
}
else
{
   echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
   echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
}

?>
<br><a href='index.php'>Voltar </a>
<a href='sair.php'>Sair</a>
