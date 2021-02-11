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
    $registros=mysqli_query($conexion,"select count(alu.codigocurso) as cantidad,nombrecur
                            from alumnos as alu inner join cursos as cur on cur.codigo=alu.codigocurso
                            group by alu.codigocurso")
      or die("Problemas en el select:".mysqli_error($conexion));
    while ($reg=mysqli_fetch_array($registros)) {
      echo "Nombre del curso:".$reg['nombrecur']."<br>";
      echo "Cantidad de inscriptos:".$reg['cantidad']."<br>";
      echo "<hr>";
    }
    mysqli_close($conexion);
  ?>
</body>

</html>
