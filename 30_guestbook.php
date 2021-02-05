<html>

<head>
<title>Un libro de visitas muy sencillo</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
</head>

<body>

  <h1>Libro de visitas</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  Tu comentario:<br>
  <textarea cols="55" rows="4" name="comment"></textarea><br>
  Tu nombre:<br>
  <input type="text" name="name"><br>
  Tu e-mail:<br>
  <input type="text" name="email"><br>
  <input type="submit" value="publica:">
  </form>

  <h3>Mostrar todos los comentarios</h3>

  <?php
    //Guarda el nombre del archivo en la variable
    $file ="guestbook.txt";
    //¿variable comment definida? ¿Nombre e e-mail no estan vacios?
    //if isset($_POST['comment']) && $_POST['name'] ! = "" && $_POST['email'] != "" {

    if (isset($_POST['comment']) && isset($_POST['name']) != "" && $_POST['email'] != "") {
      $comment = $_POST['comment'];
      $name = $_POST['name'];
      $email = $_POST['email'];

      //El archivo se abre para escritura-lectura
      $fp = fopen($file, "r+");
      //Leer todos los datos y almacenar en $old
      $old = fread ($fp, filesize($file));
      //Se crea el vinculo de e-mail
      $email = "<a href=\mailto:$email\">$email</a>";
      //Se incluye la fecha y se le da formato
      $dateOfEntry = date ("y-n-j");
      //Ocultar caracteres html, eliminar slashes, mantener saltos de linea

      /*Ciertos caracteres tienen un significado especial en HTML y deben ser
      representados por entidades HTML si se desea preservar su significado.
      Esta función devuelve un string con estas conversiones realizadas.*/

      $comment = htmlspecialchars($comment);
      //    $comment = stripslashes(n12br($comment));

      /*Quita las barras de un string con comillas escapadas*/
      $comment = stripslashes($comment);
      //"Montar la entrada (entry) del libro de visitas
      $entry="<p><b>$name</b> ($email) wrote on <i>$dateOfEntry</i>;<br>$comment</p>\n";
      //El cursor invisible salta al principio
      rewind($fp);
      //Escribir en la nueva entrada antes de las antiguas en el archivo:
      fputs($fp, "$entry \n $old");
      //cerrar rl archivo
      fclose($fp);
      }
      //Mostrar el archivo completo
      
      /*Lee un fichero y lo escribe en el búfer de salida.*/
      readfile($file);
      ?>

</body>

</html>
