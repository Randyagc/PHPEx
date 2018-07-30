<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
		<title>  Ejercicio 5.1 en PHP </title>
	</head>
	<body>
		<?php
			//import_request_variables("pg", "f_");
			echo "Son ";
			echo 15*166.386;
			echo " pesetas";
			echo "</br>";
			// Ejemplo de botón regresar a página indmediata anterior
			echo '<a href="'.$_SERVER['HTTP_REFERER'].'">Regresar</a>';
		?>
	</body>
</html>