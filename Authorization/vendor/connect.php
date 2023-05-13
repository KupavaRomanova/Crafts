<?php

    $connect = mysqli_connect('localhost', 'root', '', 'web');

    if (!$connect) {
        die('Error connect to DataBase');
    }