<?php
function replaceSpace($phrase){
    return preg_replace('/\s/',  '_', $phrase);
}

echo replaceSpace('Урок 3 задание номер 5');