<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Document</title>
    <style>
        body {
            background: #222222;
        }
        .gallery {
            margin: 100px auto;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            min-height: 22vh;
            width: 49vw;
            border: 2px solid whitesmoke;
            box-sizing: border-box;
            padding: 5px;
        }

        .gallery > a{
            display: block;
            margin: 5px;
        }
        .gallery > a:hover{
            box-shadow: 0 0 15px 3px aqua;
        }
    </style>
</head>
<body>
<div class="gallery">
    <?php
    $files = scandir("content");
    foreach ($files as $key => $value) {
        if ($value == "." || $value == "..") continue;
        echo "<a href = 'content/$value' target=blank><img src='content/$value' width=100 height=100</a>";
    }
    ?>
</div>
</body>
</html>