<html> 

<head>
   <title>Ejemplo de operaciones</title>
</head>

<body>

	<h1>Ejemplo de operaciones aritmeticas en PHP</h1>

	<?php
	$a = 8;		//Las variables numéricas en php se declaran igualando al numero directamente
	$b = 3;
	echo $a + $b, "<br>"; //Las operaciones se hacen escribiendo un operador entre variables
	/*
		+ suma
		- resta
		/ division
		* multiplicación
		$a++ incrementa una variable
		$a-- decrementa una variable
	*/

	//Para mostrar en una misma líne cadenas y numeros:
	echo "El resultado de la resta de  $a y  $b es ";
	echo $a - $b, "<br>";


	echo $a * $b, "<br>";
	echo $a / $b, "<br>";
	$a++ ;
	echo $a,"<br>";
	$b--;
	echo $b,"<br>";
	?>

</body>


</html> 