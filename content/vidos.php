<?php session_start();
require_once '../DB.php';
?>

<!DOCTYPE html>
<html lang="ru" >
  <head>
    <!-- Бутстрап цсс -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='../css/style.css'>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>WoW книги </title>
  </head>


<body>
<!-- Верхняя менюшка -->
<?php require_once '../include/header.php'; ?>
<!-- КАРУСЕЛЬ -->

 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-indicators">
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
     <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
   </div>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="../smeshnye.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>Метка первого слайда</h5>
         <p>Некоторый репрезентативный заполнитель для первого слайда.</p>
       </div>
     </div>
     <div class="carousel-item">
       <img src="" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>Метка второго слайда</h5>
         <p>Некоторый репрезентативный заполнитель для второго слайда.</p>
       </div>
     </div>
     <div class="carousel-item">
       <img src="" class="d-block w-100" alt="...">
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
<div class="tps container">
<div class="row">

     <div class="tops col-md-4">
      <h2>Книги</h2>
      <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      <p><a class="btn btn-secondary" href="../content/books.php">Изучить »</a></p>
    </div>

    <div class="tops col-md-4">
        <h2>Томы</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="../content/tom.php">Ознакомиться »</a></p>
      </div>

      <div class="tops col-md-4">
          <h2>Ролики</h2>
          <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
          <p><a class="btn btn-secondary" href="../content/vidos.php">Посмотреть»</a></p>
        </div>


</div>

</div>
<div class="container marketing">
<!-- Верхние разделы закончились -->



    <!-- START THE FEATURETTES -->


    <hr class="featurette-divider">

<div class="row justify-content-md-center">
      <div class="mt-5">
        <h2 class="ml-5 featurette-heading">Wrath of the Lich King. <span class="text-muted"></span></h2>
        <p class="lead">Когда Солнечный Колодец был очищен от скверны, в мире наступило спокойствие, причем настолько безмятежное, что просто не могло не вызвать подозрений. Внезапно, как по сигналу, войска Плети приступили к планомерному нападению на города по всему Азероту уже и за пределами Восточных Королевств. Вождь Тралл был вынужден принять решительные меры и направил в Нордскол экспедиционный корпус под началом Гарроша Адского Крика. Тем временем в Штормград, наконец, вернулся король людей Вариан Ринн и занял свое законное место на престоле. На бой с Королем-личом он выставил внушительное войско Альянса под командованием Болвара Фордрагона. Кроме того, воины Альянса должны были подавить любое сопротивление Орды.</p>
      </div>

      <div class= "col-lg-6">
       <iframe width="560" height="315" src="https://www.youtube.com/embed/L3Mg6lk6yyA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>


    <hr class="featurette-divider">


  <div class="mt-5">
        <h2 class="ml-5 featurette-heading">Mists of Pandaria. <span class="text-muted"></span></h2>
        <p class="lead">Вам удалось одолеть Смертокрыла и спасти род драконов от гибели, а весь мир — от уничтожения. Теперь вам предстоит ступить на землю нового неведомого континента и окунуться в мрачные тайны, которые с незапамятных времен таит в себе Пандария. В расселинах забытых подземелий сокрыты бесчисленные сокровища. Древние империи, бесследно сгинувшие во времена Раскола, восстают из небытия. Над Пандарией простерлась тень старинного зла — и если не отстоять континент сегодня, завтра может быть слишком поздно.</p>
      </div>
<p>
      <div class= "col-lg-6">
       <iframe width="560" height="315" src="https://www.youtube.com/embed/O_5gzXKnGYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </p>
<hr class="featurette-divider">



 <div class="mt-5">
        <h2 class="ml-5 featurette-heading">Legion <span class="text-muted"></span></h2>
        <p class="lead">Летом 2016 г. полчища Пылающего Легиона вновь двинутся на Азерот. Нападение начнется с высадки на Расколотые острова. Смотрите новый вступительный ролик World of Warcraft: Legion и готовьтесь к бою! Все подробности о дополнении и запись на участие в бета-тестировании — на сайте http://wowlegion.com.</p>
      </div>
<p>
      <div class= "col-lg-6">
       <iframe width="560" height="315" src="https://www.youtube.com/embed/AkhjrRR9J7A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </p>
<hr class="featurette-divider">




 <div class="mt-5">
        <h2 class="ml-5 featurette-heading">Cataclysm. <span class="text-muted"></span></h2>
        <p class="lead">Дракон Смертокрыл вырвался из своего каменного логова в Подземье, царстве земли в Обители стихий. Всю планету избороздили пылающие разломы, а на прибрежные регионы обрушились гигантские волны. Поверхность Азерота от Тысячи Игл до Выжженных земель преобразилась под натиском стихий. Ныне силам Орды и Альянса предстоит отстоять свой дом в схватке со Смертокрылом и его приспешниками, смирившись с мыслью, что мир, который они знали прежде, изменился... навсегда.</p>
      </div>
<p>
      <div class= "col-lg-6">
       <iframe width="560" height="315" src="https://www.youtube.com/embed/tp-utWVDpIQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </p>
<hr class="featurette-divider">



 <div class="mt-5">
        <h2 class="ml-5 featurette-heading">The Burning Crusade. <span class="text-muted"></span></h2>
        <p class="lead">
Владыка Судеб Каззак вновь открыл Темный портал в Запределье, из которого в Азерот хлынули кровожадные демоны Пылающего Легиона. Эльфы крови и дренеи присоединились к экспедиционным силам Альянса и Орды, которые отправились через портал в самое сердце Запределья, чтобы нанести поражение демонам прямо в их логове. Вы готовы встать на защиту родного мира?</p>
      </div>
<p>
      <div class= "col-lg-6">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/DKYTgHzD9uE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </p>
<hr class="featurette-divider">




 <div class="mt-5">
        <h2 class="ml-5 featurette-heading">Shadowlands. <span class="text-muted"></span></h2>
        <p class="lead">
Граница между жизнью и смертью стерлась. Узнайте, что кроется по ту сторону привычного мира, в новой главе саги World of Warcraft — Shadowlands</p>
      </div>
<p>
      <div class= "col-lg-6">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/BHPPLdWeGiw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </p>
<hr class="featurette-divider">




 <div class="mt-5">
        <h2 class="ml-5 featurette-heading">Battle for Azeroth. <span class="text-muted"></span></h2>
        <p class="lead">
Противостояние Альянса и Орды вспыхнуло с новой силой. Начинается новая эпоха и новая война! </p>
      </div>
<p>
      <div class= "col-lg-6">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Xv1JzYDKoc8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </p>
<hr class="featurette-divider">


<div class="mt-5">
        <h2 class="ml-5 featurette-heading">Warlords of Draenor. <span class="text-muted"></span></h2>
        <p class="lead">
Гаррошу Адскому Крику удалось пройти через Темный Портал и объединить орочьи кланы прошлого в страшную военную машину — Железную Орду. Битва за Дренор начнется 13 ноября 2014 г. Сражайтесь в первых рядах!</p>
      </div>
<p>
      <div class= "col-lg-6">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/o_accAVzhoE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      </div>
    </p>
<hr class="featurette-divider">
  </div>
    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div>

<!-- ФУТЕР -->

<?php require_once '../include/footer.php'; ?>


<!-- Бутстрап javaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> -->

</body>
</html>
