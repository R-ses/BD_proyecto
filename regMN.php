<?php

$link = mysqli_connect("localhost", "root", "", "basededatos");
 
// Check connection
if($link === false)
{
    die("ERROR: No se pudo conectar. ".mysqli_connect_error());
}

	$idES = $_POST['id_es'];
	$idMN =  $_POST['id_muni'];
	$nmMN = $_POST['nm_muni'];
	
	$sql = "INSERT INTO municipio (Estado_ID_Estado,ID_Municipio,Nombre_Municipio) VALUES ('$idES','$idMN', '$nmMN')";

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


