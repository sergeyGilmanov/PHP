<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $reset = $_POST['reset'];
    if ($reset) {
        $view = "";
        $number1 = "";
        $number2 = "";
        $operation = false;
        $view = "";
    }
    if ($operation) {
        if ($operation == "+") {
            $result = (int)$number1 + (int)$number2;
        }
        if ($operation == "-") {
            $result = (int)$number1 - (int)$number2;
        }
        if ($operation == "*") {
            $result = (int)$number1 * (int)$number2;
        }
        if ($operation == "/") {
            $result = ((int)$number2 != 0) ? (int)$number1 / (int)$number2 : "Делить на ноль нельзя";
        }
        $view = $result;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        form {
            margin-top: 100px;
        }

        input, select {
            margin-right: 10px;
            margin-bottom: 10px;
            width: 150px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid #222222;
            outline: none;
            box-sizing: border-box;
            padding: 0 5px 0 5px;
        }

        input:hover, select:hover {
            cursor: pointer;
        }

        input:focus, select:focus {
            box-shadow: aqua 0 0 15px 1px;
        }

        .wrapper_operation, .wrapper {
            width: 325px;
            height: auto;
            display: flex;
            flex-wrap: wrap;
        }

        .container {
            margin: 0 auto;
            width: 325px;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="" method="post">
        <div class="wrapper">
            <div class="one">
                <input name="number1" type="text" value="<?= $number1 ?>" placeholder="  Первое значение"><br><br>
                <input name="number2" type="text" value="<?= $number2 ?>" placeholder="  Второе значение"><br><br>
            </div>
            <div class="two">
                <input name="result" type="text" value="<?= $view ?>" placeholder="Ответ" disabled/>
            </div>
        </div>


        <div class="wrapper_operation">
            <select name="operation" onchange="submit()">
                <option value="">Выберети операцию</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select><br><br>
            <input name="operation" value="+" type="submit"/>
            <input name="operation" value="-" type="submit"/>
            <input name="operation" value="*" type="submit"/>
            <input name="operation" value="/" type="submit"/>
            <input name="reset" value="Reset" type="submit"/>

        </div>
    </form>
</div>
</body>
</html>

