<?php
echo 'Hello, World!';
echo '<br>';
echo date('d.m.Y H.i.s');
echo '<br>';
echo '<button>CLICK!</button>';

// математические возможности php
echo '<hr>';
echo '<br>';
echo 2 + 1;
echo '<hr>';
echo 5 - 10;
echo '<hr>';
echo 5 * 10000;
echo '<hr>';
echo 6 / 46;
echo '<hr>';
echo 5 + 2 * 34;
echo '<hr>';
echo 2 ** 3;
echo '<hr>';
echo 10 % 3;
echo '<hr>';

$name = "Alex";
echo $name;
echo '<br>';
$lastName = "WIN";
echo $lastName;
echo '<hr>';

// это строка для комментариев
/** многострочный
 * комментарий
 * выглядит так
 */

 $fullName = $name . ' ' . $lastName;
 echo $fullName;
echo '<hr>';

 $word = 'lower_example';
 $bigWord = strtoupper($word);
 echo $bigWord;
 echo '<hr>';

 $upperCase = 'UPPER_EXAMPLE';
 $upperCase = strtolower($upperCase);
 echo $upperCase;
 echo '<hr>';

 $password = '    qwerty';
 echo trim($password);
 echo '<hr>';
 
 /** Задача после 3 занятия: выставить счет за
  * 2 бургера за 4,95
  * 1 коктейль за 1,95
  * 1 кока-кола за 0,85
  * чаевые 16%
  * ндс 7,5%
 */
$burger = 4.95;
$summBurger = $burger * 2;
$coctail = 1.95;
$cola = 0.85;
$bill = $summBurger + $coctail + $cola;
echo $bill;
echo '<hr>';
echo $tips = $bill * 0.16;
echo '<hr>';
echo $nds = ($bill + $tips) * 1.075;
