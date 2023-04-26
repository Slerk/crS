<?php session_start();
//require_once '../DB.php';
require '../controllers/adminUserReg.php';
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

              <form  name="form" id="form" action="" method="post">
                <i class="far fa-user"></i>
                   <h1 class="re h3 mt-4 fw-normal text-muted">Форма регистрации</h1>

                     <div class="alert alert-danger mt-2" id="block"></div>

                <div class="form-floating  ">
             <input type="login" class="form-control mt-5 col-auto" id="login" placeholder="Login">
             <label for="floatingInput">Login</label>
           </div>
           <div class="form-floating ">
             <input type="email" class="form-control" id="email" placeholder="Email">
             <label for="floatingPassword">Email</label>
           </div>
           <div class="form-floating ">
             <input type="password" class="form-control" id="password" placeholder="Password">
             <label for="floatingPassword">Password</label>
           </div>

           <div class="form-check">

             <input name="admin" class="form-check-input"  type="checkbox"   id="admin" >

             <label class="form-check-label" for="flexCheckDefault">
               Права администратора
             </label>
           </div>

           <button class="btn btn-lg btn-primary col-12 mt-5" id="but_regAdmin" type="submit">Регистрация</button>



           <p class="podv mt-5  text-muted">© 2020–2021</p>
              </form>

  </div>
</div>

</div>




<!-- ФУТЕР -->

<?php require_once '../include/footer.php'  ?>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$('#but_regAdmin').click(function () {
var login = $ ('#login').val();
var email = $ ('#email').val();
var password = $ ('#password').val();
var admin = 0

                if ($('#admin').prop('checked'))
                  {
                      admin = 1;
                  }


$.ajax({

  url:'../controllers/adminUserReg.php',
  type : 'POST',
  cahe : false ,
  data : {'login' : login,'email' : email,'password' : password,'admin' : admin,},
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

<!-- Бутстрап javaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> -->

</body>
</html> -->
