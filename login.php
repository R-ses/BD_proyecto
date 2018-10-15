<?php

$link = mysqli_connect("localhost", "root", "", "basededatos");
	if($link === false)
	{
		die("ERROR: Could not connect. " . mysqli_connect_error());
		mysqli_close($link);

	}
	else{
		
			//$ID = mysqli_real_escape_string($link,$_POST['usr']);
			$ID = $_POST['usr'];
			$PS = $_POST['psw'];
			//$pass = mysqli_real_escape_string($link,$_POST['psw']);
			var_dump($ID);
			var_dump($PS);
	        $query = 'Select * From usuarios WHERE nombre = \''.$ID.'\' and contrasena = \''.$PS.'\'';
			var_dump($query);
			
			$res = mysqli_query($link,$query);
			//var_dump($res);
			$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
			//print(mysql_error());
			
			
			$count = mysqli_num_rows($res);
			var_dump($count);
			
			
			if($count==true)
				{
				
					$c_level = 'Select * From usuarios WHERE nombre =\''.$ID.'\'';
					$level = mysqli_query($link,$c_level);
					$level_val = mysqli_fetch_array($level,MYSQLI_NUM);
					
					var_dump($level_val[3]);
					
					switch($level_val[3])
						{
							case '1':
								
								header("Location: Admin.html");
								break;
							case '2':
								header("Location: Mang.html");
								break;
						}		
				
					
				}
				else
				{
				
				header("Location: index.html");
				
				}
		
		
	
		}
	

?>