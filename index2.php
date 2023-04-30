<!doctype html>
<html>
    <head>
        <meta charset = "utf8" />
        <title>Бесконечный скроллинг с JavaScript</title>
         <link rel="stylesheet" type="text/css" href="style_work.css">
        <!---<link rel="stylesheet" type="text/css" href="style1.css">--->
        <link rel="stylesheet" href="tape_style.css"><!---Ванин--->
    </head>
    <body>
   
 <?php include "header.php";?>
 
        <?php
        session_start(); 
        $db = mysqli_connect("localhost", "root", "", "relax");
	    $log=$_SESSION['login'];
	    $relaxes = mysqli_query($db, "SELECT relaxes FROM users WHERE login='$log'");//получение ресурса объекта
	    $row = mysqli_fetch_array($relaxes);//преобразование ресурса в массив текста
        $array_names=array("Физический","Ментальный","Эмоциональный","Социальный","Сенсорный","Творческий","Духовный");
        ?>
        <!--<p>Вы выбрали <strong><?php// echo $array_names[$row[0]]; ?></strong> отдых</p>-->
        <div id="infinite-scroll">
            <!--<div>-->
            <script src="names/ph.js"></script>
	<script src="textes/ph.js"></script>
     <script>
	 var relax = '<?php echo $row[0];?>';
	 var array=["Ph","Ment","Emot","Soc","Sensor","Art","Spir"];
	 var folder=array[relax-1];
		//read file
		//var array = ["Иван","Соня","Семен","Говно","Сам говно","Собоофолвф фврмрфш фвм"];
		//import { array } from './relaxes.js'
		//print first text
        for( let i = 0; i < 10; i++ ) {
            document.write('<div class="card"> <img src="img/'+folder+'/' + i%7 + '.jpg" alt="img' + i%7 + '"/>');
			document.write('<div class= "card-content" ><h3 class="card-name">'+names[i%7]+'</h3>'+'<br>');
			document.write('<a href="ad.php" >здесь могла быть ваша реклама</a> <br><h6 class="card-text">'+textes[i%7]+'</h6>'+"</div></div>");
		}
     </script>
          <!-- </div>-->
        </div>
        <!--<div>-->
        <script>
       
            window.addEventListener("scroll", function(){
           
                var block = document.getElementById('infinite-scroll');
                var counter = 1;
               
                var contentHeight = block.offsetHeight;      // 1) высота блока контента вместе с границами
                var yOffset       = window.pageYOffset;      // 2) текущее положение скролбара
                var window_height = window.innerHeight;      // 3) высота внутренней области окна документа
                var y             = yOffset + window_height;
               
                // если пользователь достиг конца
                if(y >= contentHeight)
                {for( let i = 0; i < 10; i++ ) {
                    //загружаем новое содержимое в элемент
                    block.innerHTML = block.innerHTML + '<div class="card"> <img src="img/'+folder+'/' + i%7 + '.jpg" alt="img' + i%7 + '"/>'+'<div class= "card-content" ><h3 class="card-name">'+names[i%7]+'</h3>'+'<br>'+'<a href="ad.php" >здесь могла быть ваша реклама</a> <br><h6 class="card-text">'+textes[i%7]+'</h6>'+"</div></div>";
                    //block.innerHTML = block.innerHTML + names[i%7]+'<br>';
					//block.innerHTML = block.innerHTML + textes[i%7]+"</div>";
					}
                }
            });
           
        </script>
    
    </body>
</html>
