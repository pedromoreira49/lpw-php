<?php
   include 'conecta.php';
   if($_POST['acao'] == 'enviar')
   {
      $codproduto = $_POST['codproduto'];
      $observacao = $_POST['observacao'];
      $nota = $_POST['nota'];

      $sql = "insert into avaliacao (observacao, nota, produto_id) values ('$observacao', '$nota','$codproduto');";


      $result = mysqli_query($conexao, $sql);
      if($result){
         echo "Produto avaliado com sucesso";
      }else{
         echo 'Código de erro:'.mysqli_errno( $conexao ).'<br>';
          echo 'Mensagem de erro:'.mysqli_error( $conexao).'<br>';
      }
   }

?>