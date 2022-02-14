<?php
include "conecta.php";
if($_POST['acao']=='editar')
{

    $codavaliacao= $_POST['codavaliacao'];
    $observacao= $_POST['observacao'];
    $nota=$_POST['nota'];

    $SQL= "update avaliacao set observacao='$observacao', nota='$nota' where codavaliacao = '$codavaliacao';";

    $resultado=mysqli_query($conexao,$SQL);

    if($resultado)
    {
       echo "Alteração Efetuada com sucesso";
    }
    else
    {
       echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
       echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
    }

}
else
{


  if($_POST['acao']=='excluir')
  {

    $codavaliacao= $_POST['codavaliacao'];

    $SQL= "delete from avaliacao where codavaliacao = '$codavaliacao'";
    //echo $SQL;

    $resultado=mysqli_query($conexao,$SQL);

    if($resultado)
    {
       echo "Exclusão Efetuada com sucesso";
    }
    else
    {
       echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
       echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
    }

}
}
?>
<br><a href='listagem_produto.php'>Voltar </a>
<a href='sair.php'>Sair</a>
