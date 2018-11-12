<?php
include("datebase.php");
include("header.php");


$data = $_POST;
$login = $data['login'];
$email = $data['email'];
$password = password_hash($data['password'],PASSWORD_DEFAULT);
if ( isset($data['reg']) ){
    $errors = array();
    if ( trim($data['login']) == '' ) {
        $errors[] = 'Введите логин';
    }
    if ( trim($data['email']) == '' ) {
        $errors[] = 'Введите email';
    }
    if ( $data['password'] == '' ) {
        $errors[] = 'Введите пароль';
    }
    if ( $data['password_2'] != $data['password'] ) {

    }
    $sql = "SELECT login FROM users WHERE login = '$login'";
    if( !empty(mysqli_fetch_assoc(mysqli_query($connection, $sql))) ){
        $errors[] = 'Пользователь с такими логином уже существует';
    }
    $sql = "SELECT email FROM users WHERE email = '$email'";
    if( !empty(mysqli_fetch_assoc(mysqli_query($connection, $sql))) ){
        $errors[] = 'Пользователь с такими email уже существует';
    }
    if ( empty($errors) ){
        $sql = "INSERT INTO users(login, email, password) VALUES ('$login','$email','$password')";
        mysqli_query($connection, $sql);
        echo "<div style='color: green'>Вы успешно зарегистрированы</div>";
    } else {
        echo "<div style='color:darkred; margin:10px; position: absolute'> $errors[0] </div>";
    }
}

?>
<div class="wrapper">
    <h1>Register form</h1>
    <form action="reg.php" method="post">
        <input type="text" placeholder="Enter login" name="login" value="<?php echo @$data['login'];?>"><br>
        <input type="email" placeholder="Enter email" name="email" value="<?php echo @$data['email'];?>"><br>
        <input type="password" placeholder="Enter password" name="password" ><br>
        <input type="password" placeholder="Repeat enter password " name="password_2"><br>
        <input class = "button" type="submit" value="Register" name="reg">
    </form>
</div>
<?php
include("footer.php");
?>