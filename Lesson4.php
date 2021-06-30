<?php
/*Урок 4.Задание 1.*/
$dir = 'img/';
$images = scandir($dir);
for ($a = 0; $a < count($images); $a++) {
    if ($images[$a] != '.' && $images[$a] != '..') {
        echo '<a href="' . $dir . $images[$a] . '" target="_blank"><img src=' . $dir . $images[$a] . ' style="width: 400px; height: 300px;"alt="Природа"></a>';
    }
}
echo "<br>";
/*Урок 4. Задание 2.*/
function uploadImage()
{
    if (!isset($_FILES['image_file'])) {
        return;
    }
    if ($_FILES['image_file']['error'] !== 0) {
        return "Ошибка при загрузке файла";
    }
    if ($_FILES['image_file']['type'] != 'image/jpeg') {
        return "Это не картинка!";
    }
    $dir ='img/';
    if (!move_uploaded_file($_FILES['image_file']['tmp_name'], $dir . $_FILES['image_file']['name'])) {
        return "Не удалось загрузить файл<br>";
    }
    return "Картинка успешно загружена!<br>";
}

echo uploadImage();
?>
<br>
<form enctype="multipart/form-data" method="post">
    <input type="file" name="image_file"><br>
    <input type="submit" value="Загрузить">
</form>