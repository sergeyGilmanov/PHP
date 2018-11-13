<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <?php

    if(array_pop(explode('/', $_SERVER['PHP_SELF'])) == 'index.php'){echo "<style>.background{position:absolute; width: 100vw; height: 100vh;z-index: -1; background: url(img/bcg.png) no-repeat 50% 50%; animation: bcg1 5s; }</style>";
    }
    if(array_pop(explode('/', $_SERVER['PHP_SELF'])) == 'reg.php'){echo " <style>.background{position:absolute; width: 100vw; height: 100vh;z-index: -1; background: url(img/bcg1_1.png) no-repeat  90% calc(100vh - 280px); animation: bcg1 5s; }</style>";
    }
    ?>
</head>
<body>
<div class="background"></div>
<div class="header">
    <div class="head_container">
        <div class="logo"><img src="img/apple.png" alt="logo"></div>
        <ul>
            <a href="index.php">
                <li>Home</li>
            </a><a href="#">
                <li>Contact</li>
            </a><a href="product.php">
                <li>Product</li>
            </a><a href="#">
                <li>About us</li>
            </a><a href="#">
                <li>Press media</li>
            </a></ul>
    </div>
</div>