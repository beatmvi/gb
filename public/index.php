<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фото Галлерея</title>
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Галлерея</h1>
    </div>

    <div class="page-header">
        <h3>Загрузка нового изображения</h3>
    </div>

    <form action="" enctype="multipart/form-data" method="post">
        <input type="file" name="file"/>
        <input type="submit" value="Загрузить"/>
    </form>
    <hr>

    <?php

    /*Файлы конфигурации*/
    require_once "../config/main.php";
    $config = include CONFIG_DIR . "db.php";

    /*Библиотека - Генерация thumbnails*/
    require_once VENDOR_DIR . "funcImgResize.php";

    /*Подключение к БД*/
    $conDB = mysqli_connect($config["host"], $config["user"], $config["password"], $config["db"]);

    include ENGINE_DIR . "render.php";
    include ENGINE_DIR . "uploads.php";
    include ENGINE_DIR . "counters.php";


    if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_FILES)) {
        uploadsFiles($conDB);
    }

    renderGallery($conDB, null);

    /*Закрытие соединения с БД*/
    mysqli_close($conDB);

    ?>

</div>
</body>
</html>
