<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
		$d = new DateTime();
		$tipus_de_d = gettype( $d );
		echo "La variable \$d conte el valor " . $d->format("d/m/Y") . " i es del tipus $tipus_de_d<br>";

		$classe_de_d = get_class( $d );
		echo "La clase del objeto \$d, es de tipo $classe_de_d";
//La variable $d es de tipo objeto
// El operador de concatenacion de strings en PHP es el punto.
//El metodo format ("d/m/Y") devuelve un formato de fecha dd/mm/yyyy
// No, no funciona porque se tiene que dar formato al tipo objeto

	?>
</body>
</html>
