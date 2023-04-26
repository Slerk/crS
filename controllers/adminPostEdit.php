<?php
session_start();
//require_once "../DB.php";
require 'DBmethods.php';
$error ='';

$id = '';
$title = '';
$content = '';

        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){

            $id = $_GET['id'];

            $top = "SELECT * FROM post WHERE id='$id'";
            global $connect;
            $result_post = $connect->prepare($top);
            $result_post->execute();

            $final_post = $result_post->fetchAll(PDO::FETCH_ASSOC);

        // name_topic
        foreach ($final_post as $key => $value) {
          // tt($value);
          $id = $value['id'];
          $title = $value['title'];
          $content = $value['content'];
          $id_topic = $value['id_topic'];
          // $img = $value['img'];
}

        }

        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_post'])){

            $id = $_POST['id'];

            $title = $_POST['title'];
            $content = $_POST['content'];
            $topic = $_POST['topic'];

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

            if (!empty($_FILES['img']['name'])){

                //даем уникальное имя файлу по времени добавления в секундах
                $img = time() . "_" . $_FILES['img']['name'];

                //временное имя
                $fileTmpName = $_FILES['img']['tmp_name'];
                //тип файла
                $fileType = $_FILES['img']['type'];
                //место хранения изображения
                $destination = "../img/" . $img;


                if (strpos($fileType, 'image') === false) {
                    $error = "Подгружаемый файл не является изображением!";
                }else{
                    $result = move_uploaded_file($fileTmpName, $destination);
// tt($result);
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

            if ($error != '') {
                echo $error;
                exit();
            }else{
                editPost($title,$content,$topic,$img,$id);

            }

        }
