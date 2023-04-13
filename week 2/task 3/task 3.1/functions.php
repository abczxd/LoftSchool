<?php

function task1()
{
    $users = [];

    $names=['Bob','Carl','Mark','Anna','Mary'];

    for ($i = 0; $i < 50; $i++) {
        $user = [
            'id' => $i,
            'name' => $names[array_rand($names)],
            'age' => rand(18, 45)
        ];
        
        $users[] = $user;
        
    }
    $json=json_encode($users);
    file_put_contents('users.json', $json);
    return $users;

}


function task2()
{
    $json = file_get_contents('users.json');
    $users = json_decode($json, true);

    return $users;
}

function task3($users)
{
    $nameCounts = [];

    foreach ($users as $user) {
        $name = $user['name'];
        if (isset($nameCounts[$name])) {
            $nameCounts[$name]++;
        } else {
            $nameCounts[$name] = 1;
        }
    }

    return $nameCounts;
}

function task4($users)
{
    $ages = array_column($users, 'age');
    $count = count($ages);
    $total = array_sum($ages);
    $average = $total / $count;

    return $average;
}
?>