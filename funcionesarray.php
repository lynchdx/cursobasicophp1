<?php

$mascotas = array('perro', 'gato','iguana','lagartija','leon','puma','tigre');

//array 2 para usarlo junto con merge
//$asados = array('pollo','pulpa','lomo','vacuno');

//array_chunk se usa para separar en cantidades iguales
//$funcionSobreArray = array_chunk($mascotas, 4);


//array_slice para empezar (revanar) a contar  desde la posición.
//$funcionSobreArray = array_slice($mascotas, 4);

//array_merge es una función que se utiliza para unir 2 arrays.
//$funcionSobreArray = array_merge($mascotas, $asados);
/*
array_pop extrae y muestra el último elemento del array si este se aplica al vector, sin embargo, si se aplica directamente al array original $mascotas, extrae el último valor y lo borra.
*/
//$funcionSobreArray = array_pop($mascotas);
//array_pop($mascotas);
//print_r($mascotas);

//array_search busca la posición del elemento dentro del array, devolviendo un núermo por valor.
//$funcionSobreArray = array_search('leon',$mascotas);

//array_reverse genera que todo el array tome posición en reversa.
$funcionSobreArray = array_reverse($mascotas);

print_r($funcionSobreArray);
?>