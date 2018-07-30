<!DOCTYPE HTML>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>

        <?php
            echo '¡Hola, soy un script de PHP!.<br />';
			if (strpos($_SERVER[HTTP_USER_AGENT]. 'Edge') !== FALSE)
			{
		?>
		<h3> strpos() debe haber devuelto no Falso</h3>
		<p>Está usando Internet Explorer</p>
		<?php
			echo 'Está usando Internet Explorer.<br />';
			} else {
		?>
		<h3>strpos() debe haber devuelto Falso</h3>
		<p>No está usando Internet Explorer</p>
		<?php
		}
		echo $_SERVER['HTTP_USER_AGENT'];
			//phpinfo();
        ?>

    </body>
</html> 
