
<?php
$connection = mysqli_connect('localhost', 'root', '', 'img') or die(mysqli_error($connection));
require_once "secon_page.php";
$id = $_GET['id'];
$addcom = $_GET['addcom'];
$info = "SELECT * FROM product WHERE id = {$id}";
echo '<img src="./img/' . $info['image'] . '" alt="' . $info['name'] . '"><br><br>';
echo '<b>Название:</b> ' . $info['name'] . '<br><br>';
echo '<b>Краткое описание:</b> ' . $info['short_description'] . '<br><br>';
echo '<b>Описание:</b> ' . $info['description'] . '<br><br>';
echo '<b>Цена:</b> ' . $info['price'] . ' руб.<br><br>';
echo '<b>Категория:</b> ' . nameCategory($info['category_id']) . '<br><br><hr>';
if ($addcom == "form") {
    formComments($id);
} else {
    if ($addcom) {
        addComments($id);
    }
    displayComments($id);
}
closeConnection();
?>

