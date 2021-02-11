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
  $registros=mysqli_query($conexion,"select alu.codigocurso as codigo,nombre,mail,
                          codigocurso,fechanac,nombrecur from alumnos as alu
                          inner join cursos as cur on cur.codigo=alu.codigocurso")
    or die("Problemas en el select:".mysqli_error($conexion));
  while ($reg=mysqli_fetch_array($registros))
  {
    echo "Codigo:".$reg['codigo']."<br>";
    echo "Nombre:".$reg['nombre']."<br>";
    echo "Mail:".$reg['mail']."<br>";
    echo "Fecha de Nacimiento:".$reg['fechanac']."<br>";
    echo "Curso:".$reg['nombrecur']."<br>";
    echo "<hr>";
  }
  mysqli_close($conexion);
?>
</body>

</html>
