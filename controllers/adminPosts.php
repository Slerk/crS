<?php
session_start();
require_once '../DB.php';

$sql = 'SELECT * FROM `post` ';
global $connect;
$query = $connect->prepare($sql); //подготовка запроса
    $query->execute();

    $posts = $query->fetchAll(PDO::FETCH_ASSOC);
// tt($posts);
