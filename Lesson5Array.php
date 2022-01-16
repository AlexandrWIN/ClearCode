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

$colors = ['red', 'green', 'black'];

$output = '';
foreach ($colors as $color) {
    $output = $output . ' ' . $color;
}
echo trim($output);

$stringColors = implode('; ',$colors);
echo '<br>';
echo "$stringColors<br>";

echo '<br>';
$newStr = 'Предложение из 4х слов';
$array = explode(' ', $newStr);
print_r($array);

$numbers = [2, 6, 8, 3, 7];
print_r($numbers);

sort($numbers);
print_r($numbers);

print_r($person);

$person = [
    'name' => 'Alex',
    'age' => '32',
    'city' => 'Inno',
    'language' => 'PHP'
];
asort($person);
print_r($person);

ksort($person);
print_r($person);

rsort($numbers);
print_r($numbers);

echo '<hr>';
$persons = [
    [
        'name' => 'Alex',
        'age' => 32,
        'city' => 'Innopolis'
    ],
    [
        'name' => 'Anton',
        'age' => 42,
        'city' => 'Tolyatty' 
    ],
    [
        'name' => 'Serg',
        'age' => 26,
        'city' => 'Voroneg' 
    ]
    ];

    function sortByAge ($a, $b) {
        if ($a['age'] > $b['age']) {
            return 1;
        } else if ($a['age'] < $b['age']) {
            return -1;
        } else {
            return 0;
        }
    }

    function sortByCity($a, $b) {
        if ($a['city'] > $b['city']) {
            return 1;
        } else if ($a['city'] < $b['city']) {
            return -1;
        } else {
            return 0;
        }
    }

print_r($persons);
usort($persons, 'sortByAge');
print_r($persons);

echo '<hr>';
$numberOne = 101;
$numberTwo = 16;

if ($numberOne > $numberTwo) {
        echo 1;
    } else if ($numberOne < $numberTwo) {
        echo -1;
    } else {
        echo 0;
    }
    echo '<hr>';

echo $numberOne <=> $numberTwo;

$names = array_column($persons, 'name');
print_r($names);

array_multisort($names, SORT_DESC, $persons);
print_r($persons);

$keys = array_keys($person);
print_r($keys);
echo '<br>';
print_r($persons[0]['name'][0]);
echo '<br>';
print_r($persons[1]['age']);
echo '<hr>';
