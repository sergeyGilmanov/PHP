<?php

$connection = mysqli_connect('localhost', 'root', '', 'img') or die(mysqli_error($connection));

$idImg = (int)$_GET["img"];
$select = "SELECT * FROM IMG WHERE id = $idImg";
$res = mysqli_query($connection, $select) or die(mysqli_error($connection));
$image = mysqli_fetch_assoc($res);
$count = ++$image['count'];
$update = "UPDATE img SET count = $count WHERE id = $idImg";
mysqli_query($connection, $update) or die(mysqli_error($connection));

?>


<h3><?= $image["title"] ?></h3>

<img src="images/max/<?= $image["link"] ?>" alt="<?= $image["title"] ?>" width="750">

<h4>Просмотров <?= $image['count'] ?></h4>


<?php
    $fbQuery = "SELECT * FROM feedback WHERE product_id = {$id}";
    foreach ($fbQuery as $feedback) {
        if ($feedback) {
            echo "<br><b>Пользователь: </b>" . $feedback["user_name"];
            echo "<br><b>Текст: </b>" . $feedback["text"];
        } else {
            echo "<br>Отзыв отсутствует! ";
        }
    }
    echo "<br><a href='view.php?id={$id}&addcom=form'>Добавить отзыв</a>" . "<hr>";


    $name = $_GET['name'];
    $text = $_GET['text'];
    executeQuery("INSERT INTO feedback (user_name, text, product_id) 
    VALUES('{$name}','{$text}', '{$id}')");



    echo "
    <form action='' method='get'>
    <input name='id' value='$id' type='hidden'/>
    <input name='addcom' value='view' type='hidden'/>
    <b>Пользователь:</b> <input name='name' type='text' required/><br>
    <b>Текст:</b><br><textarea name='text' id='' cols='30' rows='10' required></textarea><br><br>
    <input value='Отправить' type='submit'/>
    </form>
    ";
