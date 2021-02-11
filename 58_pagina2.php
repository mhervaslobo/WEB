<?php
  if ($_REQUEST['opcion']=="recordar")
    setcookie("mail",$_REQUEST['mailusuario'],time()+(60*60*24*365),"/");
  elseif ($_REQUEST['opcion']=="norecordar")
    setcookie("mail","",time()-1000,"/");
?>

<html>

<head>
  <title>Problema</title>
</head>

<body>
<?php
  if ($_REQUEST['opcion']=="recordar")
    echo "cookie creada";
  elseif ($_REQUEST['opcion']=="norecordar")
    echo "cookie eliminada";
?>
<br>
<a href="58_alumnos16.php">
Ir a la otra página
</a>
</body>

</html>
