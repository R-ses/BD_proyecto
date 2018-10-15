<?php

$link = mysqli_connect("localhost", "root", "", "basededatos");
 
// Check connection
if($link === false)
{
    die("ERROR: No se pudo conectar. ".mysqli_connect_error());
}

	$idEs =  $_POST['id_estado'];
	$nmEs = $_POST['nm_estado'];
	
	
	$sql = "INSERT INTO estado (ID_Estado,Nombre_Estado) VALUES ('$idEs', '$nmEs')";

	if(mysqli_query($link, $sql)){
	echo "Datos ingresados satisfactoriamente.";
	header("Location:index.html");
	  
} 

else
{
    echo "ERROR: Ocurrio un error $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>