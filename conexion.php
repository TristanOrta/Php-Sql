<?php
	// Ejemplo de conexión a base de datos MySQL con PHP.
	//
	





	// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "basex";
	

	// Selección del a base de datos a utilizar
	$db= mysqli_connect($servidor,$usuario,$password,$basededatos)or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );


	


	//mysqli_close( $db );
?>