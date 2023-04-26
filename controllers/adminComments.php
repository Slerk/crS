<?php
session_start();
require_once '../DB.php';

$sql = 'SELECT * FROM `comment` ';
$query = $connect->prepare($sql); //подготовка запроса
    $query->execute();

    $comments = $query->fetchAll(PDO::FETCH_ASSOC);
