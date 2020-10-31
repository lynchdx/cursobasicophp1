<?php

//Hacer un matriz asociativo para recorrerlo con foreach

$juegos = array('ff' => 'squaresoft', 'kh' => 'squareenix', 'sf' => 'capcom', 'kof' => 'skn');


//Recorrer con foreach

//recorrer con foreach, puedes colocar $i (ff, kh, sf, kof), o $dato (lo que contiene el dato).
foreach ( $juegos as $i => $valor){

	echo $i.'<br>';
}



/*
//===============================================
//esto de abajo está malo
//Recorrer con for

foreach($juegos as $key => $value){

	for ($i=0; $i< count($value); $i++) { 
	echo $key;
}

}

//===============================================
*/
?>