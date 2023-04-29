<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваши предпочтения</title>

    
<!---css file link--->
<link rel="stylesheet" type="text/css" href="style_work.css">
<link rel="stylesheet" type="text/css" href="style_asking.css">
   <!---icons link from boxicons--->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<!---icons link from remixicon--->
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

<!---google fonts usage--->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">

<!---swipe
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>-->


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
 
    <section class="asking">
      <h1>Выберите то, что вам больше нравится</h1>
      <div class="test-boxes">
        <form class="text" action="index.php" method="post"><button  class="choose" name="btn_1" id="1Pic" data-title="Физический отдых"><img src="img_test/Ph.jpg" alt="Физ" class="round"></button>
        <p>Он охватывает всё то, что помогает организму восстановиться и прийти в норму. Это не только сон, дрёма или возможность полежать, но и, например, массаж, спа-процедуры, тёплые ванны, расслабляющие занятия йогой или стретчингом и другие приятные для тела практики.</p>
        </form>
        <form  class="text" action="index.php" method="post"><button  class="choose" name="btn_2" id="2Pic" data-title="Ментальный отдых"><img src="img_test/Ment.jpg" alt="Мент" class="round"></button>
      <p>Этот вид отдыха затрагивает умственные процессы и нужен, когда человека переполняют мысли или он много занимается интеллектуальной деятельностью. Ментальный отдых может включать прогулку или релаксацию посреди напряжённого дня, ведение дневника и другие способы «разгрузить голову».</p></form>
        <form  class="text" action="index.php" method="post"><button  class="choose" name="btn_3" id="3Pic" data-title="Эмоциональный отдых"><img src="img_test/Emot.jpg" alt="Эмоц" class="round"></button>
      <p>Он нужен для того, чтобы успокоить бурю чувств и переживаний, оставаться искренним с собой и окружающими. Такой отдых требуется всем, но особенно тем, кто постоянно испытывает стресс, вынужден угождать другим людям и прятать свои настоящие эмоции.</p>
      </form>
        <form  class="text" action="index.php" method="post"><button  class="choose" name="btn_4" id="4Pic" data-title="Социальный отдых"><img src="img_test/Soc.jpg" alt="Соц" class="round"></button>
      <p>Это отдых от общения, особенно от напряжённого и неприятного, провоцирующего стресс. Формат такого отдыха подразумевает возможность приятно провести время наедине с собой или побыть среди людей, рядом с которыми спокойно и комфортно.</p>
      </form>
        <form  class="text" action="index.php" method="post"><button  class="choose" name="btn_5" id="5Pic" data-title="Сенсорный отдых"><img src="img_test/Sensor.jpg" alt="Сенсор" class="round"></button>
      <p>Он особенно нужен, когда мы перегружаем свои органы чувств сенсорными стимулами: слишком много времени проводим за компьютером, постоянно что-то слушаем и смотрим. Сенсорным отдыхом может стать прогулка по парку, день вдали от экранов и гаджетов, дрёма в тишине и темноте.</p>
      </form>
        <form  class="text" action="index.php" method="post"><button  class="choose" name="btn_6" id="6Pic" data-title="Творческий отдых"><img src="img_test/Art.jpg" alt="Твор" class="round"></button>
        <p>Такой отдых требуется тем, кто чувствует, что застрял, выгорел, переживает творческий блок и не может найти вдохновение или хорошую идею. Преодолеть всё это помогут любые креативные занятия, которые человек включает в свою жизнь ради удовольствия, а не ради результата или заработка: поход на мастер-класс или в музей, хобби.</p>
      </form>
        <form  class="text" action="index.php" method="post"><button  class="choose" name="btn_7" id="7Pic" data-title="Духовный отдых"><img src="img_test/Spir.jpg" alt="Дух" class="round"></button>
        <p>Неважно, верит ли человек в бога или нет, у него в любом случае время от времени возникает потребность в общении с собой и с окружающим его миром. Духовным отдыхом, по мнению Сандры Далтон-Смит, может быть молитва, медитация, занятие йогой, выезд на природу.</p>
      </form>
</div>
      
    </section>


</body>
</html>