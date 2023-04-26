<?php
    session_start();
//    require"../DB.php";
require'DBmethods.php';
//require'AdminDBMethods.php';
//Для админа

        if (isset($_POST['login'], $_POST['email'], $_POST['password'])) {

            $error = '';

            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $admin = $_POST['admin'];

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

                AdminLoginUnice($login);


            } else {
                $error = 'Поле Login не должно быть пустым';
            }

            //мыло проверки

            if ($email && $email !== '') {
                $email = trim($email);

                if (preg_match("/[^(\w)|(\@)|(\.)|(\-)]/", $email)) {
                    $error = 'Введите корректный адрес почты';
                }
                AdminEmailUnice($email);

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
                addAdminUser($login,$email,$hash,$admin);

            }

        }

