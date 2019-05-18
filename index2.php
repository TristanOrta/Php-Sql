<!DOCTYPE html> 
<html>
<head>




	<title>Software X</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./css/stylo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="./JS/cursor.js"></script>
	
	
	<style type="text/css">
 table {
	
	width: 25%;
	border-spacing: 10px;
	background: #000 url("ray.gif") bottom left repeat-x;
	color: #fff;
 }
 td, th {
	
	background: #fff;
	color: #000;
 }
</style>



</head>

<!-- **************** CODIGO PHP************************  -->
<?php 
require ("./conexion.php"); 

	session_start();
    
	if (isset($_SESSION['usuario']) ) {
		echo"";


	}
	else{
		echo "No haz iniciado Sesion"; }




	
?>



<!-- **************** CODIGO PHP************************  -->


<body>

 

<!------------------------Cabecera------------------------------>
	<header id="cabezera">
		<nav id="barra">
			<ul>
				<li ><a href="#">Inicio</a></li>
				<li ><a href="cerrarsesion.php">Cerrar Sesión</a>
			</ul>
		</nav>
	</header>
	<section id="cuerpo">
		

	<!--tabla -->
	<?php 
$consulta="SELECT * FROM correo ";
$result=mysqli_query($db,$consulta);

if($result){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
              
                echo "<th>Nombre</th>";
                echo "<th>Ocupacion</th>";
				echo "<th>email</th>";
				echo "<th>XxXxXxX</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr id='reg" .$row['id_correo']. "'>";
               
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['ocupacion'] . "</td>";
				echo "<td>" . $row['correo'] . "</td>";
				echo "<td ><button type='button' onclick='EliminarReg(\"".$row['id_correo']."\")'> Eliminar </button> </td>";
				
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
	?>


	</section>
	

	<script type="text/javascript">
		
		function EliminarReg(id) {
			
			$.post("EliminarReg.php",{id:id},function (data) {
				alert("Se elimino con exito")
				$('#reg'+id).remove();
			}).fail(function() {
				alert("fallo o no se encontro el elemento a eliminar")
			})			
			

			

		}
			
		</script>
	
</body>
</html>