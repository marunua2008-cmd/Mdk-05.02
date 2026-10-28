<h1>Ассоциативные масивы</h1>
<h2>Создание массива</h2>
<?php
$n = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4, 'five' => 5];
?>
<h2>Вывод на экран</h2>
<?php 
foreach($n as $a){
    echo $a, ',';
}
?>
<h2>Обращение к элементу</h2>
<?php 
echo $n['two'];
$n['two'] = '2';
?>
<h2> Создание элемент в массив</h2>
<?php 
$n['seven'] = 7;
$n[] = 8;
$n[6] = 6;
$n[] = 22;
?>
<h2>Вывод массива вместе с ключами</h2>
<?php 
foreach ($n as $key => $value){
    echo "$key - $value <br>";
}
?>
<h2>Строка</h2>
<?php 
$str = 'привет';
echo $str[3], '<br>';
$str[3] = 'w';
$len = strlen($str);
echo "Длина строки $str - $len символов"
?>