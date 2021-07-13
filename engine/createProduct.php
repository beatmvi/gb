<?php
require_once "../config/main.php";
require_once ENGINE_DIR . "db.php";
?>
<div class="page-header">
    <h3>Форма создания товара</h3>
</div>
<hr>
<?php
$config =include CONFIG_DIR . "db.php";
$conn = mysqli_connect($config["host"], $config["user"], $config["password"], $config["db"]);
function createProduct($conn)
{
    $Name = $_POST['product_name'];
    $Price = (int)$_POST['product_price'];
    foreach ($_FILES as $file) {
        $fileType = explode("/", $file['type'])[0];
        if ($file['error'] != 0) {
            return "Произошла ошибка: " . $file['error'] . "!";
        } elseif ($fileType != "image") {
            return "Неверный тип файла: " . $file['image'] . "!";
        } elseif ($file['size'] > 104857600) {
            return "Слишком большой размер файла: " . $file['size'] . "! Не более 100Мб!";
        } else {
            if (!mysqli_query($conn, "INSERT INTO `products` (`product_name` , `product_price`, `product_image`)
            VALUES ('$Name', '$Price','{$_FILES['product_file']['name']}' )")) {
                echo mysqli_error($conn) . "<br>";

            }
            echo "Создание товара с ID: " . mysqli_insert_id($conn) . " успешно выполнена!";

        }

    }
}
createProduct($conn);

?>
<form action="" enctype="multipart/form-data" method="post">
    Название: <input name="product_name" type="text"/><br>
    Цена: <input name="product_price" type="text"/><br>
    Изображение: <input name="product_file" type="file"/><br>
    <input type="submit" value="Загрузить"/>
</form>
