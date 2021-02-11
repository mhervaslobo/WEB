<html>

<head>
   <title>MySQL 01 - Consulta a BD (Agenda)</title>
</head>

<body>

  <h1>Mostrar Nombres de la Agenda. BD </h1>

  <?php

    //Abre una conexión al servidor MySQL. Aunque en la pagina de ayuda de PHP

    $dp = mysqli_connect("localhost", "root", "" );

    //Seleccionar una base de datos MySQL

    mysqli_select_db($dp,"AGENDA");

    $sql = "SELECT * FROM DIRECCIONES" ;

    //Esta funcion que sigue estaba mal y se ha comido la mitad de mi mañana,
    //lloro muy fuerte
    $resultado = mysqli_query($dp,$sql,MYSQLI_STORE_RESULT);
    
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "$row[Nombre] $row[Apellido]<br>\n";
    }
    mysqli_close($dp);

  ?>

</body>

</html>
