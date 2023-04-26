<?php session_start();
require_once '../DB.php';
include '../controllers/cart.php';

    $sql ='SELECT * FROM `post` WHERE `id`=:id';
    global $connect;
    $id =$_GET['id'];
    $query = $connect->prepare($sql);
    $query->execute(['id' =>$id]);

    $secondBooks = $query->fetch(PDO::FETCH_OBJ);

    $id = $secondBooks->id;

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


</div>
<div class="container marketing">
<!-- Верхние разделы закончились -->

    <hr class="featurette-divider">

    <div class="row ">
      <div class="im col-md-6 ">

         <img src="../img/<?=$secondBooks->img;?>"  alt="post">

      </div>
      <div class="col-md-6 ">
       <h2  class="featurette-heading"><?=$secondBooks->title;?> </h2>
       <?=$secondBooks->content;?>
<!--          <a href='shopCart.php?prodId={$item['id']}'> Добавить в корзину </a>-->
          <p><a class="price mt-3 ""><?=$secondBooks->price;?></a></p>
          <a class="mt-3 btn btn-info cart" href='../controllers/cart.php.?prodId=<?=$id;?>'> Добавить в корзину </a>
<!-- <p><a class="mt-3 btn btn-info cart" href="?cart=add&id=--><?//=$id;?><!--" data-id="--><?//=$id;?><!--">В корзину</a></p>-->


      </div>


    </div>



    <hr class="featurette-divider">



    <h3 class="mt-5">Комментарии</h3>
    <!-- обработка на этой же странице -->

<div id="allMessages" class="allMessages text-justify">

  <?php
require_once '../controllers/outComm.php';
    ?>

</div>

<?php if(empty($_SESSION['login'])):?>
<p>Чтобы оставить комментарий,вы должны зарегистрироваться!</p>
<?php else :?>
    <form name="Formcom" id="Formcom" action="" method='post'>
<input name="id" id="id" value="<?=$id?>" type="hidden">
           <div class="alert alert-danger mt-2" id="block"></div>
      <label for="floatingInput">Ваше имя</label>
      <!-- дополнительно если пользователь зарегистрирован и мог оставлять коммментарии
      от своего логина,пропишем это в команде куки value="$_COOKIE['log']?>" -->
      <input type="text" name="username" value="<?=$_SESSION['login']?>" id = "username" class="form-control nav-link disabled">
<!--     <input type="text" name="username"  id = "username" class="form-control">
 -->
    <label for="floatingInput">Сообщение</label>
    <textarea name="message" id = "message" class="form-control"></textarea>
       <button class="btn btn-lg btn-primary col-md-2 mt-4 " id="but_comment" type="submit">Отправить</button>


    </form>
<?php endif;?>
<hr class="featurette-divider">
  </div>

<!-- ФУТЕР -->

<?php require_once '../include/footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>


$('#but_comment').click(function () {
var username = $ ('#username').val();
var message = $ ('#message').val();
var id = $ ('#id').val();

$.ajax({

  url:'../controllers/comments.php',
  type : 'POST',
  cahe : false ,
  data : {'username' : username,'message' : message,'id' : id,},
  dataType : 'html',


        success: function (data) {
         if (data=='Готово'){
          $('.results').html(data);
         $('#block').hide();

         alert('Комментарий отправлен!');

         document.Formcom.reset();

        }
         else{
         $('#block').show();
         $('#block').text(data);
        }
        }


});
});

;

</script>

<!--    <script src="../js/main.js"></script>-->

<!-- Бутстрап javaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>
</html>
