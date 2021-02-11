<?php
  $ancho=100;
  $alto=30;
  $imagen=imageCreate($ancho,$alto);
  $amarillo=ImageColorAllocate($imagen,255,255,0);
  ImageFill($imagen,0,0,$amarillo);
  $rojo=ImageColorAllocate($imagen,255,0,0);
  $valoraleatorio=rand(100000,999999);
  ImageString($imagen,5,25,5,$valoraleatorio,$rojo);
  for($c=0;$c<=5;$c++)
  {
    $x1=rand(0,$ancho);
    $y1=rand(0,$alto);
    $x2=rand(0,$ancho);
    $y2=rand(0,$alto);
    ImageLine($imagen,$x1,$y1,$x2,$y2,$rojo);
  }
  Header ("Content-type: image/jpeg");
  ImageJPEG ($imagen);
  ImageDestroy($imagen);
?>
