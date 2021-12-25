<?php

$number = 4;
if ($number > 5) {
    echo "10 more than 5";
    echo '<br>';
    echo '!';
}

echo '<br>';
echo 'This words shows always!';

if ($number > 5) {
    echo "<br>";
    echo 'more than five';
} else {
    echo '<br>';
    echo 'less or equal than five';
}

if ($number < 5) {
    echo '<br>';
    echo 'less than 5';
} else if ($number < 4) {
    echo '<br>';
    echo '1 or 2 or 3';
}

$secondNumber = 0;
echo '<hr>';
if ($number > 0 or $secondNumber == 1) {
    echo '<br>';
    echo 'success';
}

if ($number > 0) {
    if ($number > 2);
    echo '<br>';
    echo 'success!!';
}

if ($number != 0) {
    echo '<hr>';
    echo 'no zero';
}

 /** 
  * вывести одно из 3х сообщений
  * если меньше 7: Вы дошкольник
  * если старше 6 и младше 19: вы в кшоле
  * если старше 18: закончили школу
  */ 

  $age = 15;
  if ($age < 7) {
      echo '<hr>';
      echo 'Вы дошкольник';
  } else if ($age > 17) {
          echo '<hr>';
          echo 'Вы закончили школу';
      } else {
          echo '<hr>';
          echo 'Вы учитесь в школе';  
      }