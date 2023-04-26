<?php
session_start();
require_once '../DB.php';
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delPost_id'])) {
        global $connect;
    $id = $_GET['delPost_id'];

    $sql = "DELETE FROM `post` WHERE `id` = $id";
    $query = $connect->prepare($sql);
    $query->execute();

    header('location: ../admin/postsAll.php');

}
 ?>
