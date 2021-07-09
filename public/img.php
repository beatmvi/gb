<?php

/*Файлы конфигурации*/
require_once "../config/main.php";
$config = include CONFIG_DIR . "db.php";

/*Подключение к БД*/
$conDB = mysqli_connect($config["host"], $config["user"], $config["password"], $config["db"]);

include ENGINE_DIR . "render.php";
include ENGINE_DIR . "counters.php";

$id = $_GET['id'];
$click = $_GET['click'];

if ($id) {
    if ($click == true) {
        counters($conDB, $id, "click");
    }
    counters($conDB, $id, "view");
    renderGallery($conDB, $id);
}

/*Галерея без формы загрузки*/
echo '<hr>';
renderGallery($conDB, null);

/*Закрытие соединения с БД*/
mysqli_close($conDB);

?>