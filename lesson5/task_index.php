<?php
$connection = mysqli_connect('localhost', 'root', '', 'img') or die(mysqli_error($connection));
$sql = 'SELECT * FROM IMG ORDER BY count DESC';
$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));
?>

<div class="galleryPreviewsContainer">
    <? while ($row = mysqli_fetch_assoc($res)): ?>
        <a rel="stylesheet" href="big.php?img=<?= $row["id"] ?>">
            <img src="images/min/<?= $row["link"] ?>" alt="<?= $row["title"] ?>">
        </a>
    <? endwhile ?>
