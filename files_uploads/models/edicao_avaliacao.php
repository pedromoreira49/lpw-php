<?php
include "conecta.php";
if($_POST['acao']=='editar')
{

    $codproduto= $_POST['codproduto'];
    $nomeprod= $_POST['nomeprod'];
    $descprod=$_POST['descprod'];

    $SQL= "update produto set nomeprod='$nomeprod', descprod='$descprod'  where codproduto = '$codproduto'";
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
else if($_POST['acao'] == 'enviar'){
   $codproduto = $_POST['codproduto'];
   $observacao = $_POST['observacao'];
   $nota = $_POST['nota'];
   $codpessoa = $_POST['codpessoa'];

   $sqli = "insert into avaliacao (observacao, nota, produto_id, usuario_id) values ('$observacao', '$nota','$codproduto', '$codpessoa');";


   $result = mysqli_query($conexao, $sqli);
   if($result){
      echo "Produto avaliado com sucesso";
   }else{
      echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
       echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
   }

}
else
{


  if($_POST['acao']=='excluir')
  {

    $codproduto= $_POST['codproduto'];

    $SQL= "delete from produto where codproduto = '$codproduto'";
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
