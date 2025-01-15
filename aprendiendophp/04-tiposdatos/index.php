<?php

/* 
Tipos de datos:
Entero (int/integer) = 99
coma flotante / decimales (float/double) = 3.45
Cadenas (String) = "hola yo soy un string"
Booleano (bool/boolean) = true false
null
ARRAY vectores, colecciones de datos
Objetos
*/

$numero = 100;
echo gettype($numero);
$decimal = 23.9;
echo gettype($decimal);
$string = "cadena";
echo gettype($string);
$boleano = true;
echo gettype($boleano);
$nula = null;
echo gettype($null);

//debugear
$mi_nombre = "armando";
var_dump($mi_nombre);

//simbolos para imprimir en cadenas
$texto = "soy un texto $mi_nombre"; //esto es mas lento para el servidor
echo $texto;
?>