<?php
header("Content-type: image/gif");
$resim=imagecreate(250,250);
imagecolorallocate($resim,255,0,0);
imagepng($resim,"kirmizi.png",8,10);//png format�nda grafi�i olu�turuyoruz ve kirmizi.png ismiyle kaydediyoruz.kaliteyi8 ve filtreyi de 10 olarak belirliyoru
imagedestroy($resim);
// bu projenin bulundu�u yere kirmizi.png dosyas� kay�t oldu
?>