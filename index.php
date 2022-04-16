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
    $my_variable = 100; // integer
    echo '<hr>';
    echo $my_variable;
    echo '<hr/>';
    $a=100; //integer, int
    $b=14.2; //float
    $c='Howdy Ho!'; //string, str


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

 //  + - * / %
 
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

?>
</body>
</html>
