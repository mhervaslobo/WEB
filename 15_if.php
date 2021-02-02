<html>

<head>
   <title>Condicion IF</title>
</head>

<body>

	<h1>Condicional IF</h1>

	<?php    

	$a = 8;    
	$b = 3;    
	echo "Valor de a: ",$a," y el valor de b:",$b,"<br>"; 


	   /*
La sentencia if else realiza el bloque dentro del if si se cumple
la condición, sino, realiza el bloque else.
	   */

	if ($a<$b)    
	{
	    echo "a es menor que b";
	
	}else{     
		echo " a no es menor que b";

	}

	?>

</body>

</html> 