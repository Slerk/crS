<?php
session_start();
//require_once "../DB.php";
require 'DBmethods.php';
    if (isset($_POST['title'],$_POST['content'],$_POST['price'])){

        $error = '';

        $title = $_POST['title'];
        $content = $_POST['content'];
        $topic = $_POST['topic'];
        $price = $_POST['price'];

        $title = trim($title);

        if ($title && $title !== ''){

            $lenTitle = strlen($title);

            if ($lenTitle <= 5 && $lenTitle != ''){

                $error = 'Заголовок слишком короткий';

            }

            if (preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/", $title)) {

                $error = 'Поле категории  не может содержать символы';

            }

            AdminPostTitleUnice($title);

        }else{
            $error = 'Введите название заголовка';
        }

        if ($content && $content !== ''){

            $lenContent = strlen($content);

            if ($lenContent <= 20 && $lenContent != ''){

                $error = 'Контент слишком короткий';

            }

            if (preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/", $content)) {

                $error = 'Поле контента не может содержать символы';

            }

        }else{
            $error = 'Должно быть содержание';
        }

            if (!empty($_FILES['file']['name'])){

      //даем уникальное имя файлу по времени добавления в секундах
        $img = time() . "_" . $_FILES['file']['name'];
        //временное имя
        $fileTmpName = $_FILES['file']['tmp_name'];
        //тип файла
        $fileType = $_FILES['file']['type'];
        //место хранения изображения
        $destination = "../img/" . $img;


        if (strpos($fileType, 'image') === false) {
            $error = "Подгружаемый файл не является изображением!";
        }else{
            $result = move_uploaded_file($fileTmpName, $destination);

            if ($result){
                 $_POST['img'] =$img ;
                 // $img = $_POST['file'];
                 // tt($img);
            }
            else{
                $error = "Ошибка загрузки изображения на сервер";
            }
        }
    }
    else{
        $error= "Ошибка получения картинки";
    }

    if ($topic == 'Выберите категорию'){
        $error = 'Выберите категорию';
    }

    if ($price ==''){
        $error = 'Установите цену';
    }


        if ($error != '') {
            echo $error;
            exit();
        }else{
            addAdminPost($title,$content,$topic,$img,$price);

        }


    }

