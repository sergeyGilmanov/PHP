<?php
echo '<h3>Task 1</h3>';

$a = rand(-10, 10);
$b = rand(-10, 10);

if ($a > 0 && $b > 0) {
    echo $a - $b;
} else if ($a < 0 && $b < 0) {
    echo $a * $b;
} else {
    echo $a + $b;
}
echo "<br/>";
echo "<br/>";
?>


<?php
echo '<h3>Task 2</h3>';
$c = rand(0, 15);

switch ($c) {
    case 0:
        $c = 0;
        echo $c . '<br/>';
    case 1:
        $c = 1;
        echo $c . '<br/>';
    case 2:
        $c = 2;
        echo $c . '<br/>';
    case 3:
        $c = 3;
        echo $c . '<br/>';
    case 4:
        $c = 4;
        echo $c . '<br/>';
    case 5:
        $c = 5;
        echo $c . '<br/>';
    case 6:
        $c = 6;
        echo $c . '<br/>';
    case 7:
        $c = 7;
        echo $c . '<br/>';
    case 8:
        $c = 8;
        echo $c . '<br/>';
    case 9:
        $c = 9;
        echo $c . '<br/>';
    case 10:
        $c = 10;
        echo $c . '<br/>';
    case 11:
        $c = 11;
        echo $c . '<br/>';
    case 12:
        $c = 12;
        echo $c . '<br/>';
    case 13:
        $c = 13;
        echo $c . '<br/>';
    case 14:
        $c = 14;
        echo $c . '<br/>';
    case 15:
        $c = 15;
        echo $c . '<br/>';
}
echo "<br/>";
?>


<?php
echo '<h3>Task 3</h3>';

function sum($a, $b){
    return $a + $b;
}

function difference($a, $b){
    return $a - $b;
}

function multiplication($a, $b){
    return $a * $b;
}

function division($a, $b){
    return $a / $b;
}

echo sum(11, 10) . '<br/>';
echo difference(100, 55) . '<br/>';
echo multiplication(5, 5) . '<br/>';
echo division(36, 6) . '<br/>';
echo "<br/>";
?>

<?php
echo '<h3>Task 4</h3>';
function calc($a, $b, $operation){
    switch ($operation) {
        case 'sum':
            return sum($a, $b) . '<br/>';
            break;
        case 'difference':
            return difference($a, $b) . '<br/>';
            break;
        case 'multiplication':
            return multiplication($a, $b) . '<br/>';
            break;
        case 'division':
            return division($a, $b) . '<br/>';
            break;
    }
}

echo calc(23, 22, 'sum');
echo calc(23, 22, 'difference');
echo calc(23, 22, 'multiplication');
echo calc(23, 22, 'division');
?>


    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Homework</title>
    </head>
    <body>
    <header></header>
    <article><h3>Task 5</h3></article>
    <footer><?= date(Y) ?></footer>
    </body>
    </html>

<?php
echo '<h3>Task 6</h3>';
echo '<br/>';
function power($val, $pow){
    if ($pow != 1) {
        return $val * power($val, $pow - 1);
    } else {
        return $val;}
}

echo power(5, 2) . '<br/>';
?>


<?php
echo '<h3>Task 7</h3>';
$h = date("H");
$m = date("i");
if ($h==1 || $h==21) {
    $hours = " час";}
elseif (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
    $hours = " часа";}
else {$hours = " часов";}
if (($m<20) || ($m>10))
{$minutes = " минут.";}
elseif (($m % 10) === 1) {
    $minutes = " минута.";}
elseif ((($m % 10)>=2) && (($m % 10)<=4)) {
    $minutes = " минуты.";}
else {
    $minutes = " минут.";}
echo $h . $hours . " " . $m . $minutes;
?>