<?php
session_start();
require_once '../DB.php';


    if (isset($_POST['topics'])) {

        $top = $_POST['topics'];

        if (!empty($top)) {

            foreach ($top as $item) {

                $id = $top;
                $matches = implode(',', $id);
                $sqlP = "SELECT * FROM `post` WHERE id_topic IN ($matches)";
//                $sqlP = "SELECT * FROM `post` WHERE id_topic = '$id'";
                global $connect;
                $queryP = $connect->prepare($sqlP); //подготовка запроса
                $queryP->execute();

                $topic = $queryP->fetchAll(PDO::FETCH_ASSOC);

            }

            }


    }else{

        $sql = 'SELECT * FROM `post` ORDER BY id DESC ';
        global $connect;
        $query = $connect->prepare($sql); //подготовка запроса
        $query->execute();

        $topic = $query->fetchAll(PDO::FETCH_ASSOC);
    }
