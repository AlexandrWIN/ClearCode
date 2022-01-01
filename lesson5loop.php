<?php

$number = 0;
while ($number < 5) {
    echo $number . '<br>';
    $number++;
}

echo '<select>';
echo "<option selected disabled>--Do richt choose!<option>";
for ($i = 1; $i < 5; $i++) {
    echo "<option>$i</option>";
}
echo '</select>';

/*
Воспользуйтесь конструкцией цикла "while", чтобы 
вывести на экран значения температур в пределах от -50 до 50 по Фаренгейту"
*/

echo '<hr>';
$degreeFar = -50;
while ($degreeFar < 51) {
    echo $degreeFar . '=' . round(($degreeFar-32)*5/9, 2) . '<br>';
    $degreeFar++;
    }

