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
<?php require_once '../include/header.php'  ?>

<div class="row ">
  <?php require_once '../include/aSide.php'  ?>



<div class="col-md-8">

    <div class="d-flex justify-content-center align-items-center container ">

              <form class="col-8"  name="formPost" id="formPost" action="" method="post" >
                <div class="icon">
                <i class="fas fa-clone"></i>
              </div>
                <!-- <i class="far fa-user"></i> -->
                <div class="zag" >
                   <h1 class="re h3 mt-4 fw-normal text-muted">Создать пост</h1>
                  </div>
                     <div type="text" class="alert alert-danger mt-2" id="block"></div>

                <div class="form-floating  ">
             <input  type="text" name="title" class="form-control mt-5 col-auto" id="title" placeholder="title">
             <label for="floatingInput">Заглавие</label>
           </div>

           <div class="input-group">
             <span class="input-group-text">With textarea</span>
             <textarea type="text" name="content" class="form-control" id="content"  aria-label="With textarea"></textarea>
           </div>

           <div class="input-group">
             <input name="img" type="file" class="form-control" id="img" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
             <button class="btn btn-outline-secondary" type="button" id="but_img">Button</button>
           </div>

  <div class="form-floating  ">
             <input  type="text" name="price" class="form-control mt-5 col-auto" id="price" placeholder="price">
             <label for="floatingInput">Цена</label>
           </div>

           <select name="topic" id="topic" class="form-select mb-2" aria-label="Default select example">
             <option selected>Выберите категорию</option>

             <?php
                global $connect;
             $sq = 'SELECT * FROM `topic` ';
             $qry = $connect->prepare($sq); //подготовка запроса
                 $qry->execute();

                 $topics = $qry->fetchAll(PDO::FETCH_ASSOC);

             foreach ($topics as $key => $value):

             ?>
             <option value="<?=$value['id'] ?>"><?=$value['name_topic'];?></option>
             <?php endforeach; ?>
           </select>


           <button class="btn btn-lg btn-primary col-12 mt-5" id="but_post" type="submit">Создать</button>



           <p class="podv mt-5  text-muted">© 2020–2021</p>
              </form>

  </div>
</div>

</div>

<!-- ФУТЕР -->

<?php require_once '../include/footer.php'  ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$('#but_post').click(function () {
var title = $ ('#title').val();
var content = $ ('#content').val();
var topic = $ ('#topic').val();

var img = $ ('#img').prop('files')[0];
    var price = $ ('#price').val();
  var form_data = new FormData();


  form_data.append('title', title);
  form_data.append('content', content);
  form_data.append('topic', topic);
    form_data.append('price', price);
  form_data.append('file', img);


$.ajax({

  url:'../controllers/adminPostCreate.php',
  contentType: false,
  processData: false,
  type : 'POST',
  cahe : false ,
  data : form_data,

    success: function (data) {
        if (data ==''){
            $('#block').hide();
            alert('Пост добавлен!');
            document.form.reset(data);


        }
        else{
            $('#block').show();
            $('#block').text(data);
        }
    }


});
});

</script>

<!-- Бутстрап javaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> -->

</body>
</html> -->
