<?php
session_start();
include "../controllers/UserRegistration.php";
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

          <form action="auth.php" method="post">
            <div class="autBod">
            <i class="far fa-user"></i>
          </div>
               <h1 class="re h3 mt-5 mb-3 fw-normal text-muted">Вход в аккаунт</h1>
                        <p><?=$error;?></p>

            <div class="form-floating ">
         <input type="login" class="form-control mt-5" name="login" id="login" placeholder="login">
         <label for="floatingInput">Login</label>
       </div>

       <div class="form-floating ">
         <input type="password" class="form-control" name="password" id="password" placeholder="password" >
         <label for="floatingPassword">Password</label>
       </div>

       <button class="btn btn-lg btn-primary col-12 mt-5" name="but_reg" type="submit">Войти</button>


       <div class="butBack">
    <a href="/" class="btn btn-dark col-12 mt-5">На главную</a>
      </div>
       <p class="podv_auth mt-5  text-muted">© 2020–2021</p>
          </form>

      </div>

  </div>

</body>

<!-- Бутстрап javaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>
