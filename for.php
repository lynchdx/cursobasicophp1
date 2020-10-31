<?php
/*
$cursos = array('python<br>','java<br>','php<br>','c<br>');
print_r($cursos);
echo $cursos[3];
$cursos[3] = 'c#';
echo $cursos[3];
echo '';
echo count($cursos);

*/

/*
//ejercicios con array
$semana[0] = 'lunes<br>';
$semana[1] = 'martes<br>';
$semana[2] = 'miercoles<br>';
$semana[3] = 'jueves<br>';
$semana[4] = 'viernes<br>';
$semana[5] = 'sabado<br>';
$semana[6] = 'domingo<br>';

for ($i=0; $i <count($semana) ; $i++) { 
	//echo $semana[$i];

		if ($semana[$i] == 'jueves<br>') {
			echo 'curso php';
		}


}

*/

/*
$personas = array('diego', 'coockie', 'momo', 'karin', 'michel');

$posicion = count($personas) - 2;

echo $personas[$posicion];
*/


$animales = array('gato', 'perro', 'pez', 'sardina', 'boa');

for ($i = 0; $i < count($animales); $i++){
	echo $animales[$i]. "<br>";

}

//asort funciona para ordenar en orden alfabético el arrya. rsort en orden inverso.
//asort($animales);
//print_r($animales);



?>