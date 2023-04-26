<?php
    session_start();
    $user = 'root';
    $password = 'root';
    $db = 'carShop';
    $host = '127.0.0.1';

    $dsn = "mysql:host=$host;dbname=$db";

    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $connect = new PDO($dsn, $user, $password, $options);







    function tt($value){
        echo '<pre>';
        print_r($value);
        echo '</pre>';
        exit();
    }

 ?>
