<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
    $conexion=mysqli_connect("localhost","root","")
      or die("Problemas en la conexion");
    mysqli_select_db($conexion,"phpfacil")
      or die("Problemas en la seleccion de la base de datos");
    $fechanacimiento=$_REQUEST['anio']."-".$_REQUEST['mes']."-".$_REQUEST['dia'];
    mysqli_query($conexion,"insert into alumnos(nombre,mail,codigocurso,fechanac)
                  values ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso],'$fechanacimiento')")
      or die("Problemas en el select".mysqli_error($conexion));
    mysqli_close($conexion);
    echo "El alumno fue dado de alta.";
  ?>
<br>
<a href="67_fecha2.php">ver listado de alumnos</a>

</body>

</html>
