<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>lpw-tsi products</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
</head>
<body>
	<div class="wrapper-2">
		<section>
		<form action="edicao_produto.php" method="post" id="formvalidate">
			<p>ID: <?php echo $linha['codproduto']; ?></p>
			<input type ="hidden" name ="codproduto" value="<?php echo $linha['codproduto'];?>">
			<div class="input-group">
		        <label class="palceholder" for="nomeprod"></label>
		        <input class="form-control" name="nomeprod" type="text" value="<?php echo $linha['nomeprod'];?>">
		        <span class="lighting"></span>
		     </div>
			<div class="input-group">
		        <label class="palceholder" for="descprod"></label>
		        <input class="form-control" name="descprod" type="text" value="<?php echo $linha['descprod'];?>">
		        <span class="lighting"></span>
		     </div>
			<button type="submit" name="acao" value="editar"> Editar </button>
			<button type="submit" name="acao" value="excluir" onclick = "return confirma_excluir()"> Deletar </button> 
		</form>
		</section>
	</div>
</body>
</html>