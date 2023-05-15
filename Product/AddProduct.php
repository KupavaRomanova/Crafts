<head>
    <meta charset="UTF-8">
    <title>Vhod2</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/addproduct.css">

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
                    <a href="../Authorization/vhod.php" class="name">Личный кабинет</a>
                </div>

                <div class="kor">
                    <a href="#">
                        <img src="../img/kor.svg" width="20" height="20" alt="kor">
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container">
        <div class="add">
            <div class="forma_add">
                <form action="./add.php" method="post" enctype="multipart/form-data">
                    <div class="add_product">
                        <input type="text" name="product_name" placeholder="Product name" required="">
                        <select name="categories" placeholder="Сategories">
                            <option>Украшения</option>
                            <option>Одежда</option>
                            <option>Обувь</option>
                            <option>Игрушки</option>
                            <option>Декор</option>
                        </select>
                        <input type="text" name="description" placeholder="Discription" required="">
                        <input type="text" name="price" placeholder="Price" required="">
                        <input type="text" name="count" placeholder="Count" required="">
                        <!-- <input type="file" name="photo"> -->
                        <input type="file" name="photo">
                        <button>Добавить</button>
                    </div>
                </form>
                    
            </div>
        </div>
    </div>
</body>

</html>