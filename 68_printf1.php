<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
    $entero=255;
    printf("Valor entero en formato decimal %d <br>",$entero);
    printf("Valor entero en formato hexadecimal con letras minúsculas  %x<br>", $entero);
    printf("Valor entero en formato hexadecimal con letras mayúsculas  %X<br>", $entero);
    printf("Valor entero en formato binario %b<br>", $entero);
    printf("Valor entero en formato octal %o<br>", $entero);
    $letra=65; printf("Valor entero como caracter ascii %c<br>", $letra);
    echo "<br>";
    $real=10.776;
    printf("Impresion de un valor de tipo double %f <br>",$real);
    printf("Impresion de un valor de tipo double indicando la cantidad de decimales  a imprimir %0.2f <br>",$real);
  ?>
  <br>
  <A href="68_printf2.php">Algunas utilidades de estas conversiones</A>

</body>

</html>
