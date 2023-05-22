<?php

    session_start();
    require_once 'connect.php';
 
    $login = $_POST['login'];
    $password = $_POST['password'];



    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        setcookie("login", $_POST['login'], time()+60*60*24, '/');
        setcookie("password", $_POST['password'], time()+60*60*24, '/');

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "photo" => $user['photo'],
            "email" => $user['email']
        ];



        header('Location: ../Page/profile.php');

    } else {
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: ../Page/vhod.php');
    }
    ?>
