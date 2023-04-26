<?php session_start();
// require_once '../DB.php';
require_once '../controllers/adminComments.php';
require_once '../controllers/adminCommentDelete.php';
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
              <th>Автор</th>
              <th>Краткое cодержание</th>
              <th>ID поста</th>
              <th>Удалить юзера</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php foreach ($comments as $key => $value)  :?>
                <tr>
                 <?php //tt($comments);?>
                  <td><?php echo $value['id'];?></td>
                  <td><?php echo $value['name'];?></td>
                  <td><?php echo substr($value['mess'],0,10);?></td>
                  <td><?php echo $value['post_id'];?></td>
                  <td><?php ?><a href="commentsAll.php?delete_id=<?=$value['id'];?>" class="btn btn-danger">Удалить</a></td>

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

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script> -->

</body>
</html>
