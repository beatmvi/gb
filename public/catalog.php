<?php
require_once "../config/main.php";
require_once ENGINE_DIR . "render.php";


displayGallery();
closeConnection();
?>

<div style="text-align: center;">
    <a href="admin.php">Вход в админку</a>
</div>