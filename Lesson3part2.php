<?php
$a = 0;
do{
    $a++;
    if ($a == 0){
echo $a . '- Это ноль' .'<br>';
    }
    else{
        if ($a%2 ==0) {
            echo $a . '-Это четное число' . '<br>';
        }
        else {
            echo $a . '-Это не четное число'.'<br>';
            }

    }
}
while ($a <= 9);
