<?php
$conexao = new mysqli("localhost", "root", "jpedrostonemoreira", "aula"); // conexao pelo método orientado a objetos - através do instanciamento de um objeto 
//notação para acessar um método do objeto no PHP "$objeto->metodo()"
$conexao->set_charset("utf8");

if (!$conexao) {
    die('Não foi possível conectar: ' . mysql_error());
}
?>
