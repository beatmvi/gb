<?php

/*Файлы конфигурации*/
require_once "../config/main.php";
require_once ENGINE_DIR . "db.php";


$id = $_GET['id'];
$info = queryOne("SELECT * FROM products WHERE id = {$id}");

echo '<img src="./img/' . $info['product_image'] . '" alt="' . $info['product_name'] . '"><br><br>';
echo '<b>Название:</b> ' . $info['product_name'] . '<br><br>';
/*echo '<b>Краткое описание:</b> ' . $info['short_description'] . '<br><br>';
echo '<b>Описание:</b> ' . $info['description'] . '<br><br>';*/
echo '<b>Цена:</b> ' . $info['product_price'] . ' руб.<br><br>';



/*Галерея без формы загрузки*/
echo '<hr>';

/*Закрытие соединения с БД*/
closeConnection();

?>