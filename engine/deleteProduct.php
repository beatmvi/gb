<?php

$config =include CONFIG_DIR . "db.php";
$conn = mysqli_connect($config["host"], $config["user"], $config["password"], $config["db"]);
$id = (int)$_GET['id'];
$info = mysqli_query($conn,"SELECT * FROM `products` WHERE `id` = $id");
$del = mysqli_fetch_row($info)[0];
unlink($del);
$deleteProduct = mysqli_query($conn,"DELETE FROM `products` WHERE `id` = $id" );
echo "Продукт с ID" . $id . "удалена";
