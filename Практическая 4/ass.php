<h2>Задание 1</h2>
<p>Создайте ассоциативный массив, ключами которого являются английские слова, а значениями - русские (10 пар). Вывести его на экран в виде:monday - понедельникfriday - пятница</p>
<?php 
$n = ['monday' => 'Понедельник', 'tuesday' => 'Вторник', 'wednesday' => 'Среда', 'thutsdae' => 'Пятница', 'saturday' => 'Суббота', 'sunday' => 'Воскресенье', 'sun' => 'Солнце', 'age' => 'Возраст', 'ten' => 'Десять'];
foreach($n as $key => $value){
    echo "$key - $value <br>";
}
?>
<h2>Задание 2</h2>
<p>Дан массив предыдущего задания и русское слово для перевода.Если в словаре есть заданное слово - вывести на экран его и его перевод. Если нет вывести его - строку 'В словаре нет такого слова'.Например:один - one кракозябра - В словаре нет такого слова</p>
<?php 
$dictionary = [
    'monday' => 'понедельник', 'friday' => 'пятница', 'one' => 'один'
];
$search_word = 'десять'; 
$eng_word = null;
foreach ($dictionary as $eng => $rus) {
    if ($rus === $search_word) {
        $eng_word = $eng;
        break; // Выходим из цикла
    }
}
if ($eng_word !== null) {
    echo "$search_word - $eng_word";
} else {
    echo "$search_word - В словаре нет такого слова";
}
?>
<h2>Задание 3</h2>
<p>Измените решение Задания 2 так, чтобы перевод работал в обе стороны и переводиться могли и русские и английские слова.</p>
<?php 
$dictionary = [
    'monday' => 'понедельник', 'friday' => 'пятница', 'one' => 'один'
];
$word = 'пятница'; 
$translated = null;
if (isset($dictionary[$word])) {
    $translated = $dictionary[$word];
} else {
    foreach ($dictionary as $eng => $rus) {
        if ($rus === $word) {
            $translated = $eng;
            break;
        }
    }
}
if ($translated !== null) {
    echo "$word - $translated";
} else {
    echo "$word - В словаре нет такого слова";
}
?>
<h2>Задание 4</h2>
<p> Измените решение предыдущих заданий так, чтобы слово для перевода можно было вводить в форму.</p>
<form method="POST">
    <input type="text" name="word" placeholder="Введите слово" required>
    <button type="submit">Перевести</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dictionary = ['monday' => 'понедельник', 'friday' => 'пятница', 'one' => 'один'];
    $word = trim($_POST['word']);
    $translated = null;

    if (isset($dictionary[$word])) {
        $translated = $dictionary[$word];
    } else {
        foreach ($dictionary as $eng => $rus) {
            if ($rus === $word) {
                $translated = $eng;
                break;
            }
        }
    }

    if ($translated !== null) {
        echo "Результат: $word - $translated";
    } else {
        echo "Результат: $word - В словаре нет такого слова";
    }
}
?>