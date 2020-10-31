<?php

//en default es cuando no cae en ninguna opción.


//switch
$curso = 'asd'; 
switch ($curso){
	case 'php':
		echo 'lunes y el martes';
	break;

	case 'java':
		echo 'miercoles';
	break;
	
	case 'python':
		echo 'jueves';	
	break;

	default:
		echo 'No existe niguna opción';
		break;
}

?>