<?php
require ("./conexion.php"); 

    $id_corr=$_POST['id'];
    $consulta="DELETE FROM `correo` WHERE `correo`.`id_correo` =".$id_corr;
    $resultado=mysqli_query($db,$consulta);








    $id_soft=$_POST['id'];
    $consulta="DELETE FROM `soft` WHERE `soft`.`id_soft` =".$id_sof;
    $resultado=mysqli_query($db,$consulta);

    

?>