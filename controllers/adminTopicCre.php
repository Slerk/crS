<?php
    session_start();
//    require_once "../DB.php";
require 'DBmethods.php';


        $error = '';

        if (isset($_POST['name_topic'])){



            $name_topic = $_POST['name_topic'];
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


        }else{
            $error = 'Введите название категории раздела';
        }

        if ($error != '') {
            echo $error;
            exit();
        } else {
            addAdminTopic($name_topic);

        }

