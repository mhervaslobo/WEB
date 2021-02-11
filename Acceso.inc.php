<?php

    $dp = mysqli_connect("localhost", "root", "") or die("<p>No se ha podido establecer la conexion con MySQL.</p>");
    mysqli_select_db($dp,"AGENDA") or die("<p>No se ha podido establecer la conexion con la base de datos.</p>");

?>
