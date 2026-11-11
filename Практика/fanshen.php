<h1> Функции</h1>
<h2> Определиние функции и её вызов</h2>
<?php 
sayHello();
function sayHello()
{
    echo  '<p> Привет!</p>';
}
sayHello();
?>
<h2> Передача в функцию пораментров </h2>
<?php 
function sayHello1($name)
{
    echo  "<p> Привет, $name!</p>";
}
sayHello1('Вася');
?>
<?php 

function printfullName($fName, $lName)
{
    echo "$fName $lName";
}
printfullName('Ваня', 'Иванов');
?>
<h2> Функция с пораметрами по умолчанию </h2>
<?php 
function printUserInfo($fName, $lName, $role ='user')
{
    echo "<p> $fName, роль - $role </p>";
}
printUserInfo('Коля', 'Петров', 'student');
?>
<h2> Возврвщение значения</h2>
<?php 
function getUserInfo($fName, $lName, $role ='user')
{
    return " $fName $lName, роль - $role";
}
$info = getUserInfo('Маша', 'Иванова');
echo $info;
function squareRect($l, $w)
{
    return $l * $w;
}
echo '<p> Площащадь - ' . squareRect(20, 5) . '</p>';