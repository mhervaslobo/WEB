<html>

<head>
  <title>Problema</title>
</head>

<body>
  <form action="58_pagina2.php" method="post">
  Ingrese su mail:
  <input type="text" name="mailusuario" value=" <?php if (isset($_COOKIE['mail'])) echo $_COOKIE['mail'];?>">
  <br>
  <input type="radio" name="opcion" value="recordar">
  Recordar en esta computadora el mail ingresado.
  <br>
  <input type="radio" name="opcion" value="norecordar">
  No recordar.
  <br>
  <input type="submit" value="confirmar">
  </form>
</body>

</html>
