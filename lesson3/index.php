<?php
echo "<br>Задание 1:<br>";
$num = 0;
while ($num <= 100) {
    if ($num != 0 && $num % 3 == 0) // я решил 0 не выводить =)
        echo $num . " ";
    ++$num;
}


echo "<br>Задание 2:<br>";
$num = 0;
do {
    if ($num == 0)
        echo $num . " - это ноль.<br>";
    elseif ($num % 2 != 0)
        echo $num . " - нечетное число.<br>";
    else
        echo $num . " - четное число.<br>";
    ++$num;
}while ($num <= 10);


echo "<br>Задание 3:<br>";
$region = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Санкт-Петербург'    => ['Всеволжск', 'Павловск', 'Кронштадт']
];
printArr($region);
function printArr($arr) {
    foreach ($arr as $key => $val) {
        echo "$key:<br>";
        echo implode(', ', $val) . '<br>';
    }
}

echo "<br>Задание 4:<br>";
global $translit_array;
$translit_array = array(
    'а' => 'a', 'б' => 'b', 'А' => 'A', 'Б' => 'B',
    'в' => 'v', 'г' => 'g', 'В' => 'V', 'Г' => 'G',
    'д' => 'd', 'е' => 'e', 'Д' => 'D', 'Е' => 'E',
    'ж' => 'j', 'з' => 'z', 'Ж' => 'J', 'З' => 'Z',
    'и' => 'i', 'й' => 'i', 'И' => 'I', 'Й' => 'I',
    'к' => 'k', 'л' => 'l', 'К' => 'K', 'Л' => 'L',
    'м' => 'm', 'н' => 'n', 'М' => 'M', 'Н' => 'N',
    'о' => 'o', 'п' => 'p', 'О' => 'O', 'П' => 'P',
    'р' => 'r', 'с' => 's', 'Р' => 'R', 'С' => 'S',
    'т' => 't', 'у' => 'u', 'Т' => 'T', 'У' => 'U',
    'ф' => 'f', 'х' => 'h', 'Ф' => 'F', 'Х' => 'H',
    'ц' => 'c', 'ч' => 'ch', 'Ц' => 'C', 'Ч' => 'Ch',
    'ш' => 'sh', 'щ' => 'sh', 'Ш' => 'Sh', 'Щ' => 'Sh',
    'ъ' => '', 'ы' => 'i', 'Ъ' => '', 'Ы' => 'I',
    'ь' => '', 'э' => 'e', 'Ь' => '', 'Э' => 'E',
    'ю' => 'yu', 'я' => 'ya', 'Ю' => 'Yu', 'Я' => 'Ya'
);
function translit($str) {
    $translited = strtr($str, $GLOBALS['translit_array']);
    return $translited;
}
$m_str = "Привет, мир!";
echo translit($m_str);


echo "<br>Задание 5:<br>";
function spaceRepl($str) {
    return str_replace(" ", "_", $str);
}
echo spaceRepl($m_str);


echo "<br>Задание 6:<br>";


echo "<ul>";
for($j=0; $j<10;++$j){
    if($j==5){
        echo "<ol>";
        for($i=0; $i<=3;++$i){
            echo "<li><a href=#>Ссылка ". $i ."</a></li>";
        }
        echo "</ol>";
    }
    echo "<li><a href=#>Ссылка ". $j ."</a></li>";
}
echo "</ul>";


echo "<br>Задание 7:<br>";
$printStr = "";
for ($i = 0; $i < 10; $printStr .= $i . " ", $i++) {

}
echo $printStr;


echo "<br>Задание 9:<br>";
function allReplace($str){
    $translited = translit($str);
    $translited = spaceRepl($translited);
    return $translited;
}
echo allReplace("Доьрый день какое сегодня число?");
?>