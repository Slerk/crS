<?php
    session_start();
    require_once '../DB.php';
    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['deleteProd_id'])) {
        global $connect;
        $id = $_GET['deleteProd_id'];

        $sql = "DELETE FROM `basket` WHERE `id` = $id";
        $query = $connect->prepare($sql);
        $query->execute();

        header('location: ../content/productsBuy.php');

    }