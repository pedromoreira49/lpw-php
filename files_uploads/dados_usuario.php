<section>
<form action="edicao_usuario.php" method="post">
<p>ID: <?php echo $linha['codpessoa']; ?></p>
<input type ="hidden" name = "codpessoa" value="<?php echo $linha['codpessoa']?>">
<p>Nome:  <input type="text" name="nome" value="<?php echo $linha['nome']?>"></p>
<p>Email:<input type ="text" name = "email" value="<?php echo $linha['email']?>"></p>
<p>CPF: <input type ="text" name = "cpf" value="<?php echo $linha['cpf']?>" ?></p>
<p>Senha: <input type ="password" name = "senha" value="<?php echo $linha['senha']?>" ?></p>
<button type="submit" name="acao" value="editar"> Editar </button>
<button type="submit" name="acao" value="excluir" onclick = "return confirma_excluir()"> Deletar </button>
</form>
</section>