<?php

$numbers =  [1, 2, 3, 4, 5];
echo $numbers[4];
echo '<hr>';

$count = count($numbers);
echo $count;
for ($i = 0; $i < $count; $i++) {
    echo "$i $numbers[$i] <br>";
}

echo '<hr>';
foreach ($numbers as $number) {
echo "$number <br>";
}

$newNumbers = [];
for ($i = 0; $i < 10; $i++) {
    $newNumbers[] = $i ** 2;
}

$newNumbers[10] = 100;
$newNumbers[3] = 99;
$newNumbers[67] = 68 * 67;

echo '<pre>';
print_r($newNumbers);

$person = [
    'name' => 'Alex',
    'city' => 'Inno',
    'language' => 'PHP'
];
echo $person['name'];
echo '<pre>';
unset($person['city']);
print_r($person);
