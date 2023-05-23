<?php
session_start();
include("./header.php");

if (!$_SESSION['user']) {
  header('Location: /');
}

?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <title>Crafts</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/header.css">
  <link rel="stylesheet" href="../css/fon.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/profileAdd.css">
</head>

<body>

<!-- <h1>Категория:</h1> -->

  <?php
  require_once '../Kod/connect.php';
  $productList = mysqli_query(
    $connect,
    "SELECT 
        products.product_id          AS 'product_id',
        products.product_name        AS 'product_name',
        products.owner_id            AS 'owner_id',
        products.category_id         AS 'category_id',
        products.price               AS 'price',
        products.description         AS 'description',
        products.photo               AS 'photo',
        products.count               AS 'count',
        categories.category_name     AS 'category_name',
        users.name                   AS 'users_name',
        users.photo                  AS 'users_photo'
        
        FROM products 
        LEFT JOIN categories ON products.category_id=categories.category_id
        LEFT JOIN users ON products.owner_id=users.id
        WHERE products.category_id = 4 "
  );
  ?>
<div class="container">
  <div class="des">
    <?php foreach ($productList as $products) : ?>
      <div class="card_product">
        <div class="content_product">
          <div class="des_card">
            <div class="product_name"><?= $products['product_name'] ?></div>
            <div class="img_photo">
              <img src="../<?= $products['photo'] ?>" class="img_photo">
            </div>
            <div class="product_description"><?= $products['description'] ?></div>
            <div class="product_price">Цена: <?= $products['price'] ?> руб </div>
            <div class="product_count">Количество: <?= $products['count'] ?></div>
            <div class="categories_name ">Категория: <?= $products['category_name'] ?></div>
            <!-- <div class="first">
              <div class="user_photo">
                <img src="../<?= $products['users_photo'] ?>" class="user_photo">
              </div>
              <div class="users_name"><?= $products['users_name'] ?></div>
            </div> -->
            <form action="../Kod/shop_add.php" method="post" enctype="multipart/form-data">
              <input name="product_id" value="<?= $products['product_id'] ?>" type="hidden"></input>
              <button class="btn">Добавить в корзину</button>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>



</body>

</html>