
<h1>Тип данных php</h1>
<h2>Целые цисла -int</h2>
<?php
$namber = 0x354F2C;
echo $namber;
?>
<h2>Числа с плавущей точкой -Float</h2>
<?php
$a = 2.5;
$b = 42.;
$c = 1.5e5;
$d = 2.4e-3;
echo "$a, $b, $c, $d";
?>
<h2>Строки - string</h2>
<?php
$str = 'Переменная a = $a';
$str1  = "Переменная a = $a";
$str2 = "WWW";
echo $str, '<br>', $str1, '<br>', $str2;
?>
<h2>Лолгические значения - bool</h2>
<?php
$t = true;
$f = false;
echo  "t = $t,  f = $f";
?>
<h2>Специальное значение - null</h2>
<?php
$n = null;
echo  "n = $n";
