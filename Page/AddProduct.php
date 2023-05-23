<head>
    <meta charset="UTF-8">
    <title>Crafts</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/addproduct.css">

</head>

<body>
    <?php
        include ("./header.php");
    ?>

    <div class="container">
        <div class="add">

            <div class="forma_add">
                <form action="../Kod/add.php" method="post" enctype="multipart/form-data">
                    <div class="add_product">
                        <input type="text" name="product_name" placeholder="Product name" required="">
                        <select name="categories" placeholder="Сategories">
                            <option>Украшения</option>
                            <option>Одежда</option>
                            <option>Обувь</option>3
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