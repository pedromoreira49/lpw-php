<?php
session_start();
session_destroy();  
unset($_SESSION["logado"]);
unset($_SESSION["email"]);
header("Location:index.php"); 
