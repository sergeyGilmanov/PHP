<?php
include("datebase.php");
include("header.php");


$data = $_POST;
$login = $data['login'];
$password = $data['password'];
if ( isset($data['signup']) ){
    $errors = array();
    $user = mysqli_fetch_assoc(mysqli_query($connection, "SELECT  login, password FROM users WHERE login = '$login'"));
    if ( !empty($user) ){
        if (password_verify($password, $user['password']) ){
            $_SESSION['logget_user'] = $user;
        } else {
            echo 'Пароль не верный';
        }
    } else {
        echo 'Пользователь с таким логином не существует';
    }
}
if (isset($_SESSION['logget_user'])){ ?>
    <a href = 'exit.php' class="exit">Выход</a>
     <div class='welcome container'>
         <div class="min_back"><p class="wel">Welcome, <?echo $_SESSION['logget_user']['login'] ?><br></p>
             <a href="product.php" style="color: white; font-size: 15px;position: absolute; top: 80%; left: 200px">Go to product</a>
         </div>
          </div>
<?php
} else {
echo "<div class=\"wrapper\">
    <h1>Welcome to iPhone-Shop</h1>
<form action=\"#\" method=\"post\">
    <input type=\"text\" placeholder=\"Login\" name=\"login\"><br>
    <input type=\"password\" placeholder=\"Password\" name=\"password\"><br>
    <input class = \"button\" type=\"submit\" value=\"Sing up\" name=\"signup\">
</form>
<a href=\"reg.php\">Зарегистрироваться</a>
</div>";}

include("footer.php");
?>