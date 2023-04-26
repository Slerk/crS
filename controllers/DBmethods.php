<?php
session_start();
require_once "../DB.php";
//require_once "UserRegistration.php";
//require "adminUserReg.php";

                function loginUnice($login)
                {

                    $query = "SELECT login FROM users WHERE login='$login'";
                    global $connect;
                    $result = $connect->prepare($query);
                    $result->execute();

                    $final = $result->fetchAll(PDO::FETCH_COLUMN);

                    if(!empty($final)){
                        echo $error = 'Такой Login уже занят';
                        exit();
                    }

                }

        function emailUnice($email){
            global $connect;
            $query = "SELECT email FROM users WHERE email='$email'";

            $result = $connect->prepare($query);
            $result->execute();

            $final = $result->fetchAll(PDO::FETCH_COLUMN);

            if(!empty($final)){
               echo $error = 'Такой Email уже занят';
               exit();
            }


        }

        function addUser($login,$email,$hash){
                global $connect;

             $query = "INSERT INTO users(login,email,password) VALUES(?,?,?)";
             $query = $connect->prepare($query);
             $query->execute([$login,$email,$hash]);

                $user = $query->fetch(PDO::FETCH_ASSOC);

        }

    function addAdminUser($login,$email,$hash,$admin){
        global $connect;

        $query = "INSERT INTO users(login,email,password,admin) VALUES(?,?,?,?)";
        $query = $connect->prepare($query);
        $query->execute([$login,$email,$hash,$admin]);

    }

    function AdminLoginUnice($login)
    {

        $query = "SELECT login FROM users WHERE login='$login'";
        global $connect;
        $result = $connect->prepare($query);
        $result->execute();

        $final = $result->fetchAll(PDO::FETCH_COLUMN);

        if(!empty($final)){
            echo $error = 'Такой Login уже занят';
            exit();
        }

    }

    function AdminEmailUnice($email){
        global $connect;
        $query = "SELECT email FROM users WHERE email='$email'";

        $result = $connect->prepare($query);
        $result->execute();

        $final = $result->fetchAll(PDO::FETCH_COLUMN);

        if(!empty($final)){
            echo $error = 'Такой Email уже занят';
            exit();
        }


    }

    function AdminTopicUnice($name_topic)
    {

        $query = "SELECT name_topic FROM topic WHERE name_topic='$name_topic'";
        global $connect;
        $result = $connect->prepare($query);
        $result->execute();

        $final = $result->fetchAll(PDO::FETCH_COLUMN);

        if(!empty($final)){
            echo $error = 'Такая категория уже существует';
            exit();
        }

    }

    function addAdminTopic($name_topic){
        global $connect;

        $query = "INSERT INTO topic(name_topic) VALUES(?)";
        $query = $connect->prepare($query);
        $query->execute([$name_topic]);
        echo 'Готово';
    }

    function AdminPostTitleUnice($title)
    {

        $query = "SELECT title FROM post WHERE title='$title'";
        global $connect;
        $result = $connect->prepare($query);
        $result->execute();

        $final = $result->fetchAll(PDO::FETCH_COLUMN);

        if(!empty($final)){
            echo $error = 'Такой заголовок уже существует';
            exit();
        }

    }

    function addAdminPost($title,$content,$topic,$img,$price){
        global $connect;

        $query = "INSERT INTO post(title,content,id_topic,img,price) VALUES(?,?,?,?,?)";
        $query = $connect->prepare($query);
        $query->execute([$title,$content,$topic,$img,$price]);
//        echo 'Готово';
    }

    function editPost($title,$content,$topic,$img,$id,$price){
            global $connect;
          $sql = "UPDATE `post` SET  `title` = '$title',`content` = '$content',`id_topic` = '$topic',`img` = '$img',`price` = '$price' WHERE id = '$id'";
          $query = $connect->prepare($sql);
          $query->execute();


          $fin = $query->fetch(PDO::FETCH_ASSOC);
          header('location: ../admin/postsAll.php');


    }

    function editTopic($name_topic,$id){
        global $connect;
                  $sql = "UPDATE `topic` SET  `name_topic` = '$name_topic' WHERE id = '$id'";
          $query = $connect->prepare($sql);
          $query->execute();


          $fin = $query->fetch(PDO::FETCH_ASSOC);
          header('location: ../admin/topicsAll.php');
    }




    function addUserComment($username,$message,$id){

        global $connect;
        $sql = 'INSERT INTO comment(name,mess,post_id) VALUES(?,?,?)';
        $query = $connect->prepare($sql);
        $query->execute([$username,$message,$id]);
        echo 'Готово';
    }


