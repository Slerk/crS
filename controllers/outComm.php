<?php
session_start();
  require_once '../DB.php';

      $sql = 'SELECT * FROM `comment` WHERE `post_id` = :id ORDER BY `id`DESC';
    global $connect;
  $query = $connect->prepare($sql);
  // $id = $_POST['id'];
  $query->execute([$id]);

$comments = $query->fetchAll(PDO::FETCH_OBJ);

$str = '';
foreach ($comments as $key) {
// tt($comments);
//
 echo "<div class='alert text-dark alert-secondary  mb-2'>
      <h4>$key->name</h4>

      <p>$key->mess</p>

      </div>";

}

