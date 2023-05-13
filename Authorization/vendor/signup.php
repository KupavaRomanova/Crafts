<?php

    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    

    if ($password === $password_confirm) {
        // Загрузка фото
        $path = 'uploads/' . time() . $_FILES['photo']['name'];
        if (!move_uploaded_file($_FILES['photo']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../vhod.php');
        }

        mysqli_query($connect, "INSERT INTO `users` (`name`, `email`, `password`, `photo`) VALUES ('$name', '$email', '$password', '$path')");


        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../vhod.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../vhod.php');
    }

?>
