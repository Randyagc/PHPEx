<?php

// Crear un array
$array = array(1,2,3,4,5);
print_r($array);
?>
</br>
<?php

// Ahora elimina cada elemento, pero deja el mismo array intacto:
foreach ($array as $i => $value)
 {
	 unset($array[$i]);
 }
print_r($array);
?>
</br>
<?php

// Agregar un elemento (note que lanueva clkave es 5, en lugar de 0)
$array[] = 6;
print_r($array);
?>
</br>

<?php

// Re - Indexar
$array = array_values($array);
$array[] = 7;
print_r($array);

?>
<?php
// Obtener el primer caracter de un string
$str = 'Esto es una prueba.';
$primero = $str[0];

// Obtener el tercer caracter de un string
$tercero=$str[2];

// Obtener el último caracter de un string
$str='Esto sigue siendo una prueba.';
$ultimo=$str[strlen($str)-1];

// Modificar el último caracter de un string
$str='Mira el mar';
$str[strlen($str)-1]='l';
?>