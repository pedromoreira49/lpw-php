<?php
	include 'conecta.php';

	$sql = "select * from produto order by codproduto";

	$resultado = mysqli_query($conexao, $sql);

	while($linha = mysqli_fetch_assoc($resultado)){	

?>
<section>
<form action='cadastro_avaliacao.php' method=post>
<p>ID: <?php echo $linha['codproduto']; ?></p>	
<p>Nome: <?php echo $linha['nomeprod']; ?></p>
<p>Descrição <?php echo $linha['descprod']; ?></p>
<p>Observação: <input type="text" name="obersavacao"></p>
<p>Nota: <input type="text" name="nota"></p>
<button type="submit" name="acao" value="Enviar">Enviar</button>
</form>	
</section>

<?php
}
?>
<br />
<a href='form_pessoa_produto.php'>Voltar</a>
<br />
<a href='sair.php'>Sair</a>
