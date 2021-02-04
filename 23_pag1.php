<html>

<head>
   <title>Ejemplo Pagina 1 Libreria</title>
</head>

<body>

  <?php
  /*Así se incluye una libreria en el codigo, y mas adelante se llama a una
  funcion */
    include("23_libreria.phtml")
  ?>
  <?php
    CabeceraPagina();
  ?>
  Página 1 <BR><BR><BR><BR><BR>
  Contenido blalbl blalb alb<BR><BR>
  más cosas...<BR><BR>
  fin<BR><BR>
  <?php
    PiePagina();
  ?>

</body>

</html>
