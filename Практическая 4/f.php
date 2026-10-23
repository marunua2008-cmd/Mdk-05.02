<h1>Практическая 4</h1>
<h2>Задание 1</h2>
<?php
$nambers =[2, 4, 6, 87];
$max = $nambers[0];
$min = $nambers[0];
for($i = 0; $i < count($nambers); $i++ ){
    if($> $max) {
        $max = $value;

    }
    if($value < $min) {
        $min = $value;
    }
}
echo "Максимум - $max "; 
echo "Минимум - $min "; 
?>
<h2>Задание 2</h2>
<?php
$a = [2, 4, 6, 8];
$s = 0;
$p = 1;

foreach ($a as $value) {
    $s = $s + $value;
    $p = $p * $value;
}
echo " Сумма = $s, Произведение = $p";
?>

<h2>Задание 3</h2>
<?php
$a =  [10, 20, 40, 50];
$s = 0;
foreach ($a as $value) {
    $s = $s + $value;
};
$d = $s / count($a);
echo  $d;
?>
<h2>Задание 4</h2>
<?php
$a = [2.4, 5, 4, 3.2, 1];
$n = [];
foreach($a as $value) {
    if ($value > 0) {
        $value = $value * -1;
    }
    $n[]=$value * $value;
}
echo implode(", ", $a);
echo implode(", ", $n);
?>
<h2>Задание 5</h2>
<?php
$a = [1 , 4, 5, 2, 6];
foreach($a as $value){
    echo $value . " ,";
}
foreach ($a as $index => $value){
    if ($index % 2 == 0){
        echo $value . " ";
    }
}
echo "<br>";
?>
<h2>Задание 6</h2>
<
<?php
$s = [4,5,6,3,7,8,5,9];
$a = [];
for ($i = 1; $i < count($s); $i++){
    if ($s[$i] > $s [$i-1]) {
        echo $s[$i];
    }
}
echo "<br>";
?>