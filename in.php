<?php 
require ("./conexion.php"); 
	







	session_start();
/*	variables para la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "basex";
*/
	///conexion a la base de datos
	//$db= mysqli_connect($servidor,$usuario,$password,$basededatos);




/**************  si el boton ingresar (en formulario de login ) es presionado entrara ala pagina index 2*****************/
	if (isset($_POST['ingresar']) ) {
	
		/* toma los valores que le madna el formulario de login y los alamcena en dos variables*/
		$usu=$_POST['nick'];
		$password=$_POST['pass'];
		
		//creamos la consulta a la base de datos
	
		$consulta="SELECT * FROM usuarios WHERE nickname='$usu' and pass='$password'";
		$resultado=mysqli_query($db,$consulta);


	
		//se crea una variable para tomar el valor que arrojo el resultado de la consulta
	
		$nr=mysqli_num_rows($resultado);
	
		// si el resultado es mayor a 0 entonces se ingresa al index2
	
		if ($nr>0 ) {
			$_SESSION['usuario']=$usu;
			header ("Location:index2.php");

			}
// si el valor es diferente entonces imprime un mensaje de error
	else {
		echo "error al ingresar al sistema";
		}
}




/******* si el boton suscribirse en presionado entonces manda los campos a la tabla correo ********/
	if (isset($_POST['suscribirse']) ) {
		
		$nom=$_POST['nombre'];
		$ocu=$_POST['ocupacion'];
		$corr=$_POST['correo'];

		$consulta= "INSERT INTO correo(nombre,ocupacion,correo) VALUES ('$nom','$ocu','$corr')";

		mysqli_query($db,$consulta);
		
		header("Location:index.html");
	}



?>