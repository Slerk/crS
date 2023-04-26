<?php
session_start();
require 'DBmethods.php';
$error ='';

$id = '';
$name_topic = '';

// Редактирование категории

    if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {

        $id = $_GET['id'];

    // выборка названия категории по идШнику
        global $connect;
        $top = "SELECT * FROM topic WHERE id='$id'";
        $result_top = $connect->prepare($top);
        $result_top->execute();

        $final_top = $result_top->fetchAll(PDO::FETCH_ASSOC);


            foreach ($final_top as $key => $value) {

              $name_topic = $value['name_topic'];
              $id = $value['id'];
            }

        }


        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])) {

            $id = $_POST['id'];



            $name_topic = $_POST['name_topic'];
            if ($name_topic == ''){
                $error = 'Введите название категории раздела';
            }
            $name_topic = trim($name_topic);

            if ($name_topic == ''){
                $error = 'Введите название категории раздела';
            }

            $strlenTop = strlen($name_topic);

            if ($strlenTop <= 2 && $strlenTop != '') {
                $error = 'Поле названия категории слишком короткое';
            }

            if (preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/", $name_topic)) {

                $error = 'Поле категории  не может содержать символы';

            }

            AdminTopicUnice($name_topic);

            if ($error != '') {
                echo $error;
                exit();
            } else {
                editTopic($name_topic,$id);
//        header('location: ../admin/topicsAll.php');
            }

        }




//
//          $name_topic = $_POST['name_topic'];
//          $id = $_POST['id'];
//
//
//        $error ='';
//
//        if(empty($name_topic)) {
//          $error = 'Заполните поле';
//        }
//
//        if (strlen($name_topic)<=4 ) {
//          $error = 'Слишком короткое название';
//        }
//
//
//        // Проверка на повторение
//        $quer = "SELECT name_topic FROM topics WHERE name_topic='$name_topic'";
//        $result = $connect->prepare($quer);
//        $result->execute();
//
//        $final = $result->fetchAll(PDO::FETCH_COLUMN);
//
//        if (!empty($final)) {
//          $error = "Такая категория уже существует!";
//        }
//
//
//
//        if ($error == '') {
//
//
//
//          $sql = "UPDATE `topics` SET  `name_topic` = '$name_topic' WHERE id = '$id'";
//          $query = $connect->prepare($sql);
//          $query->execute();
//
//
//          $fin = $query->fetch(PDO::FETCH_ASSOC);
//          header('location: ../admin/topicsAll.php');
//        }
//        }
