<?php
require_once "../config/main.php";
require_once ENGINE_DIR . "db.php";

?>
<a href="../engine/createProduct.php">Добавить новый товар</a><br>
<?php
 $products = queryAll("SELECT * FROM products");
  if (!isset($products)) {
          echo "Список товаров пуст";
      foreach ($products as $info) {
            echo "<a href='product.php?id={$info["id"]}'>
            <img src = '{$info["image"]}' title='Кликните для получения подробной информации'><br>{$info["name"]}<br>{$info["price"]}</a>
            <a href=../engine/editProduct.php?id={$products["id"]}>Добавить новый товар</a><br>
            <a href=../engine/deleteProduct.php?id={$products["id"]}>Добавить новый товар</a><br>
            <hr>";

        }

}


closeConnection();

?>

<a href="catalog.php">Посмотреть весь каталог</a><br>
<a href="admin.php">Вход в админку</a>
</center>