<html>

<head>
<title> un pequeño mailer para recopilar la opiniòn </title>
<!--
La siguiente linea es importante.
El atributo CHARSET va a fijar el conjunto de caracteres de la página,
de tal forma que cuando un usuario pida esta al servidor web lo primero que va
a recibir su navegador va a ser un cabecero HTTP con esta etiqueta META, con lo
que este pedirá al sistema operativo que cargue dichos caracteres, para poder
así presentar la página adecuadamente. Si el usuario no tiene instalado en su
sistema dicho conjunto de caracteres, el navegador presentará una ventana
de aviso, informando que para ver corréctamente la página es necesario
descargarlo de Internet, y procederá automáticamente a sus descarga e
instalación, salvo que el usuario no desee que se realice dicha operación y la
anule manualmente.
-->
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" >

</head>

<body>

<h1>Feedback-Mailer</h1>
<p>¡Enviame un e-mail!</p>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  Tu direcciòn de e-mail: <br>
  <input type="text" name="Mail" ><br>
  Tu comentario: <br>
  <textarea name="message" cols="50" rows="5">
  </textarea><br>
  <input type="submit" value="Enviar">
</form>

<?php
/*
El codigo no funciona. Según la página PHP: Es importante tener en cuenta que
si el correo es aceptado para su envío, NO quiere decir que el correo haya
alcanzado el destino indicado

En nuestro caso, aunque está correcta la sintaxis para php (Y por eso devuelve
true y sale el mensaje de enviado) no está configurado nuestro servidor para
enviar correos con php
*/
  $receiverMail = "tudireccion@tudominio.com"; // escribe aqui tu direcciòn
  if (isset($_POST['Mail']) && $_POST['Mail'] != "") {
    if (mail ($receiverMail, "¡Tienes correo nuevo!", $_POST['message'], "From: $_POST[Mail]")) {
      echo "<p>Gracias por enviarme tu opiniòn.</p>\n";
    } else {
      echo "<p>Lo siento, ha ocurrido un error.</p>\n";
    }
  }
?>

</body>

</html>
