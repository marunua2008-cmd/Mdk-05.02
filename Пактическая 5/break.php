<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta  name="viewport" content="width=devic width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1> Практическая 5</h1>
    <h2> Задание 1</h2>
<?php
for ($i = 2; $i <= 9; $i++) {
    for ($j = 2; $j <= 9; $j++) {
        echo "$i * $j = " . ($i * $j) . "\t";
    }
    echo '<br>';
    echo '<br>';
}
?>

    <h2> Задание 2 </h2>
<?php
$a = 6; 
$b = 5;
for( $i = 0; $i < $b; $i++) {
    for($j = 0; $j < $a; $j++) {
        echo 'X';
    }
    echo '<br>';
}
?>

  <h2> Задание 3 </h2>
<?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";
for($i = 1; $i <= 9; $i++){
    echo "<tr>"; 
    for($j = 1; $j <= 9; $j++){
        $result = $i * $j;
    }
        echo "<td>$result</td>";
    }
    echo "</tr>"; 
echo '</table>'; 
?>

<h3>Задача 4</h3>
<?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";
$count = 0; 
for ($i = 10; $i <= 99; $i++) {   
    if ($count == 0) {
        echo "<tr>";
    }   
    echo "<td>$i<sup>2</sup> = " . ($i * $i) . "</td>";   
    $count++; 
    if ($count == 10) {
        echo "</tr>";
        $count = 0;
    }
}
if ($count > 0) {
    echo "</tr>";
}
echo "</table>";
?>

<h3>Задача 5</h3>
<?php
$a = 6; 
$b = 4; 
echo "<h3>Прямоугольник с контуром</h3>";
echo "<pre>";
for ($i = 1; $i <= $b; $i++) {
    for ($j = 1; $j <= $a; $j++) {
        if ($i == 1 || $i == $b || $j == 1 || $j == $a) {
            echo "*"; 
        } else {
            echo "0";
        }
    }
    echo "
"; 
}
echo "</pre>";
?>
</body>
