<?php
session_start();

if ( isset($_SESSION['user'])) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Vhod2</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/vhod.css">
    <link rel="stylesheet" href="../css/header.css">
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
    
    <!-- Форма авторизации -->
    
    <div class="container">
        <div class="forma">
                <div class="main">
                    <input type="checkbox" id="chk" aria-hidden="true">
    
                    <?php
                        if (isset($_SESSION['message'])) {
                            echo '<p class="msg" style="color: red"> ' . $_SESSION['message'] . ' </p>';
                        }
                        unset($_SESSION['message']);
                    ?>


                    <div class="signup">
                        <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
                            <label for="chk" aria-hidden="true">Регистрация</label>
                            <input type="text" name="name" placeholder="User name" required="">
                            <input type="email" name="email" placeholder="Email" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <input type="password" name="password_confirm" placeholder="Password confirm" required="">
                            <input type="file" name="photo">
                            <button>Регистрация</button>
                        </form>
                    </div>
    
                    <div class="login">
                        <form action="vendor/signin.php" method="post">
                            <label for="chk" aria-hidden="true">Вход</label>
                            <input type="email" name="login" placeholder="Email" required="">
                            <input type="password" name="password" placeholder="Password" required="">
                            <button>Вход</button>
                        </form>
                    </div>

                   
                </div>
        </div>
    </div>
</body>

</html>