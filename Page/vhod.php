<?php
session_start();
include ("./header.php");

if ( isset($_SESSION['user'])) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crafts</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/vhod.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/fon.css">
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>
    
    <!-- Форма авторизации -->
    
    <div class="container">
        <div class="forma">
                <div class="main">
                    <input type="checkbox" id="chk" aria-hidden="true">

                    <div class="mess">
                    <?php
                        if (isset($_SESSION['message'])) {
                            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                        }
                        unset($_SESSION['message']);
                    ?>

                    </div>
    



                    <div class="signup">
                        <form action="../Kod/signup.php" method="post" enctype="multipart/form-data">
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
                        <form action="../Kod/signin.php" method="post">
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