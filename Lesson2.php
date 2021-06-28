<!--Урок 2. Задание 1.-->
<?php
$a = 7;
$b = 4;

if($a >= 0 && $b >= 0)
    echo $a - $b;
elseif ($a < 0 && $b < 0)
    echo $a * $b;
elseif (($a < 0 && $b >= 0) || ($a >= 0 && $b < 0))
    echo $a + $b;
?>
<!--Урок 2. Задание 2.-->
<?php
$a = 7;
switch ($a) {
    case 1:
        echo "1";
    case 2:
        echo "2";
    case 3:
        echo "3";
    case 4:
        echo "4";
    case 5:
        echo "5";
    case 6:
        echo "6";
    case 7:
        echo "7";
    case 8:
        echo "8";
    case 9:
        echo "9";
    case 10:
        echo "10";
    case 11:
        echo "11";
    case 12:
        echo "12";
    case 13:
        echo "13";
    case 14:
        echo "14";
    case 15:
        echo "15";
break;
}

?>

<!--Урок 2. Задание 3.-->
<?php

function sum ($a, $b) {
    return $a + $b;
}

function different ($a, $b) {
    return $a - $b;
}

function multiply ($a, $b) {
    return $a * $b;
}

function divide ($a, $b) {
    return $a / $b;
}
echo 'Произведение чисел: ' .multiply(4,8).'<br>';
echo 'Сумма чисел: ' .sum(7,4).'<br>';
echo 'Разность чисел: ' .different(15,3).'<br>';
echo 'Деление чисел: ' .divide(6,3).'<br>';

?>


<!--Урок 2. Задание 4.-->
<?php

function mathOperation($arg1,$arg2,$operation)
{
    switch ($operation) {
        case 'sum':
            return $arg1 + $arg2;

        case 'different':
            return $arg1 - $arg2;

        case 'multiply':
            return $arg1 * $arg2;

        case 'divide':
            return $arg1 / $arg2;

        default:
            return "Такая операция невозможна!";
    }
}

echo mathOperation(6,3,'divide');

?>
<!--Урок 2. Задание 5.-->
<?= date('Y');?>
