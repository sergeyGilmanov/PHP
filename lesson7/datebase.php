<?php
session_start();
 $connection = mysqli_connect("localhost", "root", "", "shop" );
if ( !$connection ) {
    echo "<p style='color:darkred'>'Ошибка подключения к БД:'  . mysqli_connect_error()</p>";
    exit();
}

?>

<?php

function parseStr($arr){
    for($i = 0;$i < count($arr); $i++){
        if( $i % 2 == 0 ){
            echo "<br><span class='txt_desc'>$arr[$i]</span><br>";
        } else {
            echo "<span class='txt_desc1'>$arr[$i]</span>";
        }
    }
};

?>




