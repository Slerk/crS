<?php
    session_start();
//    require_once "../DB.php";
    require'DBmethods.php';

            if (isset($_POST['login'], $_POST['email'], $_POST['password'])) {

                $error = '';



                $login = $_POST['login'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                //логин проверки

                if ($login && $login !== '') {
                    $login = trim($login);

                    $strlenLog = strlen($login);

                    if ($strlenLog <= 5) {
                        $error = 'Поле Login слишком короткое';
                    }

                    if (preg_match("/[^(\w)|(\x7F-\xFF)|(\s)]/", $login)) {

                        $error = 'Поле Login  не может содержать символы';

                    }

                    loginUnice($login);


                } else {
                    $error = 'Поле Login не должно быть пустым';
                }

                //мыло проверки

                if ($email && $email !== '') {
                    $email = trim($email);

                    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
                        $error = 'Введите корректный адрес почты';
                    }
                    emailUnice($email);

                } else {
                    $error = 'Поле Email не должно быть пустым';
                }

                //проверка пароля

                if ($password && $password !== '') {
                    $password = trim($password);

                    $strlenPas = strlen($password);

                    if ($strlenPas <= 5) {
                        $error = 'Ваш пароль слишком короткий!';
                    } else {
                        $hash = password_hash($password, PASSWORD_DEFAULT);
                    }
                } else {
                    $error = 'Ваш аккаунт должен быть защищен паролем!';
                }

                if ($error != '') {
                    echo $error;
                    exit();
                } else {
                    addUser($login, $email, $hash);

                    $_SESSION['login'] = $login;
                    $_SESSION['password'] = $hash ;


                }

            }

            if (isset($_POST['but_reg'])){

                if ($_POST['login'] && $_POST['password']){

                    $login = trim($_POST['login']);
                    $password = trim($_POST['password']);

                    $error = '';

                    global $connect;
                    $sth = $connect->prepare("SELECT * FROM `users` WHERE `login` = :login");
                    $sth->execute(array('login' => $login));
                    $user = $sth->fetch(PDO::FETCH_ASSOC);


                    if ($user['login'] && password_verify($password,$user['password'])){
                        $_SESSION['login'] = $user['login'];
                        $_SESSION['password'] = $user['password'];

                        header('location: /');
                        if ($user['admin']){
                            header('location: ../admin/adminStr.php');
                        }
                    }else{
                        $error = 'Логин или пароль не верные';
                    }


                }else{
                    $error = 'Поля не должны быть пустыми';
                }

            }



