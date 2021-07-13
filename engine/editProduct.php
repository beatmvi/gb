<?php
$config =include CONFIG_DIR . "db.php";
$conn = mysqli_connect($config["host"], $config["user"], $config["password"], $config["db"]);
$id = $_GET['id'];
$info = mysqli_query($conn,"SELECT * FROM products WHERE id = $id");
if (isset($_POST['change_product'])){
    $Name = $_POST['product_name'];
    $Price = (int)$_POST['product_price'];
    $product_image = $_POST['product_image'];
    $id = $_POST['id'];
    $info = mysqli_query($conn, "SELECT product_image FROM products WHERE id = $id");
    $del = mysqli_fetch_row($info)[0];
    if ($_FILES['product_file']['name'] === ''){
        if (mysqli_query($conn, "UPDATE `products`SET `product_name` = '$Name',`product_price` ='$Price' WHERE id = $id"));
        echo "Продукт был изменен!";
    }else {
        if (isset($_FILES ['product_file'])) {
            if ($_FILES['error'] != 0) {
                return "Произошла ошибка: " . $_FILES['error'] . "!";
            } elseif ($_FILES != "image") {
                return "Неверный тип файла: " . $_FILES['image'] . "!";
            } elseif ($_FILES['size'] > 104857600) {
                return "Слишком большой размер файла: " . $_FILES['size'] . "! Не более 100Мб!";
            }
            $product_file = $_FILES['product_file']['name'];
            if (mysqli_query($conn, "UPDATE `products`SET `product_name` = '$Name',`product_price` ='$Price',`product_image`= '$product_file', WHERE id = $id")) ;
            echo "Продукт был изменен!";
        }
    }
            if ($_POST['delete_check']== ''){
                echo "Изображение не было удалено";
            }
            else{
                echo "Изображение" . $_POST['product_image'] . "удалено";
                unlink($del);
            }
}
?>
<form action="createProduct.php" enctype="multipart/form-data" method="post">
    ID : <input name="id" type="hidden" value="<?=$id?>"/><br>
    Название: <input name="product_name" type="text" value="<?=$Name?>"/><br>
    Цена: <input name="product_price" type="text"value="<?=$Price?>"/><br>
    Удалить изображение : <input type="checkbox"name="delete_check"/><br>
    Новое Изображение: <input name="product_file" type="file"value="<?=$product_image?>"/><br>

    <input type="submit" name="product_check" value="Изменить"/>
</form>
