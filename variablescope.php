<?php

//variables scope


/*
//la idea de este ejemplo consiste en que la variable $edad, solo se puede llamar desde la función mostrar_edad.
//Esto se refiere al alcance de las variables, que va, desde el interior de la función, hasta afuera de esta.
function mostrar_edad(){
	$edad = 29;
	echo $edad;
}


mostrar_edad();
*/

//==========================================================================

 /*
//otra manera de llamar variables que son retornadas.

function mostrar_edad2(){
 $edad =29;
 return $edad;
}

echo mostrar_edad2();
*/


//==========================================================================

//si la variable se encuentra fuera de la función, se puede llamar y ser uso dentro de esta de esta manera:

	$edad = 29;

	function mostrar_edad3(){
		global $edad;
		echo $edad;
	}

	mostrar_edad3();


?>