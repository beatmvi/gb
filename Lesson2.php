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
echo 'Произведение чисел: ' .multiply($a,$b).'<br>';
echo 'Сумма чисел: ' .sum($a,$b).'<br>';
echo 'Разность чисел: ' .different($a,$b).'<br>';
echo 'Деление чисел: ' .divide($a,$b).'<br>';

?>


<!--Урок 2. Задание 4.-->
<?php

function mathOperation($arg1,$arg2,$operation)
{
    switch ($operation) {
        case 'sum':
           echo sum($arg1,$arg2);
           break;

        case 'different':
            echo different($arg1,$arg2);
            break;

        case 'multiply':
            echo multiply($arg1,$arg2);
            break;

        case 'divide':
            echo divide($arg1,$arg2);
            break;

        default:
            return "Такая операция невозможна!";
    }
}

echo mathOperation($a,$b,'divide');
echo mathOperation($a,$b,'different');
echo mathOperation($a,$b,'sum');
echo mathOperation($a,$b,'multiply');


?>
<!--Урок 2. Задание 5.-->
<?= date('Y');?>
