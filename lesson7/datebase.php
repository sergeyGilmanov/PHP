<?php
session_start();
 $connection = mysqli_connect("localhost", "root", "", "shop" );
if ( !$connection ) {
    echo "<p style='color:darkred'>'Ошибка подключения к БД:'  . mysqli_connect_error()</p>";
    exit();
}

?>