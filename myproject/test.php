<?php

echo "Приклади роботи зі змінними <br>";
$num = 10;
$exp = $num ** 2;
echo "Вивід змінної: $num <br>";
echo "Зведення числа в ступінь змінної (num**2): $exp <br>";

$a = 10;
$b = '000';
$c = 'a';

echo '<br> Невірна конкатенація ($a+$b):  ';
echo $a + $b;
echo '<br> Вірна конкатенація ($a.$b):  ';
echo $a . $b;
echo '<br> Розіменування змінної ($$c):  ';
echo $$c;

$temp1 = 0;
$temp2 = null;

echo '<br> <br> Перевірка значень, які приводяться до одного типу';
if ($temp1 == $temp2)
    echo '<br> 0 та null рівні';
else echo '<br> 0 та null нерівні';

echo '<br> Перевірка і типу значень, і самих значень';
if ($temp1 === $temp2)
    echo '<br> 0 та null рівні';
else echo '<br> 0 та null нерівні <br>';

$a = "Hello,";
$b = "world";
echo '<br> Обєднання строк: ';
echo $a . " " . $b . "! <br>";

echo 'Використання циклу for: <br>';
for ($i = 1; $i < 10; $i++) {
    echo "Квадрат числа $i равен " . $i * $i . "<br/>";
}
echo '<br> Робота з масивами: <br>';
$numbers = [1, 2, 3, 4];
$nums = count($numbers);
echo "Виведення 2 елементу масива: $numbers[2] <br>";
echo "Виведення кількості елементів у масиві (count(arr)): $nums <br>";
echo 'Виведення масиву поелементно (print_r): <br>';
print_r($numbers);

echo '<br> Використання foreach для виведення масиву: ';
foreach ($numbers as $item) {
    echo "<br> $item ";
}


$message;
if(isset($message))
    echo $message;
else
    echo "переменная message не определена <br>";

$text = "petrov0_20@gmail.com";
echo "<br> Робота з explode()  <br> Пошта: <br> $text<br> ";
list($name, $mail) = explode("@", $text);
echo 'Перша частина:  <br>';
echo $name;
echo '<br> Друга частина:  <br>';
echo $mail;

$array = array('Мама', 'мила', 'раму');
echo "<br> Робота з implode()  <br>";
$text2 = implode(", ", $array);
echo " Об'єднані слова: $text2 <br>";



?>