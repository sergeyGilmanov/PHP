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

<div class="t">Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam, amet cupiditate dolore eveniet excepturi nobis quaerat. Aperiam dolorem, voluptates? Debitis distinctio dolorem ea enim error eveniet ex, excepturi facilis fugiat fugit id illo in ipsam ipsum maiores nam omnis perferendis possimus provident, qui quidem repellat repellendus repudiandae soluta tenetur ullam vero, vitae voluptate voluptates voluptatibus. Accusamus accusantium assumenda consequatur, delectus doloremque ea esse fuga id incidunt ipsam iure iusto labore laboriosam maiores maxime, mollitia nam odio officia officiis provident quasi quod ratione repellat sapiente, tempore totam voluptas? Aspernatur consectetur id in maiores provident ratione unde voluptas? A aperiam corporis doloremque dolores explicabo facere fuga harum iure laboriosam nesciunt nulla odit officiis optio recusandae, suscipit veniam voluptates. Ad aliquid aperiam doloribus eligendi est, eveniet ex explicabo minima minus, modi necessitatibus numquam, quia reiciendis repellendus repudiandae sed velit? Aliquam, aperiam cupiditate ducimus esse et eum harum id incidunt ipsum laboriosam mollitia nam natus nesciunt nihil nobis non odit porro possimus quasi quia quis repellat rerum veniam vero voluptas? A accusamus accusantium blanditiis commodi culpa debitis deserunt dicta dolor ducimus eligendi error et explicabo fugit laboriosam laborum modi molestiae nesciunt nisi nobis nulla pariatur quaerat quasi quibusdam quidem quo quod recusandae repellat repudiandae, sed veritatis? Beatae doloremque expedita quasi sed unde? Aut consequuntur cupiditate doloremque eligendi vel veritatis voluptate. Earum harum iure iusto nisi officiis quaerat rem rerum soluta totam veniam? Aliquam corporis cumque dolorem eaque enim est eveniet excepturi, id laborum libero maiores minus modi nemo, nisi nobis obcaecati officiis possimus quaerat quibusdam repudiandae saepe sequi sunt suscipit voluptates voluptatibus! Amet atque blanditiis consequatur cumque delectus distinctio dolorum esse est ex excepturi exercitationem harum illo iste itaque iure libero magni minima molestias non numquam, perspiciatis porro provident reiciendis saepe similique sit ut voluptatem! Aspernatur assumenda consequuntur cum debitis delectus deserunt distinctio dolores ducimus est eveniet excepturi exercitationem fugit ipsam iste iure iusto, libero magnam minima natus nobis officia perferendis porro, quasi qui quidem quod ratione, suscipit ullam vel veniam vitae voluptas voluptate voluptatibus! At eaque neque sunt vero! Aliquam aperiam architecto, cum cupiditate debitis deserunt dicta dolor dolores libero, nam nisi placeat quos voluptas! Adipisci aperiam cupiditate deserunt eligendi facere modi neque nisi obcaecati vitae? Aspernatur beatae corporis distinctio fugit hic, impedit ipsum molestias placeat quas quasi quos tempore vitae voluptates. A asperiores aspernatur consequatur dolore, ducimus eaque eligendi esse fuga in inventore ipsum laboriosam laudantium minus neque odit pariatur quam quas quo rem repudiandae sit temporibus totam ut vel vitae. Accusantium alias architecto aspernatur eos error, esse incidunt, nemo nostrum obcaecati quasi quidem quisquam recusandae repellat sapiente soluta tempora ut vitae voluptas. Accusantium aliquid cum earum exercitationem expedita explicabo, iste pariatur quod vel velit? Accusamus aliquid blanditiis cupiditate est mollitia tenetur ut velit voluptate. Assumenda natus nisi soluta. Accusantium alias aliquam doloribus libero modi quas quo repudiandae! Alias amet commodi debitis dolorum, enim eos esse eum harum impedit iste laudantium nisi non pariatur vitae voluptate. Ab dolore, doloremque doloribus ea earum eius eligendi excepturi nulla odio officia quibusdam quisquam, temporibus. consectetur adipisicing elit. Eum maiores nisi velit. Accusantium animi beatae corporis delectus esse inventore ipsa non perferendis, reprehenderit sint. Animi assumenda blanditiis cum doloremque earum, expedita officia provident quaerat quis ratione saepe soluta, sunt veritatis voluptates voluptatibus. Autem eligendi expedita hic in, iusto labore laboriosam quam quis quod rerum? Amet animi dicta dolore expedita itaque nulla quasi reiciendis rerum vero. Asperiores atque blanditiis consequatur, cumque eligendi eveniet facilis impedit iste, iusto, libero magni minus modi mollitia necessitatibus quas tenetur voluptate! Accusantium adipisci aliquam consequatur deleniti dicta doloremque eius eum, fugiat id impedit in ipsa, ipsum magni natus neque nobis obcaecati optio, perspiciatis soluta unde vel voluptatem voluptatibus. Adipisci cum cumque dolore dolorum explicabo facilis molestias mollitia nam nostrum officia perferendis, qui quia quisquam quo quod reprehenderit sit. Accusantium commodi eos eveniet exercitationem libero possimus quae quia vitae? Consequuntur ducimus enim laudantium modi nesciunt reprehenderit sequi suscipit ullam. Excepturi incidunt ipsam ipsum mollitia veritatis voluptatem. Accusantium aliquam, aperiam culpa doloremque ducimus est ex id nulla odit officiis omnis placeat porro provident quo quod repellat saepe sint sunt tempore vitae! At blanditiis eius minus quasi ratione repudiandae, ullam? Ab deserunt dolorem impedit, ipsa iusto labore magni maxime possimus qui! Architecto aspernatur beatae blanditiis cupiditate eius esse eum exercitationem hic minus necessitatibus nihil nisi, nobis, omnis saepe tempore vel veritatis. Ad, aperiam cupiditate deserunt dolor expedita explicabo minima nisi omnis quae rerum sed, sint, veniam voluptas! Atque eaque excepturi hic libero nisi officiis ratione veritatis voluptatibus. Accusamus aliquam architecto autem cupiditate deleniti deserunt ea eaque esse incidunt, ipsa, iste magnam nobis numquam odio officia pariatur quam quibusdam repellendus similique, sint. Ad commodi, culpa ducimus earum eius est eveniet exercitationem impedit magni nemo nesciunt nisi omnis perferendis ratione repudiandae similique suscipit tempore ullam. Aliquam aperiam atque corporis deserunt dignissimos et expedita inventore nobis numquam obcaecati perspiciatis, quisquam quos repellendus repudiandae sed, sit tempore vel vitae voluptas voluptates. Aliquid dolorum earum, excepturi rerum saepe sapiente! In labore mollitia nulla possimus reiciendis repellendus tempora vel. Ad, asperiores, aut commodi cumque expedita explicabo fugit labore laborum necessitatibus non, quam quasi qui soluta tempora voluptatibus! Accusamus accusantium adipisci aperiam architecto aspernatur, culpa cum, cumque distinctio dolorem doloremque eos esse est facere facilis fugiat hic mollitia nisi possimus quasi quibusdam rem repudiandae sapiente sequi vitae voluptate. Asperiores aspernatur at atque consectetur consequuntur culpa cum cupiditate deleniti distinctio doloremque enim eos est eum excepturi facere facilis fuga fugit id illum impedit laborum laudantium magni mollitia nihil odio perspiciatis quas quia ratione reiciendis, repellendus reprehenderit tempore unde vel vero voluptas voluptatibus voluptatum. Ab, adipisci, amet cupiditate doloribus earum eligendi excepturi illum impedit maxime modi nesciunt nihil officiis possimus quasi quibusdam ratione sequi sit sunt totam voluptas? Deleniti, eius facere impedit nulla odit possimus qui reiciendis sit! Ad, aliquam aut cum deserunt dolor dolore dolorem ducimus, eos eum ex fugit id ipsum itaque laborum maiores molestiae nam neque nihil odio optio possimus quae quisquam recusandae rem repellendus repudiandae saepe ut veniam veritatis voluptatibus! Expedita nostrum quis tenetur?</div>



</div>


<script>
    document.addEventListener('scroll', () => {
    console.log(window.pageYOffset)})
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