<?php
include("datebase.php");
include("header.php");

if (isset($_SESSION['logget_user'])){ ?>
<a href = 'exit.php' class="exit">Выход</a>
    <a href="cart.php"class="cart"><img src="img/cart.png" alt="cart"></a>


<div class="prod_fielg">
    <?php
        $sql = "SELECT * FROM goods WHERE 1";
        $query = mysqli_query($connection, $sql);

        ;
        while ( $result = mysqli_fetch_assoc($query) ):
            $id = $result['id_prod'];?>


    <div class="product">
        <div class="img"><img src="img/<? echo explode('/',$result['img_prod'])[0]; ?>" alt="img"></div>
        <div class="prod_desc">
            <h3><? echo $result['prod_name'];  ?></h3>

             <? parseStr(explode('!', $result['desc_prod'], -13)); echo "<br><a href='single_page.php?id= $id' ><p style='margin-top: 5px'>Подробнее...</p></a><br><hr>"; ?>
            <span class="price"><? echo $result['price'] . ' руб.'; ?></span>
            <input class="btn" type="submit" value=" Add to cart">
        </div>
    </div>

<? endwhile?>


</div>



<?} else {echo "<p  style='font-size: 50px; color: #999; text-align: center;'>Вам необходимо зарегистрироватся</p><img src='img/noapple.jpg' alt='noapple' style='margin-left: calc(50% - 200px);margin-top: calc(25% - 350px); filter: grayscale(1); opacity: .3'>";}?>


