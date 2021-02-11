<head>
  <title>Problema</title>
</head>

<body>
  <?php
    $conexion=mysqli_connect("localhost","root","")
      or die("Problemas en la conexion");
    mysqli_select_db($conexion,"phpfacil")
      or die("Problemas en la selección de la base de datos");
    $registros=mysqli_query($conexion,"update alumnos set codigocurso=$_REQUEST[codigocurso] where mail='$_REQUEST[mailviejo]'")
      or die("Problemas en el select:".mysqli_error($conexion));
    echo "El curso fue modificado con exito";
  ?>
</body>

</html>
