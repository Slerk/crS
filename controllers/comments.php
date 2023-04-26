<?php
session_start();
//require_once '../DB.php';
require 'DBmethods.php';
    if (isset($_POST['username']) && ($_POST['message'])){

        $error = '';
        $id =$_POST['id'];
        $username = $_SESSION['login'];
        $username = trim($username);

        $message = $_POST['message'];


            $message = trim($message);

            $strlenMess = strlen($message);

            if ($strlenMess <= 5 && $strlenMess != '') {
                $error = 'Поле сообщения должно иметь хотя-бы 6 символов';
            }

            if (preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/", $message)) {

                $error = 'Поле может содержать только латиницу или кириллицу';

            }



    }else{
        $error = 'Введите сообщение';
    }
    if ($error != '') {
        echo $error;
        exit();
    } else {
        addUserComment($username,$message,$id);
//        global $connect;
//        $sql = 'INSERT INTO comment(name,mess,post_id) VALUES(?,?,?)';
//        $query = $connect->prepare($sql);
//        $query->execute([$username,$message,$id]);
//        echo 'Готово';
    }






