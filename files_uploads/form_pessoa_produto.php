<?php
session_start();

if((!isset($_SESSION['email'])) && (!isset($_SESSION['logado'])))
{

    header("Location:index.php");
}

?>


<h1>Cadastro Pessoa</h1>
    <form action="cadastro_usuario.php" method="POST" enctype="multipart/form-data">
    Nome : <input type="text" name="nome">
    Email : <input type="text" name="email">
    CPF: <input type="text" name="cpf">
    Senha: <input type="password" name="senha">
    <p>Foto: <input type="file" name="arquivo"></p>
    <input type="reset" name="botao" value="Limpar">
    <input type="submit" name="botao" value="Enviar">
</form>

<h1>Cadastro Produto</h1>
    <form action="cadastro_produto.php" method="POST">
    Nome : <input type="text" name="nomeprod">
    Descrição : <input type="text" name="descprod">
    <input type="reset" name="botao" value="Limpar">
    <input type="submit" name="botao" value="Enviar">
</form>

<a href='listagem_usuario.php'>Edição de Usuários</a>
<a href='listagem_produto.php'>Edição de Produtos</a>
<a href='sair.php'>Sair</a>
