<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Вывод меню из массива</title>
</head>
<body>
<?php
$menu = array(
    array ("link"=>"Задание 1", "href"=>"Lesson3part1.php"),
    array ("link"=>"Задание 2", "href"=>"Lesson3part2.php"),
    array ("link"=>"Задание 3", "href"=>"Lesson3part3.php"),
    array ("link"=>"Задание 4", "href"=>"Lesson3part4.php"),
    array ("link"=>"Задание 5", "href"=>"Lesson3part5.php"),
    array ("link"=>"Задание 8", "href"=>"Lesson3part8.php"),
    array ("link"=>"Задание 9", "href"=>"Lesson3part9.php"),
    array ("link"=>"Задание 6", "href"=>"Lesson3part6.php"),
    array ("link"=>"Задание 7", "href"=>"Lesson3.part7.php")
);
?>
<ul>
    <li><a href='<?=$menu [0] ["href"]?>'><?=$menu [0] ["link"]?></a></li>
    <li><a href='<?=$menu [1] ["href"]?>'><?=$menu [1] ["link"]?></a></li>
    <li><a href='<?=$menu [2] ["href"]?>'><?=$menu [2] ["link"]?></a></li>
    <ul class="subs">
        <li><a href='<?=$menu [7] ["href"]?>'><?=$menu [7] ["link"]?></a></li>
        <li><a href='<?=$menu [8] ["href"]?>'><?=$menu [8] ["link"]?></a></li>
    </ul>
    <li><a href='<?=$menu [3] ["href"]?>'><?=$menu [3] ["link"]?></a></li>
    <li><a href='<?=$menu [4] ["href"]?>'><?=$menu [4] ["link"]?></a></li>
    <li><a href='<?=$menu [5] ["href"]?>'><?=$menu [5] ["link"]?></a></li>
    <li><a href='<?=$menu [6] ["href"]?>'><?=$menu [6] ["link"]?></a></li>
</ul>
</body>
</html>