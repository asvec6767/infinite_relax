<?php 
  session_start(); 

  if (!isset($_SESSION['login'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['login']);
  	header("location: login.php");
  }
  if (isset($_GET['relaxes'])) {
	$relax=(int)$_GET['relaxes'];
	  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style_work.css">
</head>
<body>

<?php include "header.php";?>
<div class="block_under_header">
<div class="header">
	<h2>Вход</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  
	$db = mysqli_connect("localhost", "root", "", "relax");
	$log=$_SESSION['login'];
	$relaxes = mysqli_query($db, "SELECT relaxes FROM users WHERE login='$log'");//получение ресурса объекта
	$row = mysqli_fetch_array($relaxes);//преобразование ресурса в массив текста
	if (isset($_POST['btn_1'])) $relaxes1=1;
	if (isset($_POST['btn_2'])) $relaxes1=2;
	if (isset($_POST['btn_3'])) $relaxes1=3;
	if (isset($_POST['btn_4'])) $relaxes1=4;
	if (isset($_POST['btn_5'])) $relaxes1=5;
	if (isset($_POST['btn_6'])) $relaxes1=6;
	if (isset($_POST['btn_7'])) $relaxes1=7;
	$array_names=array("Физический","Ментальный","Эмоциональный","Социальный","Сенсорный","Творческий","Духовный");
	$relaxes = mysqli_query($db, "UPDATE `users` SET `relaxes`='$relaxes1' WHERE login='$log'");//по
	if (isset($_SESSION['login'])) : ?>
    	<p>Добро пожаловать <strong><?php echo $_SESSION['login']; ?></strong></p>
		<p>Ваш тип отдыха <strong><?php echo $array_names[$row[0]-1]; ?></strong></p>
		<div class="Login-popup"><a href="test.php" class="registration" >Выбрать отдых</a></div>
		<div class="Login-popup"><a href="index2.php" class="registration" >Посмотреть идеи</a></div>
		<div class="Login-popup"><a href="index.php?logout='1'" class="registration" >Выйти из личного кабинета</a></div>
		
	<?php endif ?>
</div>
	</div>	
</body>
</html>