<?php session_start();
require_once 'DB.php';
?>

<!DOCTYPE html>
<html lang="ru" >
  <head>
    <!-- Бутстрап цсс -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='css/style.css'>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>CarShop</title>
  </head>


<body>
<!-- Верхняя менюшка -->
<?php require_once 'include/header.php'; ?>
<!-- КАРУСЕЛЬ -->

 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-indicators">
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
   </div>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="world-of-warcraft-world-of-warcraft-classic-dark-portal-world-of-warcraft-the-burning-crusade-alliance-hd-wallpaper-preview.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>Метка первого слайда</h5>
         <p>Некоторый репрезентативный заполнитель для первого слайда.</p>
       </div>
     </div>
     <div class="carousel-item">
       <img src="576.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>Метка второго слайда</h5>
         <p>Некоторый репрезентативный заполнитель для второго слайда.</p>
       </div>
     </div>
     <div class="carousel-item">
       <img src="16161.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>Метка третьего слайда</h5>
         <p>Некоторый репрезентативный заполнитель для третьего слайда.</p>
       </div>
     </div>
   </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Предыдущий</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Следующий</span>
   </button>
 </div>
<!-- Конец карусели -->

<!-- Верхние разделы -->
<!--<div class="tps container">-->
<!--<div class="row">-->
<!---->
<!--  <div class="tops col-md-4">-->
<!--      <h2>Книги</h2>-->
<!--      <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>-->
<!--      <p><a class="btn btn-secondary" href="content/books.php">Изучить »</a></p>-->
<!--    </div>-->
<!---->
<!--    <div class="tops col-md-4">-->
<!--        <h2>Томы</h2>-->
<!--        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>-->
<!--        <p><a class="btn btn-secondary" href="content/tom.php">Ознакомиться »</a></p>-->
<!--      </div>-->
<!---->
<!--      <div class="tops col-md-4">-->
<!--          <h2>Ролики</h2>-->
<!--          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>-->
<!--          <p><a class="btn btn-secondary" href="content/vidos.php">Посмотреть»</a></p>-->
<!--        </div>-->
<!--</div>-->
<!---->
<!--</div>-->
<div class="container marketing">
<!-- Верхние разделы закончились -->



    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Погрузитесь в мир World of Warcraft:<span class="text-muted">Legion.</span></h2>
        <p class="lead">Гул’дан был изгнан из Дренора Архимондом и отправлен на Расколотые острова, чтобы начать вторжение Пылающего Легиона в Азерот. Там он нашёл и освободил Иллидана Ярость Бури, которого Майев Песнь Теней заковала в кристалл в Казематах Стражей после битвы в Чёрном Храме. Верховный маг Кадгар, узнав об этом, отправляется в Штормград, к королю Вариану Ринну, дабы предупредить его об угрозе.</p>
      </div>
      <div class="firs col-md-5">
         <img src="World_of_Warcraft_Legion_Cover_Art.jpg"  alt="...">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Сражайтесь и побеждайте вместе с героями. <span class="text-muted">Откройте новый мир.</span></h2>
        <p class="lead">Повествование нового дополнения начинается вскоре после окончания событий Legion. Ценой огромных жертв народам Азерота удалось остановить крупнейшее вторжение Пылающего Легиона и одержать победу на Аргусе. Однако Альянс и Орда оказались не готовы забыть былые обиды, вследствие чего разгорается новая война за ресурсы и влияние, охватившая весь мир. Противоборствующие стороны стремятся завладеть азеритом — ресурсом, появившимся на поверхности мира вскоре после войны с Легионом.

В самом начале новой войны, именуемой «Войной шипов», между фракциями произошли события, которые привели к сожжению мирового древа Тельдрассил и новой битве за Лордерон. По итогам этих сражений Орда заняла доминирующее положение в Калимдоре, а Альянс укрепил свои позиции в Восточных королевствах. Для продолжения конфликта обе стороны критично нуждаются в могущественном флоте.

Поиски новых союзников и флота привели враждующие фракции к ранее изолированным территориям Великого моря: Альянс нашёл помощь у Кул-Тираса — могущественного морского государства, родины Джайны Праудмур. В то же время Орда заключила союз с древней империей Зандалара, прародиной всех троллей.</p>
      </div>
      <div class="firs col-md-5 order-md-1">
        <img src="1200px-World_of_Warcraft_Battle_for_Azeroth_Box_Shot.jpg"  alt="...">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Изведайте новое. <span class="text-muted">Приобретайте союзников.</span></h2>
        <p class="lead">Несколько лет прошло с тех пор, как Пылающий Легион был повержен у горы Хиджал, и теперь обитатели Азерота продолжают восстанавливать свои разорённые земли. С новыми силами герои Альянса и Орды приступили к исследованию внешнего мира по ту сторону Тёмного Портала.

Демоны вернулись, чтобы продолжить Пылающий поход.</p>
      </div>
      <div class="firs col-md-5">
           <img src="World_of_Warcraft_The_Burning_Crusade_Cover_Art.jpg"  alt="...">


      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>

<!-- ФУТЕР -->

<?php require_once 'include/footer.php'; ?>


<!-- Бутстрап javaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> -->

</body>
</html>
