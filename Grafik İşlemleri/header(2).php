<?php
header("Content-type: image/png");//sayfan�n grafik oldu�unu taray�c�ya bildirdik
$resim=imagecreatetruecolor(200,200);//Resmimizi olu�turuyoruz
imagepng($resim);//Resmimizi png format�na �eviriyoruz ve taray�c�da g�r�nt�l�yoruz
imagedestroy($resim);//Olu�turdu�umuz resmi taray�c�dan siliyoruz.
?>