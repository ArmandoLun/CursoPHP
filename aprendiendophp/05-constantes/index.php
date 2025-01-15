<?php
//Constante, contenedor de informacion que no puede variar.

define('nombre', 'Armando');
define('web', 'armando.web');

echo nombre;
echo '<h1>'.web.'</h1>';

//Constantes predefinidas
echo PHP_BINARY.'<br>';
echo PHP_OS.'<br>';
echo PHP_VERSION.'<br>';
echo __FILE__.'<br>';
echo __DIR__.'<br>';
?>