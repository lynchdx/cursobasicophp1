<?php

/*
//funciones string letras y numero
function persona($nombre, $apellido, $edad){

	echo "La persona de nombre $nombre con apellido $apellido tiene la edad de $edad años";

}

//LLamada de función con parámetros al interior.
persona("michel", "charnay", 29);
*/

//calculadora suma


function suma($a, $b){
	if (is_numeric($a) && is_numeric($b)) {
		$res = $a + $b;
		echo "el resultado es $res .";
	}else{
		echo "Sólo valores numéricos.";
	}
}

//tambien se puede retornar return $a + $b
suma(2,7);

?>