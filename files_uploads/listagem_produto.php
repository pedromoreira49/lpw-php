<?php

include "conecta.php";

$sql = "select * from produto order by codproduto";


$resultado = mysqli_query($conexao,$sql);

while($linha=mysqli_fetch_assoc($resultado)) {

?>
<section>
<form action="edicao_produto.php" method="post">
<p>ID: <?php echo $linha['codproduto']; ?></p>
<input type ="hidden" name = "codproduto" value="<?php echo $linha['codproduto']?>">
<p>Nome:  <input type="text" name="nomeprod" value="<?php echo $linha['nomeprod']?>"></p>
<p>Descrição:<input type ="text" name = "descprod" value="<?php echo $linha['descprod']?>"></p> 
<button type="submit" name="acao" value="editar"> Editar </button>
<button type="submit" name="acao" value="excluir" onclick = "return confirma_excluir()"> Deletar </button> 
</form>
</section>
<?php
}
?>
<a href='form_pessoa_produto.php'>Voltar </a>
<a href='sair.php'>Sair</a>
