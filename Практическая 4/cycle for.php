<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta  name="viewport" content="width=devic width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1> Практическая 4</h1>
    <h3>Задание 1</h3>
<?php
$startNumber = 2;    
$multiplier = 3;     
$quantity = 5; 

echo "Исходные данные:\n<br>";
echo "Стартовое число = $startNumber\n<br>";
echo "Множитель = $multiplier\n<br>";
echo "Колличество чимсел = $quantity\n\n<br>";

echo "Геометрическая прогрессия:\n";
$current = $startNumber;
for ($i = 0; $i < $quantity; $i++) {
    echo $current . " ";
    $current *= $multiplier;
}
?>
<h3>Задание 2</h3>
<?php
$lastNumber = 10;
$sum = 0;

echo "Исходные данные:\n<br>";
echo "lastNumber = $lastNumber\n\n<br>";

for ($i = 1; $i <= $lastNumber; $i++) {
    $sum += $i;
}

echo "Сумма чисел от 1 до $lastNumber = $sum"; 
?>
<h3>Задание 3</h3>
<?php
$lastNumber = 10;
$multiplicationResult = 1;

echo "Исходные данные:\n<br>";
echo "lastNumber = $lastNumber\n\n<br>";

for ($i = 1; $i <= $lastNumber; $i++) {
    if ($i % 2 == 0) {
        $multiplicationResult *= $i;
    }
}

echo "Произведение чётных чисел от 1 до $lastNumber = $multiplicationResult";
?>
<h3>Задание 4</h3>
<?php
$n = 7;                  // количество дней
$dailyDistance = 10;     // первый день
$totalDistance = 0;

echo "Исходные данные:\n<br>";
echo "Количество дней = $n\n<br>";
echo "Первый день = $dailyDistance\n<br>";
echo "Увеличение нормы = 10% в день\n\n<br>";

for ($day = 1; $day <= $n; $day++) {
    $totalDistance += $dailyDistance;
    $dailyDistance *= 1.1;
}

echo "Суммарный путь за $n дней = " . round($totalDistance, 2) . " км";
?>
<h3>Задание 5</h3>
<?php
$totalLegs = 64;

echo "Исходные данные:\n<br>";
echo "Всего лап = $totalLegs\n<br>";
echo "Лап у гуся = 2\n<br>";
echo "Лап у кролика = 4\n\n<br>";

echo "Возможные сочетания гусей и кроликов:\n<br>";

for ($rabbits = 0; $rabbits <= $totalLegs / 4; $rabbits++) {
    $remainingLegs = $totalLegs - $rabbits * 4;
    
    if ($remainingLegs % 2 == 0) {
        $geese = $remainingLegs / 2;
        echo "Кроликов: $rabbits, <br> Гусей: $geese\n<br>";
    }
}
?>
</body>