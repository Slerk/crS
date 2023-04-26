<?php session_start();
 require_once '../DB.php';

    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])) {

        $id = $_GET['delete_id'];
        global $connect;
        $sql = "DELETE  FROM users WHERE id = $id";
        $query = $connect->prepare($sql);
        $query->execute();

        header('location: ../admin/usersAll.php');

    }

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


<div class="row">
  <?php require_once '../include/aSide.php'  ?>


<div class="col-md-8">


      <h2>Section title</h2>
      <!-- col-md-6 -->
      <div class="us  table-responsive">
        <table class="striped">


        </table>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Логин</th>
              <th>Почта</th>
              <th>Удалить юзера</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <?php

                global $connect;
                $sql = 'SELECT * FROM `users` ';
                $query = $connect->prepare($sql); //подготовка запроса
                $query->execute();

                $user = $query->fetchAll(PDO::FETCH_ASSOC);

                ?>



              <?php foreach ($user as $key => $value) :?>
                <tr>
                  <td><?php echo $value['id'];?></td>
                  <td><?php echo $value['login'];?></td>
                  <td><?php echo $value['email'];?></td>
                  <td><?php ?><a href="usersAll.php?delete_id=<?=$value['id'];?>" class="btn btn-danger">Удалить</a></td>

            </tr>
<?php endforeach; ?>
          </tbody>
        </table>
      </div>
  </div>
</div>

<!-- ФУТЕР -->

<?php require_once '../include/footer.php'  ?>

<!-- Бутстрап javaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


</body>
</html>
