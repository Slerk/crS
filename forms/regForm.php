<?php
session_start();
// require_once "../controllers/reg.php";
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
<header>


</header>
<!-- КАРУСЕЛЬ -->

<body class="registr_body" >

  <div class="d-flex justify-content-center align-items-center container ">

      <div class="row ">

          <form name="form" id="form" action="" method="post">
            <i class="far fa-user"></i>
               <h1 class="re h3 mt-5 mb-3 fw-normal text-muted">Форма регистрации</h1>

                 <div class="alert alert-danger mt-2" id="block"></div>

            <div class="form-floating ">
         <input type="login" class="form-control mt-5" id="login" placeholder="Login">
         <label for="floatingInput">Login</label>
       </div>
       <div class="form-floating">
         <input type="email" class="form-control" id="email" placeholder="Email">
         <label for="floatingPassword">Email</label>
       </div>
       <div class="form-floating ">
         <input type="password" class="form-control" id="password" placeholder="Password">
         <label for="floatingPassword">Password</label>
       </div>

       <button class="btn btn-lg btn-primary col-12 mt-5" id="but_reg" type="button">Регистрация</button>


       <div class="butBack">
    <a href="/" class="btn btn-dark col-12 mt-5">На главную</a>
      </div>
       <p class="podv mt-5  text-muted">© 2020–2021</p>
          </form>

      </div>

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
  // передаем данные через аякс

  $('#but_reg').click(function () {
  var login = $ ('#login').val();
  var email = $ ('#email').val();
  var password = $ ('#password').val();

  $.ajax({

    url:'../controllers/UserRegistration.php',
    type : 'POST',
    cache : false ,
    data : {'login' : login,'email' : email,'password' : password,},
    dataType : 'html',


          success: function (data) {
           if (data ==''){
           $('#block').hide();
           alert('Вы успешно зарегистрированы!');
           document.form.reset();


          }
           else{
           $('#block').show();
           $('#block').text(data);
          }
          }


  });
  });

  </script>


</body>

<!-- Бутстрап javaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>
