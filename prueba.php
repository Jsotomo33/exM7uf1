<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  
	$i = 12;
	$tipus_de_i = gettype( $i );

	$a = 12.7;
	$tipus_de_a = gettype( $a );
	
	$e = True;
	$tipus_de_e = gettype( $e );
	
	$u = "Hola";
	$tipus_de_u = gettype( $u );
	
	echo "La variable \$i contiene el valor $i i es del tipus $tipus_de_i</br>";
	echo "La variable \$a contiene el valor $a i es del tipus $tipus_de_a</br>";
	echo "La variable \$e contiene el valor $e i es del tipus $tipus_de_e</br>";
	echo "La variable \$u contiene el valor $u i es del tipus $tipus_de_u";
	?>
</body>
</html>




