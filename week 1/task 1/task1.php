<p>
<?php


//Задача 1.1
echo "Задача 1.1 <br><br>";
$name="Станилав";
$age=23;
echo "Меня зовут $name <br>";

echo "Мне $age лет <br>";

echo "\"!|/'\"\\<br>";

echo "___________________________________<br>";

//Задача 1.2
echo "Задача 1.2 <br><br>";

echo "Условие задачи: <br>На школьной выставке 80 рисунков. 23 из них выполнены фломастерами, 40 карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?<br>";
echo "Решение: <br> Следует из общего кол-ва рисунков отнять кол-ва рисунков сделанных не красками <br>(Кол-во рисунков вып-х красками)=(Общее кол-во рисунков)-(Рисунки фломастерами)-(Рисунки карандашами)<br>";

const TOTAL=80;
const MARKER=23;
const PENCIL=40;
const PAINTS=TOTAL-MARKER-PENCIL;
echo "Ответ: <br>80-23-40=".PAINTS."<br>";
echo "Красками выполнено ".PAINTS." рисунков.<br>";
echo "___________________________________<br>";

//Задача 1.3
echo "Задача 1.3 <br><br>";
$age=-2;
echo "Выбранное число: $age <br>";
if ($age<=65 and $age>=18)
    echo "Вам еще работать и работать<br>";
elseif ($age>65)
    echo "Вам пора на пенсию<br>";
elseif ($age<18 and $age>=1)
    echo "Вам ещё рано работать<br>";
else
    echo "Неизвестный возраст<br>";
echo "___________________________________<br>";

//Задача 1.4
echo "Задача 1.4 <br><br>";
$day=0;

echo "day=$day<br>";
switch ($day){
    case 0:
        echo "Неизвестный день<br>";
        break;
    case ($day>=1 and $day<=5):
        echo "Это рабочий день<br>";
        break;
    case ($day==6 || $day==7):
        echo "Это выходной день<br>";
        break;
    
    default:
        echo "Неизвестный день<br>";
        break;
}

echo "___________________________________<br>";



//Задача 1.5
echo "Задача 1.5 <br><br>";
$bmw=array(
    "model"=>"X5",
    "speed"=>120,
    "doors"=>5,
    "year"=>"2015",
);
$toyota=array(
    "model"=>"mark2",
    "speed"=>150,
    "doors"=>5,
    "year"=>"1995",
);
$opel=array(
    "model"=>"vectra",
    "speed"=>100,
    "doors"=>7,
    "year"=>"2005",
);
 
$mixed=array(
    "bmw"=>$bmw,
    "toyota"=>$toyota,
    "opel"=>$opel,
);


foreach (array_keys($mixed) as $arrkey)
{
    echo"CAR ".($arrkey); 
    echo "<br>";
    foreach ($mixed[$arrkey] as $arr){
        print_r($arr." ");
    }
    echo "<br><br>";

}

echo "___________________________________<br>";



//Задача 1.6
echo "Задача 1.5 <br><br>";
?>

<table border="1" width="400" height="400">
<?php
for ($i=1; $i<=10; $i++) {
    echo "<tr>";
    for ($j=1; $j<=10; $j++) {
        $result = $i * $j;
        if ($i % 2 == 0 && $j % 2 == 0) {
            echo "<td>(" . $result . ")</td>";
        } elseif ($i % 2 == 1 && $j % 2 == 1) {
            echo "<td>[" . $result . "]</td>";
        } else {
            echo "<td>" . $result . "</td>";
        }
    }
    echo "</tr>";
}
?>
</table>