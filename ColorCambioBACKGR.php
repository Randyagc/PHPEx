<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
		<title> Ejercicio 4.5  </title>
	</head>
	<body>
		<?php
			define (Tam, 10);
			echo "<table border=1>";
			$n=1;
			for ($n1=1; $n1<=Tam; $n1++)
			{
				if ($n1 % 2 == 0)
					echo "<tr bgcolor=#bdc3d6>";
				else
					echo "<tr>";
				for ($n2=1; $n2<=Tam; $n2++)
				{
					echo "<td>", $n, "</td>";
					$n=$n+1;
				}
				echo "</tr>";
			}
			echo "</table>";
		?>
	</body>
</html>