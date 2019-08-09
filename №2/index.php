<?php

function task1 ($a, $b) { // Первый номер
    if ($a >= 0 && $b >= 0)
        echo $a - $b;
    else if ($a < 0 && $b < 0)
        echo $a * $b;
    else 
        echo $a + $b;
}

function task2 ($a) { // Второй номер
    switch ($a) {
        case 0:
            echo $a++;
        case 1:
            echo $a++;
        case 2:
            echo $a++;
        case 3:
            echo $a++;
        case 4:
            echo $a++;
        case 5:
            echo $a++;
        case 6:
            echo $a++;
        case 7:
            echo $a++;
        case 8:
            echo $a++;
        case 9:
            echo $a++;
        case 10:
            echo $a++;
        case 11:
            echo $a++;
        case 12:
            echo $a++;
        case 13:
            echo $a++;
        case 14:
            echo $a++;
        case 15:
            echo $a++;
            break;
    }
}

// Третий номер
function sum ($a, $b) {
    return $a + $b;
}
function sub ($a, $b) {
    return $a - $b;
}
function mul ($a, $b) {
    return $a * $b;
}
function sahre ($a, $b) {
    return $a / $b;
}

function mathOperation($arg1, $arg2, $operation) { // Четвертый номер
    switch ($operation) {
        case "+":
            echo $arg1 + $arg2;
            break;
        case "-":
            echo $arg1 - $arg2;
            break;
        case "*":
            echo $arg1 * $arg2;
            break;
        case "/":
            echo $arg1 / $arg2;
            break;
    }
}

function power($val, $pow) { // Шестой номер
    $val = $val * $val;
    echo $val;
	if($pow > 1)
        power($val, $pow - 1);
}

function getTime () { //Седьмой номер
    $date = getDate();
    $forHours = ['', 'a', 'ов'];
    $forMinutes = ['а', 'ы', ''];
    function getEnd ($time, $forTime) {
        $time = $time % 100;
        if ($time >= 11 && $time <= 19) {
            $ending = $forTime[2];
        } else {
            $i = $time % 10;
            switch ($i) {
                case 1:
                    $ending = $forTime[0];
                    break;
                case 2:
                case 3:
                case 4:
                    $ending = $forTime[1];
                    break;
                default:
                    $ending = $forTime[2];
            }
        }
        return $ending;
    }
    return $date['hours'] ." час". getEnd($date['hours'], $forHours) ."
    " . $date['minutes'] . " минут" . getEnd($date['minutes'], $forMinutes);
}
?>