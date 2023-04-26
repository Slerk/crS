<header>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Never expand</a>
      <!-- <div class="row"> -->
        <div class="butons col-md-8 ">
          <?php  if(isset($_SESSION['login'])):?>
            <a href="../controllers/logOut.php" class="btn btn-dark">Выход</a>

              <a href="../content/productsBuy.php" class="btn btn-primary" >Корзина</a>


<!--            <button type="button" href="../content/productsBuy.php" class="btn btn-primary" data-toggle="modal" data-target="#cart-modal">-->
<!--                Корзина <span class="badge badge-light">--><!--</span>-->
<!--            </button>-->

          <?php else : ?>
          <a href="../forms/regForm.php" class="btn btn-dark">Регистрация</a>
          <a href="../forms/auth.php" id='but_com' class="btn btn-dark">Вход</a>

              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cart-modal">
                  Корзина <span class="badge badge-light">3</span>
              </button>

<?php  endif ; ?>

    </div>

    <div class="sesslog col-md-1">

 <?php echo $_SESSION['login'];  ?>
</div>

      <button class="navbar-toggler collapsed" type="button"
       data-bs-toggle="collapse" data-bs-target="#navbarsExample01"
       aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse" id="navbarsExample01" >
        <ul class="navbar-nav me-auto mb-2">
          <li class="nav-item">
            <!-- active - добавить в линк для выделения -->
            <a class="nav-link " aria-current="page" href="../content/books.php">Товары</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown01">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form>
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>

</header>
