<div class="inner-warpper">
	<form action="edicao_avaliacao.php" method="post" id="formvalidate">
		<div class="input-group">
			<input type="hidden" name="codavaliacao" value="<?php echo $line['codavaliacao']; ?>">
			<input type="text" name="nota" value="<?php echo $line['nota']; ?>">
			<br />
			<input type="text" name="observacao" value="<?php echo $line['observacao']; ?>">
			<p><button name="acao" value="excluir">Deletar</button><button value="editar" name="acao">Editar</button></p>
		</div>
	</form>
</div>