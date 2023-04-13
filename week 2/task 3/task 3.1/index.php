<?php
require('functions.php');

// Task 1
$users = task1();

// Task 2
$usersFromFile = task2();

// Task 3
$nameCounts = task3($users);
var_dump($nameCounts);

// Task 4
$averageAge = task4($users);
echo "Average age: $averageAge\n";