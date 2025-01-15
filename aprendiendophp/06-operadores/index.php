<?php

//operadores aritméticos
$numero1 = 55;
$numero2 = 33;

echo 'suma'.($numero1+$numero2).'<br>';
echo 'resta:'.($numero1-$numero2).'<br>';
echo 'multiplicacion:'.($numero1*$numero2).'<br>';
echo 'division:'.($numero1/$numero2).'<br>';
echo 'resto:'.($numero1%$numero2).'<br>';

$year = 2019;
echo 'original';
echo '<h2>'.$year.'</h2>';

echo 'incremento<br>';
echo 'year = year + 1<br>';
$year++;
echo '<h1>'.$year.'</h1>';

echo 'decremento<br>';
echo 'year = year - 1<br>';
$year--;
echo '<h1>'.$year.'</h1>';

echo 'preincremente<br>';
echo ' $year  = 1 + $year<br>';
++$year;
echo '<h1>'.$year.'</h1>';

echo 'predecremento<br>';
echo ' $year  = 1 - $year<br>';
$year-1;
echo '<h1>'.$year.'</h1><br>';

//operadores de asignacion
$edad = 55;
echo $edad.'<br>';
echo ($edad+=5).'<br>'; //$edad = $edad + 5
var_dump($edad);
//se puede hacer esto con cualquier operador 
echo ($edad-=5).'<br>';
echo ($edad*=5).'<br>';
echo ($edad/=5).'<br>';
?>