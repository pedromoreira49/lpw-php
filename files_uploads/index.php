<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>lpw-tsi</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="logo text-center">
  <h1>LPW-TSI</h1>
</div>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Login to your account</h2>
    <form action="valida_login.php" method="post" id="formvalidate">
      <div class="input-group">
        <label class="palceholder" for="email">Email</label>
        <input class="form-control" name="email" id="userName" type="text" placeholder="" required/>
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="senha">Senha</label>
        <input class="form-control" name="senha" id="userPassword" type="password" placeholder="" required/>
        <span class="lighting"></span>
      </div>

      <button type="submit" name="acao"id="login">Login</button>
    </form>
  </div>
</div>

  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="./script.js"></script>

</body>
</html>

<div id='msg'>
<?php
if(isset($_SESSION['msg']))
{
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
}
?>
</div>
