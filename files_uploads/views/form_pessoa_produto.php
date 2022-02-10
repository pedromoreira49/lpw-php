<?php
session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>lpw-tsi dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
</head>
<body>
    <section class="nav-container">
        <?php
            include('nav-bar.php');
        ?>
    </section>
    <section class="main-container">
        <div class="wrapper-2">
            <div class="inner-warpper">
                <div class="text-center">
                    <h2>Cadastro Pessoa:</h2>
                </div>
                <form action="cadastro_usuario.php" method="post" id="formvalidate">
                    <div class="input-group">
                        <label class="palceholder" for="nome"></label>
                        <input class="form-control" name="nome" id="userName" type="text" placeholder="Nome" required/>
                        <span class="lighting"></span>
                    </div>
                    <div class="input-group">
                        <label class="palceholder" for="email"></label>
                        <input class="form-control" name="email" id="userName" type="text" placeholder="Email" required/>
                        <span class="lighting"></span>
                    </div>
                    <div class="input-group">
                        <label class="palceholder" for="cpf"></label>
                        <input class="form-control" name="cpf" id="userName" type="text" placeholder="Cpf" required/>
                        <span class="lighting"></span>
                    </div>
                    <div class="input-group">
                        <label class="palceholder" for="senha"></label>
                        <input class="form-control" name="senha" id="userPassword" type="password" placeholder="Senha" required/>
                        <span class="lighting"></span>
                    </div>
                    <div class="input-group">
                        <label class="palceholder" for="arquivo"></label>
                        <input class="form-control" name="arquivo" type="file"/>
                        <span class="lighting"></span>
                    </div>
                    <button type="submit" name="acao"id="login">Cadastrar</button>
                    <button type="reset" name="acao"id="login">Reset</button>
                </form>
            </div>
        </div>
        <div class="wrapper-2">
            <div class="inner-warpper">
                <div class="text-center">
                    <h2>Cadastro produto:</h2>
                </div>
                <form action="cadastro_produto.php" method="post" id="formvalidate">
                    <div class="input-group">
                        <label class="palceholder" for="nomeprod"></label>
                        <input class="form-control" name="nomeprod" id="userName" type="text" placeholder="Nome do produto" required/>
                        <span class="lighting"></span>
                    </div>
                    <div class="input-group">
                        <label class="palceholder" for="descprod"></label>
                        <input class="form-control" name="descprod" id="userName" type="text" placeholder="Descrição do produto" required/>
                        <span class="lighting"></span>
                    </div>
                    <button type="submit" name="acao"id="login">Cadastrar</button>
                    <button type="reset" name="acao"id="login">Reset</button>
                </form>
            </div>
        </div>
    </section>
</body>