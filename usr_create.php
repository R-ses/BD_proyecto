<?php

$link = mysqli_connect("localhost", "root", "", "Cred");
 
// Check connection
if($link === false)
{
    die("ERROR: No se pudo conectar. ".mysqli_connect_error());
}

	$nom =  $_POST['name'];
	$ps = $_POST['psw'];
	$lv = $_POST['job'];
	$email = $_POST['email'];
	$sqlemail = 'Select * From Users WHERE email =\''.$email.'\'';
	$sc = mysqli_query($link,$sqlemail);	
	$culo = mysqli_fetch_array($sc,MYSQLI_NUM);
	
	if($culo[2] === $email)
	{
		echo "Correo Existente";
		header("Location:Admin.html");		
	}	
	else
	{

	switch($lv)
	{
		case 'Admin':
		$lv_s = 1;
		break;
		case 'Mang':
		$lv_s = 2;
		break;
		case 'Storage':
		$lv_s = 3;
		break;
		default:
		$lv_s = 0;	
	}
	
	$sql = "INSERT INTO Users (pass, user,level,email) VALUES ('$ps', '$nom','$lv_s','$email')";
	if(mysqli_query($link, $sql))
	{
		echo "Datos ingresados satisfactoriamente.";
		header("Location:Admin.html");
	} 
} 

mysqli_close($link);
?>