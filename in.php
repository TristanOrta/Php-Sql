<?php 
//include ("conexion.php"); 






      

 //declaramos como variables a los campos de texto del formulario.
 $nombre=$_POST["nick"];
 $password=$_POST["pass"];

 //Consulta del usuario y el password
 $consulta="SELECT nickname,pass FROM usuarios 

 WHERE nickname='$nombre' and pass='$password'";

 if($query= $conexion->query($consulta)){
 $row=$query->fetch_array(); 
 $nr =$query->num_rows; 

 //Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.
 if($nr == 1){ 
   header ("Location:index2.html"); 
 }
 //Si no existe lo va a enviar al login otra vez.
 else if($nr <= 0) { 
               header("Location:index.html"); 
 }  
 }







?>