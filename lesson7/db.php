<?php
$connection  = mysqli_connect('localhost', 'root', '', test_db);
if ($connection == false){
    echo 'Ошибка соединения с базой данных: ' . mysqli_connect_error();
    exit;}