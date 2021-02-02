<html>

<head>
	
</head>

<body> 

	<?php

//La función date("d") devuelve el dia del mes

	$dia=date("d");
	if ($dia<=10) {

	   echo "sitio activo";

	} else {

	   echo "sitio fuera de servicio";

	}

	?>
		
</body>

</html> 