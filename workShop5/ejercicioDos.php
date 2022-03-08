<?php
$ceu = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$argv = $ceu;

print_r ($argv);


$suma = array_sum($argv);
$cantidadNumeros = count ($argv);
$promedio = $suma/$cantidadNumeros;

$max = max($argv);
$min = min($argv);

print ("El promedio de temperatura es: $promedio").PHP_EOL;

print ("La temperatura máxima es: $max").PHP_EOL;

print ("La temperatura mínima es: $min");


