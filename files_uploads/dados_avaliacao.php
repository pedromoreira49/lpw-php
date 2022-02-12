<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>lpw-tsi rate products</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
</head>
<body>
	<div class="wrapper-2">
		<section>
            <p>ID: <?php echo $linha['codproduto']; ?></p>
            <div class="input-group">
                <p> Nome: <?php echo $linha['nomeprod'];?> </p>
                <span class="lighting"></span>
            </div>
            <div class="input-group">
                <p> <?php echo $linha['descprod'];?> </p>
                <span class="lighting"></span>
            </div>
          <form action="edicao_avaliacao.php" method="post" id="formvalidate">
            <input type="hidden" name="codproduto" value="<?php echo $linha['codproduto']; ?>">
            <?php 
                include "conecta.php";
                $codproduto = $linha['codproduto'];
                $sqli = "select * from avaliacao where produto_id='$codproduto';";

                $result = mysqli_query($conexao,$sqli);

                while($line=mysqli_fetch_assoc($result)) {
                    include 'avaliacao.php';
                }
            ?>
            <div class="input-group">
                <label class="palceholder" for="observacao"></label>
                <input class="form-control" name="observacao" id="userName" type="text" placeholder="Observação"/>
                <span class="lighting"></span>
            </div>
            <div class="input-group">
                <label class="palceholder" for="nota"></label>
                <input class="form-control" name="nota" id="userName" type="text" placeholder="Nota"/>
                <span class="lighting"></span>
            </div>
            <button type="submit" name="acao"id="login" value="enviar">Enviar</button>
          </form>
        </section>
  </div>
</body>
</html>