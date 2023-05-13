<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/fon.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>

<div class="zad_fon">
        <div class="container">
            <div class="menu">
                <div class="logo">
                    <div class="logo_img">
                        <img src="..//img/logo.svg" alt="Crafts">
                    </div>
                    <div class="logo_name">
                        <a href="../index.php" class="name">Craft</a>
                    </div>
                </div>
                <div class="nav">
                    <a class="nav_link">Украшения</a>
                    <a class="nav_link">Одежда</a>
                    <a class="nav_link">Игрушки</a>
                    <a class="nav_link">Картины</a>
                </div>

                <div class="voiti">
                    <a href="./vhod.php" class="name">Личный кабинет</a>
                </div>

                <div class="kor">
                    <a href="#">
                        <img src="../img/kor.svg" width="20" height="20" alt="kor">
                    </a>
                </div>
            </div>
        </div>
    </div>

     <!-- Профиль  -->
    <div class="container" >
        <div class="zad_profile">
            <div class="profile">
                <img class="photo" src="<?= $_SESSION['user']['photo'] ?>"  alt="">
                <div class="profile_info">
                    <div class="profile_info_about">
                        <h1><?= $_SESSION['user']['name'] ?></h1>
                        <p><?= $_SESSION['user']['email'] ?></p>
                    </div>
                    <div class="row">
                        <div class="md">
                            <h5>Избранное</h5>
                        </div>
                        <div class="md">
                            <h5>Добавленные товары</h5>
                        </div>  
                    </div>
                    <a href="vendor/logout.php" class="logout">Выход</a>
                    <button>Добавить товар</button>
                </div>
            </div>
        </div>
    </div>


</body>
</html>