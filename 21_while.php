<html>

<head>
   <title>Bucle While</title>
</head>

<body>

	<h1>Bucle While</h1>

	<?php

	/*
		En este fichero php hace el código real, lo que queda dentro de la página
		Lo separa de html para que al inspeccionar la página no salga cómo está programada
	*/

	/* Mostraremos el uso de la sentencia While y comenzamos a usar entrada    del teclado mediante un formulario simple */

	if ( isset( $_POST['number'] )) //La función isset determina si una función está definida y no es NULL
									//La variable $_POST devuelve un array de variables pasadas al script
									//actual a través del método POST de HTTP (VER MAS EN EL HTML)

	{
		$number = $_POST['number'];
		$counter = 1;

		while ($counter <= $number) {
			echo "Los bucles son faciles!<br>\n";
			$counter++;
		}

		echo "Se acabo.\n";
	}

	?>
</p>

</body>

</html> 