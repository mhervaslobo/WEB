<html>


<head>
   <title>EJERCICIO 3_1: ANALISIS DE FORMULARIO</title>
</head>


<body>

  <h1>EJERCICIO 3_1: ANALISIS DE FORMULARIO</h1><br>
  <br>
  <h1>analisis de formularios (24_analisis1.php)</h1>

  <?php

  /*
  POST nos permite recuperar datos enviados desde formularios con el método POST

  La línea $nombre = $_POST['firstname']; que significa que creamos una variable
  php denominada $firstname donde almacenamos la información del campo ‘firstname’ a
  través del método post proveniente del formulario.*/

    echo "Hola <b>{$_POST['firstname']}</b>, encantado de saludarte.";

  ?>

</body>

</html>
