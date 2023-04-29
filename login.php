<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style_work.css">
</head>
<body>

<!---<header>
	<a href="#" class="logo"> Ease </a> 
    <ul class="navlist">
	<li> <a href="#">Главная</a> </li>
	<li> <a href="#">Использование</a> </li>
	<li> <a href="#">О сайте</a> </li>
  <li></li>
  </ul>
	<div class="bx bx-menu" id="menu-icon"></div>
 </header>--->


 <?php include "header.php";?>
 <div class="block_under_header">
  <div class="header">
  	<h2>Вход</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Логин</label>
  		<input type="text" name="login" >
  	</div>
  	<div class="input-group">
  		<label>Пароль</label>
  		<input type="password" name="pass">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Вход</button>
  	</div>
  	<p>
  	Вы ещё не зарегистрированы? </p><a href="register.php" class="btn" >Регистрация</a>
  	
  </form>
</div>
</body>
</html>