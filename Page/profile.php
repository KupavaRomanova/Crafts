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
  <link rel="stylesheet" href="../css/profile.css">
  <link rel="stylesheet" href="../css/fon.css">
  <link rel="stylesheet" href="../css/main.css">
</head>

<body>

  <!-- Профиль  -->
  <div class="container">
    <div class="zad_profile">
      <div class="profile">
        <img class="photo" src="../<?= $_SESSION['user']['photo'] ?>" alt="">
        <div class="profile_info">
          <div class="profile_info_about">
            <h1><?= $_SESSION['user']['name'] ?></h1>
            <p><?= $_SESSION['user']['email'] ?></p>
          </div>
          <div class="row">
            <div class="md">
              <a href="profileAdd.php" class="logout">Добавленные товары</a>
            </div>
          </div>
          <a href="AddProduct.php" class="logout">Добавить товар</a>
          <a href="../Kod/logout.php" class="logout">Выход</a>
          <!-- <button>Добавить товар</button> -->
        </div>
      </div>
    </div>
  </div>


</body>

</html>