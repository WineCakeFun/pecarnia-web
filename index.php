<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PECarnia</title>
    <link rel="icon" href="img/pec_icon.jpg">    

       <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="css/styles.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>   

  <header class="masthead">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <img src="img/pec_icon.jpg"  class="bd-placeholder-img rounded-circle" width="40" height="40">
    <div class="container-fluid">
          <a class="navbar-brand" href="#">PECarnia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="navbar-collapse">
            <ul class="navbar-nav">
            <div class="row">
              <div class="col-md-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Головна</a>
              </li>
              </div>
              <div class="col-md-auto">
              <li class="nav-item">
                <a class="nav-link" href="#about">Про нас</a>
              </li>
              </div>
              <div class="col-md-auto">
              <li class="nav-item">
                <a class="nav-link" href="#products">Продукція</a>
              </li>
              </div>
              <div class="col-md-auto">
              <li class="nav-item">
                <a class="nav-link" href="catalog.php">Каталог</a>
              </li>
              </div>
              <div class="col-md-auto">
              <li class="nav-item">
                <a class="nav-link" href="#cooperation">Співробітництво</a>
              </li>
              </div>
              <div class="col-md-auto">
              <li class="nav-item">
                <a class="nav-link" href="#contacts">Контакти</a>
              </li>
              </div>
            </ul>
          </div>
    </div>
          
            <a href="admin_main.php" class="btn btn-danger" role="button" aria-pressed="true">Адміністратор</a>

  </nav>
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto">PECarnia</h1>
                    <h2 class="text-white-50 mx-auto">Panem Et Circenses - Хліба та видовищ</h2>
                </div>
            </div>
  </header>
<main>



<hr class="featurette-divider">

 <div class="text-center py-5 px-3" id="products">
    <h1>Асортимент</h1>
    <p class="lead">Перегляньте представлений нами асортимент<br>та насолоджуйтеся найкращими хлібобулочними виробами.</p>
  </div> 

  <div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="img/pix1.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h3>Baguette ~ Багет</h3>
          <p>Французька булка — довга і тонка булка білого хліба, м'якого всередині, 
            і обов'язково з хрусткою скоринкою, іноді присипаного борошном чи якимось насінням.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/pix2.jpg" class="d-block w-100"s>
        <div class="carousel-caption d-none d-md-block">
          <h3>Tortilla ~ Тортілья</h3>
          <p>Мексиканський хліб. Являє собою тонкий прісний коржик з кукурудзяної муки.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/pix3.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h3>Loaf ~ Коровай</h3>
          <p>Слов'янський круглий і великий хліб.
             Випікають з тіста на основі пшеничного борошна вищого сорту. Прикрашають різними фігурками з тіста.</p>
        </div>
      </div>

      <div class="item">
        <img src="img/pix4.jpg" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h3>Ciabatta ~ Чіабатта</h3>
          <p> Італійський білий хліб, виготовлений з пшеничного борошна 
            та дріжджів. У перекладі з італійської буквально означає «килимові тапочки».</p>
        </div>
      </div>
  
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<hr class="featurette-divider">

<div class="text-center py-5 px-3" id="about">
    <h1>Про нас</h1>
    <p class="lead">Саме в нас Ви можете скуштувати найсмачнішу різноманітну випічку.
      <br>Ми випікаємо свої вироби за аторськими рецептами талановитих пекарів з різних країн.
      <br>Назва нашого бренду починається з трьох великих букв, які розшифровуються у відому фразу - 
      Panem Et Circenses, <br>що в перекладі з латині означає "Хліба та видовищ".</p>
  </div> 

<hr class="featurette-divider">

<div class="text-center py-5 px-3" id="cooperation">
    <h1>Співробітництво</h1>
    <p class="lead">Ви можете дізнатися, з якими саме компаніями ми співпрацюємо<br>та бути впевненими, що Ваше замовлення буде виконано швидко і якісно.</p>
  </div> 



<div class="container cooperation">


  <div class="row">
    <div class="col-lg-12">
      <img src="img/nium.jpg"  class="bd-placeholder-img rounded-circle" width="140" height="140">
      <h2>Nium</h2>
      <p>Перевірена часом кур'єрська компанія,<br> яка є одним з найкращих постачальників.</p>
      <p><a class="btn btn-secondary" href="#" role="button">Перейти на сторінку &raquo;</a></p>
    </div>
  </div>
</div>

<hr class="featurette-divider">

 <div class="text-center py-5 px-3" id="products">
    <h1>Новини</h1>
    <p class="lead">Дізнавайтеся про нові пропозиції з перших вуст.</p>
  </div> 

  <?php include "news.php";?>

<hr class="featurette-divider">

  <div class="text-center py-5 px-3" id="contacts">
    <h1>Контакти</h1>
    <p class="lead">Якщо у Вас виникли якісь запитання,<br>Ви можете зв'язатися з нами за телефонами або скориставшись формою.</p>
    <p class="lead"><img src="img/vodafone-logo.png"  class="bd-placeholder-img rounded-circle" width="34" height="30"> +380 99 35 78 993</p>
    <p class="lead"><img src="img/lifecell-logo.png"  class="bd-placeholder-img rounded-circle" width="30" height="30"> +380 63 86 49 378</p>
    <p class="lead"><img src="img/kievstar-logo.png"  class="bd-placeholder-img rounded-circle" width="30" height="30"> +380 97 37 02 349</p>
  </div> 
<hr class="featurette-divider">

  <div class="text-center py-5 px-3" id="form">
    <h1>Форма</h1>
    <p class="lead">Будь ласка, заповнить форму і ми зв'яжемося з Вами найближчим часом.</p>
  </div> 


<?php include "contact.php";?>



</main>
   
<hr class="featurette-divider">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <footer class="container-fluid">
  <p>&middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    <p class="text-white-50">&copy; 2021 PECarnia  </p>
    <p class="float-end"><a href="#">Back to top</a></p>
  </footer>
</nav>   
  </body>
</html>
