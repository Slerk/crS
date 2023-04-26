<?php
session_start();
require_once '../DB.php';

        global $connect;
        $log = $_SESSION['login'];

//tt($log);
        $sql = "SELECT id FROM `users` WHERE login='$log'";
        $query = $connect->prepare($sql); //подготовка запроса
        $query->execute();

        $user = $query->fetchAll(PDO::FETCH_ASSOC);

//                    tt($user[0]['id']);
    $_SESSION['clientId'] = $user[0]['id'];


    if(!empty($_SESSION['clientId']) && !empty($_GET['prodId']))
    {
        $clientId = $_SESSION['clientId'];
        $prodId = $_GET['prodId'];

        $sql = "SELECT id FROM post";

        global $connect;
        $query = $connect->prepare($sql); //подготовка запроса
        $query->execute();

        $products = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($products as $key=> $value) {

            if(in_array($prodId, $value))
            {
                // И поле added, если надо
                $query = "INSERT INTO basket (clientId, productId) value ($clientId, $prodId)";
                $query = $connect->prepare($query);
                $query->execute();

                header('location: ../content/books.php');
            }
        }
    }
