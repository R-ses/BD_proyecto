<?php

$link = mysqli_connect("localhost", "root", "", "login_credentials");
 
// Check connection
if($link === false)
{
    die("ERROR: No se pudo conectar. ".mysqli_connect_error());
}

	$nom =  $_POST['name'];
	$ps = $_POST['psw'];
	$lv = $_POST['nivel'];

	$sql = "INSERT INTO usuarios (contrasena, nombre,nivel) VALUES ('$ps', '$nom','$lv')";

	if(mysqli_query($link, $sql)){
	echo "Datos ingresados satisfactoriamente.";
	header("Location:Admin.html");
	  
} 

else
{
    echo "ERROR: Ocurrio un error $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>