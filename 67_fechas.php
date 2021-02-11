<html>

<head>
  <title>Problema</title>
</head>

<body>
  <form action="67_fecha1.php" method="post">
  Ingrese nombre:
  <input type="text" name="nombre"><br>
  Ingrese mail:
  <input type="text" name="mail"><br>
  Ingrese la fecha de nacimiento (dd/mm/aaaa):
  <input type="text" name="dia" size="2">
  <input type="text" name="mes" size="2">
  <input type="text" name="anio" size="4">
  <br>
  Seleccione el curso: <select name="codigocurso">
  <?php
    $conexion=mysqli_connect("localhost","root","")
      or die("Problemas en la conexion");
    mysqli_select_db($conexion,"phpfacil")
      or die("Problemas en la selección de la base de datos");
    $registros=mysqli_query($conexion,"select codigo,nombrecur from cursos")
      or die("Problemas en el select:".mysqli_error($concexion));
    while ($reg=mysqli_fetch_array($registros))
    {
      echo "<option value=\"$reg[codigo]\">$reg[nombrecur]</option>";
    }
  ?>
  </select>
  <br>
  <input type="submit" value="Registrar">
  </form>

</body>

</html>
