<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-HW1</title>
</head>
<body>

<?php 
/*1. Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, 
разность, произведение и частное (результат деления)*/
echo "<p><b>Task 1</b></p>";

$a = 10;
$b = 2;

echo $a + $b;
echo "</br>";
echo $a - $b;
echo "</br>";
echo $a * $b;
echo "</br>";
echo $a / $b;
echo "<hr>";

/*2.  Даны три числа x = 2,y = 6 и z = 9. Найдите (x+1)4−2(z−2x^2+y^2)*/
echo "<p><b>Task 2</b></p>";
function result($x = 0, $y = 0, $z = 0){

    $result = ($x + 1) * 4 - 2 * ($z - 2*($x**2) + $y**2);
    return $result;

}

echo "<b>" . result(2,6,9) . "</b>";
echo "<hr>";

/*3. Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и 
результат присвойте переменной $c. Затем создайте переменную $d, присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.*/
echo "<p><b>Task 3</b></p>";

function result2($a = 0, $b = 0){
    $c = $a - $b;
    $d = 7;
    $result = $c + $d;

    return $result;

}

echo "<b>" . result2(17,10) . "</b>";
echo "<hr>";

/*4. Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк выведите на экран фразу 'Привет, Мир!'.*/
echo "<p><b>Task 4</b></p>";

$text1 = 'Привет, ';
$text2 = 'Мир!';
echo "<b>" . $text1 . $text2 . "</b>";
echo "</br>";
echo "<i>$text1 $text2</i>";
echo "<hr>";

/*5. Создайте переменную $name и присвойте ей ваше имя. Выведите на экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя*/
echo "<p><b>Task 5</b></p>";

$name = "Pavel";
echo "<b>Hello, <i>$name</i>!</b>";

echo "<hr>";

/*6. Создайте переменную $num и присвойте ей значение '12345'. Найдите 
сумму цифр этого числа*/
echo "<p><b>Task 6</b></p>";

$num = (string)12345;
$sum = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
echo "<b>$sum</b>";
echo "</br>";

function sum($num){
    $sum = null;
    for($i = 0; $i < strlen($num); $i++){
        $sum += $num[$i];
    }
    return $sum;
}
echo sum((string)12345);
echo "<hr>";

/*7. Напишите скрипт, который считает количество секунд в часе, в сутках, в месяце, в году и сколько прошло секунд с начала 2000 года*/
echo "<p><b>Task 7</b></p>";
$secinhour = 60 * 60;
$secinday = $secinhour * 24;
$secinmonth = $secinday * 30;
$secinyear = $secinday * 365;
echo "Секунд: в часе - <b>$secinhour</b>, в сутках - <b>$secinday</b>, в месяце - <b>$secinmonth</b>, в году - <b>$secinyear</b>." . "</br>";
echo "</br>";
$time = time() - strtotime('2000-00-00');
echo "С начала 2000 года прошло <b>$time</b> секунд.";

echo "<hr>";

/*8. Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'*/
echo "<p><b>Task 8</b></p>";
date_default_timezone_set('Europe/Minsk');


$hour = localtime(time(), true)['tm_hour'];
$min = localtime(time(), true)['tm_min'];
$sec = localtime(time(), true)['tm_sec'];

echo "<p><b>$hour:$min:$sec</b></p>";

echo "<hr>";

/*9. Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться. Код для переделки:
$var = 1;
$var = $var + 12;
$var = $var - 14;
$var = $var * 5;
$var = $var / 7;
$var = $var + 1;
$var = $var - 1;
echo $var*/
echo "<p><b>Task 9</b></p>";

$var = 1;
$var += 12;
$var -= 14;
$var *= 5;
$var /= 7;
$var++;
$var--;
echo $var;

echo "<hr>";
/*10. Создайте константу и присвойте ей значение - ваша фамилия, создайте соответствующие переменные со сл. значениями: ваше имя, ваше отчество, ваш возраст. Проверьте существует ли созданная константа, если да, то выведите фразу "Меня зовут <ваша фамилия> (сокр. <ваше имя> и сокр. ваше отчество). Мне <ваш возраст> лет". Каждая фраза должна начинаться с новой строки. Например:
"Меня зовут Иванов (И. И.).
Мне 5 лет.)*/
echo "<p><b>Task 10</b></p>";
function data($surname = ''){
    if(!empty($surname)) define('SURNAME', $surname);
    $name = 'Иван';
    $patronymic = 'Иванович';
    $age = 30;
    if(defined('SURNAME')){
        return "Меня зовут " . SURNAME . " (" . mb_substr($name, 0, 1) . "." .mb_substr($patronymic, 0, 1).")." . "</br>" . "Мне $age лет.";
    } else {
        return "Введите фамилию";
    }
}

echo  data('Иванов');
echo "<hr>";

?>
    
</body>
</html>
