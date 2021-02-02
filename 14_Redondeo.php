<!Ejemplo de redondeo>

<html>

<head>
   <title>Calculos </title>
</head>

<body>

	<h1>Calculos, redondeo y formato. </h1>

	<?php
	         /* Primero declaramos las variables */

	         $precioneto = 101.98;
	         $iva = 0.196;
	         $resultado = $precioneto * $iva;

	         echo "El precio es de ";
	         echo $precioneto;         
	         echo " y el IVA el ";         
	         echo $iva;         
	         echo "% <br>";         
	         echo "Resultado: " ;     

//La funcion que usamos de php es round que sirve para redondear
//el primer parametro es lo que queremos redondear y el segundo
//el numero de cifras decimales	         

	         echo round($resultado,2);         
	         echo " con ROUND() <br>";         
	         echo $resultado;         
	         echo " normal \n";         
	         echo "<br><br>";   

//La funcion sprintf devuelve un string con las especificaciones que se incluyan
//como primer parametro
     
	         $resultado2 = sprintf("%01.2f", $resultado);         
	         echo "Usando la funcion SPRINTF se ve asi: ";         
	         echo $resultado2 ?>

</body>

</html> 