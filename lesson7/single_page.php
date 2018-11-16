<?php
include("datebase.php");
include("header.php");

$id = (int)$_GET['id'];
$sql = "SELECT * FROM goods WHERE id_prod = $id";
$query = mysqli_query($connection, $sql);
$result = mysqli_fetch_assoc($query);
?>

<?if (isset($_SESSION['logget_user'])){ ?>
<a href = 'exit.php' class="exit">Выход</a>
<a href="cart.php"class="cart"><img src="img/cart.png" alt="cart"></a>

<div class="container">


    <div class="single_prod">


        <div class="box_img">
            <div class="big_img">
                <div class="img_pr big"><img src="img/<? echo explode('/', $result['img_prod'])[0]; ?>" alt="img"></div>
                <? for ($i = 0; $i < count(explode('/', $result['img_prod'])); $i++) { ?>
                    <div class="img_pr small"><img src="img/<? echo explode('/', $result['img_prod'])[$i]; ?>"
                                                   alt="img"></div>
                <? } ?>
            </div>


            <div>
                <h3><? echo "<br><br>" . $result['prod_name']; ?></h3>
                <? parseStr(explode('!', $result['desc_prod'])); echo "<br><hr>"; ?>
                <span class="price"><? echo $result['price'] . ' руб.'; ?></span>
                <input class="btn" type="submit" value=" Add to cart">
            </div>
        </div>


    </div>





</div>


<script>
    $(document).ready(function () {
            $('.img_pr').click(function (e) {
                if (e.currentTarget.children[0] == $('div.big img:first-child')[0]) {
                    $('body').prepend(`<div class = 'wrapper1'><img src = '${e.target.currentSrc}'><img src="img/x.png" alt="x" class="h1" style='width: 20px; height: 20px;'><div class="prev"></div><div class="rev"></div></div>`);
                    let arr = $('.small > img').clone();
                    let i = 0;
                    let b =  $('.small > img').length - 1;
                    $('.h1').click(function () {
                        $('.wrapper1').remove()});
                    $('.prev').click(function () {
                        prev(arr[i]);
                        i++;
                        if (i == $('.small > img').length){
                            i = 0;
                        }
                            });
                    $('.rev').click(function () {
                        prev(arr[b]);
                        b--;
                        if (b == -1){
                            b = $('.small > img').length - 1;
                        }
                    });
                } else {
                    $('div.big img:first-child').remove();
                    $(e.currentTarget.children[0]).clone().appendTo($('.big'));
                }
            })
        }
    )

    function prev(arr){
        $('.wrapper1 > img:first-child').remove();
        $('.wrapper1').prepend(arr);
    }
</script>

<?}?>