<html>

<head>
   <title>Mi album de fotografias</title>
</head>

<body>
<h1> Mi album de fotos en linea </h1>
<h3> Cargar archivo </h3>

<form action='<?php echo $_SERVER['PHP_SELF'] ?>' method="post" enctype="multipart/form-data">
  <input type="file" name="archivo">
  <input type="submit" name="submit" value="Cargar archivo">
</form>

<?php
$ruta="img/"; // Indicar ruta

/*No me deja cargar archivos desde otro sitio, además si la carpeta img esta
vacía salen algunos avisos más revisar bien*/

if (isset($_FILES['archivo']) && $_FILES['archivo']['size'] > 0) {
    $tamanyomax = 200000; // Indicar tamaño en bytes
    $nombretemp = $_FILES['archivo']['tmp_name'];
    $nombrearchivo = $_FILES['archivo']['name'];
    $tamanyoarchivo = $_FILES['archivo']['size'];
    $tipoarchivo = GetImageSize( $nombretemp );
    if ($tipoarchivo[2] == 1 || $tipoarchivo[2] == 2) { //Gif o Jpg?
        if ($tamanyoarchivo <= $tamanyomax) { // Archivo demasiado grande?
            if (move_uploaded_file($nombretemp, $ruta.$nombrearchivo)) {
                echo "<p>El archivo se ha cargado <b>con exito</b>.
                Tamaño de archivo: <b>$tamanyoarchivo</b> bytes,
                Nombre de imagen: <b>$nombrearchivo</b><br></p>";
            } else {
                echo "<p>No se ha podido cargar el archivo.</p>";
            }
        } else {
            echo "<p>El archivo tiene mas de <b>$tamanyomax bytes</b> y es demasiado grande.</p>";
        }
    } else {
        echo "<p>No es un archivo GIF o JPG valido.</p>";
    }
    echo "<form action='{$_SERVER['PHP_SELF']}' method='post'>
    <input type='submit' value='OK'></form>";
}
$filehandle = opendir($ruta); // Abrir archivos
while ($file=readdir($filehandle)) {
    if ($file != "." && $file != "..") {
        $tamanyo = GetImageSize($ruta.$file);
        echo "<p><img src='$ruta$file' $tamanyo[3]><br></p>\n";
    }
}
closedir($filehandle);  // Fin lectura de archivos

?>

</body>

</html>
