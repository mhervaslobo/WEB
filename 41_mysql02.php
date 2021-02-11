<html>

<head>
   <title>MySQL 02 - Consulta BD con tabla (Agenda)</title>
</head>

<body>
  <h1>MySQL 02 - Consulta BD con tabla (Agenda)</h1>

  <?php
//Funcion de internet porque mysql_field_name no existe ya

function mysqli_field_name($result, $field_offset)
{
    $properties = mysqli_fetch_field_direct($result, $field_offset);
    return is_object($properties) ? $properties->name : null;
}


    $dp = mysqli_connect("localhost", "root", "" );
    mysqli_select_db($dp,"AGENDA");
    $sql = "SELECT * FROM DIRECCIONES" ;
    $resultado = mysqli_query($dp,$sql,MYSQLI_STORE_RESULT);
    $campos = mysqli_num_fields($resultado);
    $filas = mysqli_num_rows($resultado);
    echo "<p>Cantidad de filas: $filas</p>\n";
    echo "<table border='1' cellspacing='0'>\n"; //Empezar tabla
    echo "<tr>"; //Crear fila

    for ($i = 0; $i < $campos; $i++) {
        $nombrecampo = mysqli_field_name($resultado, $i);
        echo "<th>$nombrecampo</th>";
    }
    echo "</tr>\n"; //Cerrar fila

    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>"; //Crear fila
        foreach ($row as $key => $value) {
            echo "<td>$value&nbsp;</td>";
        }
        echo "</tr>\n"; //Cerrar fila
    }
    echo "</table>\n"; //Cerrar tabla
    mysqli_close($dp);

  ?>

</body>

</html>
