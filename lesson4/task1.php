<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            background: #222222;
        }
        .gallery {
            position: absolute;
            left: calc(50% - 480px);
            top: 10%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            min-height: 22vh;
            width: 49vw;
            border: 2px solid whitesmoke;
            box-sizing: border-box;
            padding: 5px;
        }

        .gallery > img{
            display: block;
            margin: 5px;
        }
        .gallery > img:hover{
            box-shadow: 0 0 15px 3px aqua;
        }
        .wrapper {
            position: absolute;
            width: 100%;
            z-index: 111;
        }
        .wrapper > img {
            position: absolute;
            left: calc(50% - 550px);
            top: calc(25% + 50px);
            margin: 100px auto;
            width: 1100px;
            height: 700px;
        }
        .wrapper > h1 {
            color: #fff;
            position: absolute;
            right: 200px;
            top: 50px;
        }
        .wrapper > h1:hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="gallery">
    <?php
    $files = scandir("content");
    foreach ($files as $key => $value) {
        if ($value == "." || $value == "..") continue;
        echo "<img src='content/$value' class = 'image' width=100 height=100</a>";
    }
    ?>
</div>
<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous">

</script>
<script>
    $(document).ready(function () {
        $('.image').click(function(e){
            $('body').prepend(`<div class = 'wrapper'><img src = '${e.target.currentSrc}'><h1>X</h1></div>`);
            $('.wrapper > h1').click(function () {
                $('.wrapper').remove()})
        })
        });

</script>
</body>
</html>