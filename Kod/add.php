<?php

    session_start();
    require_once './connect.php';

    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $count = $_POST['count'];
    $owner_id = $_SESSION['user']['id'];
    $categories_id = ['Украшения' => 1, 'Одежда' => 2, 'Обувь' => 3, 'Игрушки' => 4, 'Декор' => 5][$_POST['categories']];
    // echo($categories_id);
    // die();

    // Загрузка фото
    $path = '../uploads/' . time() . $_FILES['photo']['name'];
    if (!move_uploaded_file($_FILES['photo']['tmp_name'], './' . $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке фото';
        header('Location: ../Page/AddProduct.php');
    }

    mysqli_query($connect,
            "INSERT INTO `products` (`owner_id`, `category_id`, `product_name`, `description`, `price`, `photo`, `count`) 
            VALUES ('$owner_id', '$categories_id', '$product_name', '$description', '$price', '$path', '$count')");


    $_SESSION['message'] = 'Товар добавлен!';
    header('Location: ../Page/profile.php');
