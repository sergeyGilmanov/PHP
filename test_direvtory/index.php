<?
include_once('db.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?
$variables = (int)$_POST['id'];
?>
<form  method = 'post'>
<p>Имя: <input type="text"  name = 'id'></p>
<input type="submit" name = 'send' value="Отправить">
</form>
<?php

$sql = "SELECT login FROM users WHERE id = $variables";

$res = mysqli_query($connection, $sql);

$result = mysqli_fetch_assoc($res);
if (empty($result)){
    echo '<br> Логин user\'s с данным id не найден';
}
echo '<br>' . $result['login'];
?>
</body>
</html>
