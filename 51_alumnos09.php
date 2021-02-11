<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
    $conexion=mysqli_connect("localhost","root","")
      or die("Problemas en la conexion");
    mysqli_select_db($conexion,"phpfacil")
      or die("Problemas en la selección de la base de datos");
    $registros=mysqli_query($conexion,"select count(*) as cantidad from alumnos")
      or die("Problemas en el select:".mysqli_error($conexion));
    $reg=mysqli_fetch_array($registros);
    echo "La cantidad de alumnos inscriptos son :".$reg['cantidad'];
  ?>
</body>

</html> 
