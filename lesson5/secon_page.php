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

<p>
<h3><?= $image["title"] ?></h3>
</p>
<img src="images/max/<?= $image["link"] ?>" alt="<?= $image["title"] ?>" width="750">
<p>
<h4>Просмотров <?= $image['count'] ?></h4>
</p>

