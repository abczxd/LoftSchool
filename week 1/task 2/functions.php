<?php
//Задача 2.1
function task1($strings, $return = false)
{
    echo "Задача 1.1 <br><br>";
    $result = "";
    foreach ($strings as $string) {
        $result .= "<p>$string</p>";
    }
    if ($return) {
        return $result;
    } else {
        echo $result;
    }
}

function adstask(){
    echo "___________________________________<br>";
    echo "Задача 1.2 <br><br>";
}
//Задача 2.2
function calcEverything($operation, ...$args) {
    
    switch($operation) {
        case '+':
            $result = array_sum($args);
            break;
        case '-':
            $result = $args[0] - array_sum(array_slice($args, 1));
            break;
        case '*':
            $result = array_product($args);
            break;
        case '/':
            $result = $args[0] / array_product(array_slice($args, 1));
            break;
        default:
            return "Неизвестная операция";
    }
    return implode(" $operation ", $args) . " = $result";
}


//Задача 2.3
function task3($x, $y)
{
    echo "___________________________________<br>";
    echo "Задача 1.3 <br><br>";
    if (!is_int($x) || !is_int($y)) {
        echo "Both parameters should be integers";
        return;
    }
    echo "<table>";
    for ($i = 1; $i <= $x; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $y; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

//Задача 2.4
function task4()
{
    echo "___________________________________<br>";
    echo "Задача 1.4 <br><br>";
    echo date('d.m.Y H:i') . "<br>";
    echo strtotime('24.02.2016 00:00:00');
    echo "<br>";
}
//Задача 2.5
function task5($string)
{
    echo "___________________________________<br>";
    echo "Задача 1.5 <br><br>";
    $string = str_replace('К', '', $string);
    echo $string . "<br>";
}
//Задача 2.6
function task6($filename)
{
    echo "___________________________________<br>";
    echo "Задача 1.6 <br><br>";
    file_put_contents($filename, 'Hello again!');
    echo file_get_contents($filename);
}
?>