<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style_work.css">
</head>


<body>
<?php include "header.php";?>
<div class="block_under_header">

  <div class="header">
  	<h2>Регистрация</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Логин</label>
  	  <input type="text" name="login" value="<?php echo $login; ?>">
  	</div>
    <div class="input-group" style="display: none">
  	  <label>Main relaxes (1-football, 2-basket, 3-prog, 4-tulgu etc.)</label>
  	  <input type="text" name="relaxes" value="<?php $relaxes=1;echo $relaxes; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Пароль</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Повторите пароль</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Регистрация</button>
  	</div>
  	<p>
	  Уже зарегистрированы?</p> <a href="login.php" class="btn">Войти</a>
  	
  </form>

</div>
</body>
</html>