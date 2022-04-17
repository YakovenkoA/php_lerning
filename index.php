<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo 'Hallo world!<br/>';
    echo "Hallo, world!<br/>";
    echo 'To day is ';
    echo date('d.m.y h:i');
    echo '<br/>';

//Переменные

    $my_variable = 100; // integer
    echo '<hr>';
    echo $my_variable;
    echo '<hr/>';
    $a=100; //integer, int
    $b=14.2; //float
    $c='Howdy Ho!'; //string, str

//Массивы

    $e=array(1, 2, 3, 4, 5);
    echo $a;
    echo '<br/>';
    echo $b;
    echo '<br/>';
    echo $c;
    echo '<br/>';
    echo $e[2];
    echo '<br/>';
    echo $e[4];
    echo '<hr/>';  


    $d=array(
        'Jonny',
        'Flame',
        'Abraham',
        'Walker');
    echo $d[2];
    echo '<br/>';
    echo $d[0]; 
    echo '<br/>'; 
    
    
    $f=array( //ассоциативный массив
        'name' => 'Alexandr',
        'surname' => 'Yakovenko',
        'age' => 20,
        'byear' => 1987,
        'education' => array( //многомерный массив
            'school in 2005',
            'college in 2010')
    );
    echo $f['surname'];
    echo '<br/>';
    echo $f['byear'];
    echo '<br>';
    echo $f['education'][1];
    echo '<br>';


    $g = 100;
    echo 'test apostrof: $g<br/>';// апостроф
    echo "test kovychki: $g<br/>";// ковычки

    $aname = 'Sasha';
    $bname = 'Yakovenko';
    echo $aname .' '. $bname;// конкатенация
    echo '<hr>';

 //  Арифметические операции  + - * / %
 
 echo 5 + 10;
 echo '<br>';
 echo 5 * 5;
 echo '<br>';
 echo 10 - 8;
 echo '<br>';
 echo 100 / 5;
 echo '<br>';
 echo 1080 % 2; //Деление по модулю
 echo '<br>';

 $h = 120;
 $j = 180;
 echo 'Ответ: ' . ($h + $j);
 echo '<hr>';

 // Условие <, >, <=, >=, ==, !=

 $weather = 'ясно'; 
 if($weather == 'снег') {
     echo 'Погода плохая, лучше никуда не ехать.';
}

if( $weather == 'дождь') {
    echo 'Дождливая погода.';
}

if( $weather == 'ясно') {
    echo 'Погода отличная!!!';
}

if( $weather == 'облачно') {
    echo 'Погода может испортиться.';
};
echo '<br>';

$age = 35;

if( $age < 18) {
    echo 'Вам нельзя!';
}


if( $age >= 18) {
    echo 'Добро пожаловать!!!';
}
echo '<br>';

$key = 1300;
 
if( $key != 300) {
    echo 'Это не 300';
} else {
    echo 'Это 300';
}
echo '<br>';

$rname = 'Александр'; // and, or
$rage = 3;

if( $rname != 'Александр' and $rage <35){
    echo 'Вам сюда нельзя';
} else {
    echo 'Привет!!!';
}
echo '<hr>';

// Циклы for, while, foreach

for( $i = 1; $i <= 10; $i++) // for
{
    echo $i;
    if( $i % 2 == 0) // Условие (дополнительно)
    {
        echo ' - Число четное' . '<br>';
    }
    else
     {
        echo ' - Число не четное' . '<br>';
    }
}

$test = 10;
while( $test <= 15) // Пока условие выполняется
{
    echo 'Тест ' . $test. '<br>';
    $test++;
}

$names = array(
    'Jonny',
    'Abraham',
    'Wisker',
    'Walker',
    'Alex'
);
foreach( $names as $value) // Вывести все имена
{
    echo $value . '<br>';
}

$numbers = array(5, 10, 15, 20);
foreach( $numbers as $num)  // Вывести все числа и квадраты чисел
{
    echo 'Квадрат числа ' . $num . ': ' 
    . ($num * $num) . '<br>';
}
echo '<hr>';

// Функции

function myfunction () // объявляем функцию
{
    //Блок кода
    echo 'Привет, мир!!!' . '<br>';
}
myfunction(); // Вызов функции


function get_bigger ($a, $b) // Выбор большего числа
{
    if ( $a > $b)
    {
        echo $a . '<br>';
    }
    else {
        echo $b . '<br>';
    }
}

get_bigger (5, 3);
get_bigger (5, 9);
get_bigger (4, 7);

?>
</body>
</html>