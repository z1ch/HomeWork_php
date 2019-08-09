<?php 

function task1 () { // #1
    $i=0;
    while($i++ < 100) if($i%3==0) echo $i . '<br>';
}

function task2 () { // #2
    $i = 0;
    do {
        if ($i == 0) {
            echo $i++ . " – ноль <br>";
        } else if ($i % 2 == 0) {
            echo $i++ . " – четное число <br>";
        } else {
            echo $i++ . " – нечетное число <br>";
        }
    } while ($i <= 10);
}

function task3 () { // #3
    $arrSity = [];
    $arrSity[] = [
        'Moscow region' => 'Московская область:Москва, Зеленоград, Клин'
    ];
    $arrSity[] = [
        'Piter region' => 'Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт
        Рязанская область'
    ];
    foreach ($arrSity as $key => $value) {
        echo ("$value <br>");
    }

}

function task4 () { // #4
    $arrTrans = [];

}


echo task3 ()
?>