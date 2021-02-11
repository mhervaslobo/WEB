<html>

<head>
  <title>Problema</title>
</head>

<body>
  <?php
    function retornarColorHexa($rojo,$verde,$azul)
    {
      $color=sprintf("#%02X%02X%02X",$rojo,$verde,$azul);
      return $color;
    }
  ?>
  <table>
  <tr>
  <td bgcolor="<?php echo retornarColorHexa(255,0,0)?>">Cuadro rojo</td>
  <td bgcolor="<?php echo retornarColorHexa(0,255,0)?>">Cuadro verde</td>
  <td bgcolor="<?php echo retornarColorHexa(0,0,255)?>">Cuadro azul</td>
  </tr>
  </table>
</body>

</html>
