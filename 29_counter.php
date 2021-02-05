<html>
<head>
     <title>Contador Sencillo</title>
</head>

<body>

  <h1>Contador Sencillo</h1>
  <p>Cantidad de visitas:
  <b>

  <?php
// Para el contador necesitamos un archivo de texto externo donde almacenamos
// las visitas
// Aqui se veran las funciones para trabajar con archivos, en este caso
// abrir, leer, grabar y cerrar. El contador simplemente se va sumando.
/*fopen() abre un archivo en el modo que le pongamos, en este caso lectura y
escritura*/
    $fp = fopen("counter.txt", "r+");
    /*Devuelve una cadena de hasta length - 1 bytes leídos desde el fichero
    apuntado por handle fgets(handle,length). Si no hay más datos que leer en
    el puntero al fichero, devuelve false. Si se produjo un error, devuelve
    false*/
    $counter = fgets($fp, 7);
    echo $counter;
    $counter ++;
    /*Revobina la posicion del puntero que recorre el archivo. Establece el
    indicador de posición de archivo de handle al principio del flujo del
    archivo.*/
    rewind($fp);
    /*Esta función es un alias de: fwrite().
    fwrite() escribe el contenido de string al flujo de archivo apuntado por
    handle.*/
    fputs($fp, $counter);
    /*El archivo apuntado por handle es cerrado.*/
    fclose($fp);

/*
Necesitamos tener un counter.txt porque no creamos el txt en ningun momento
*/
  ?>

  </b>
  </p>
</body>

</html>
