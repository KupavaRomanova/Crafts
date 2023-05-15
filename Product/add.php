<?php

    session_start();
    require_once '../Authorization/vendor/connect.php';

    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $count = $_POST['count'];
    $owner_id = $_SESSION['user']['id'];

        // Загрузка фото
    $path = 'uploads_img/' . time() . $_FILES['photo']['name'];
    if (!move_uploaded_file($_FILES['photo']['tmp_name'], './' . $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке фото';
        header('Location: ../AddProduct.php');
    }

    mysqli_query($connect,
            "INSERT INTO `products` (`owner_id`, `category_id`, `product_name`, `description`, `price`, `photo`, `count`) 
            VALUES ('$owner_id', 1, '$product_name', '$description', '$price', '$path', '$count')");


    $_SESSION['message'] = 'Товар добавлен!';
    header('Location: ../Authorization/profile.php');


?> 
