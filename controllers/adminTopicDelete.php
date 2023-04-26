<?php
session_start();
require_once '../DB.php';
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delTop_id'])) {

    $id = $_GET['delTop_id'];

    $sql = "DELETE FROM `topics` WHERE `id` = $id";
    $query = $connect->prepare($sql);
    $query->execute();

    header('location: ../admin/topicsAll.php');

}
 ?>
