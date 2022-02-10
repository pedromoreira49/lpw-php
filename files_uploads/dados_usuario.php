<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>lpw-tsi dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="wrapper-2">
	<section>
		<form action="edicao_usuario.php" method="post" id="formvalidate">
			<input type ="hidden" name = "codpessoa" value="<?php echo $linha['codpessoa']?>">
			<div class="input-group">
		        <label class="palceholder" for="nome"></label>
		        <input class="form-control" name="nome" id="userName" type="text" value="<?php echo $linha['nome'];?>"/>
		        <span class="lighting"></span>
		    </div>
			<div class="input-group">
		        <label class="palceholder" for="email"></label>
		        <input class="form-control" name="email" id="userName" type="text" value="<?php echo $linha['email'];?>">
		        <span class="lighting"></span>
		     </div>
		     <div class="input-group">
		        <label class="palceholder" for="cpf"></label>
		        <input class="form-control" name="cpf" id="userName" type="text" value="<?php echo $linha['cpf'];?>">
		        <span class="lighting"></span>
		     </div>
		     <div class="input-group">
		        <label class="palceholder" for="senha"></label>
		        <input class="form-control" name="senha" id="userName" type="password" value="<?php echo $linha['senha'];?>">
		        <span class="lighting"></span>
		     </div>
			<button id="login" type="submit" name="acao" value="editar"> Editar </button>
			<button id="login" type="submit" name="acao" value="excluir" onclick = "return confirma_excluir()"> Deletar </button>
		</form>
	</section>
</div>
</body>
</html>