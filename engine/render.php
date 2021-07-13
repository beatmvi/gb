<?php
require_once "../config/main.php";
require_once ENGINE_DIR . "db.php";

function displayGallery()
{
    $dir = PUBLIC_DIR . "img/small/";
    $products = queryAll("SELECT * FROM products");
    foreach ($products as $info) {
        if (file_exists($dir . $info['product_file'])) {
            /*Вывод продуктов*/
            echo "<a href='product.php?id={$info["id"]}'>
            <img src = '{$dir}{$info["product_image"]}' title='Кликните для получения подробной информации'><br>{$info["product_name"]}<br>{$info["product_price"]}</a><hr>";
        }
    }
}