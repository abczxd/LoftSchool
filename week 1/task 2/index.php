<?php

require('functions.php');

// Task 1
$strings = array("Hello", "people", "It", "is", "PHP", "course");
echo task1($strings, true);
adstask();
// Task 2
echo calcEverything('+', 1, 2, 3, 5) . "<br>";
echo calcEverything('-', 10, 5, 3) . "<br>";
echo calcEverything('*', 2, 3, 4) . "<br>";

// Task 3
task3(4, 4);


// Task 4
task4();

// Task 5
$string1 = "Карл у Клары украл Кораллы";
task5($string1);

$string2 = "Две бутылки лимонада";
$string2 = str_replace('Две', 'Три', $string2);
echo $string2 . "<br>";

// Task 6
task6('test.txt');

?>