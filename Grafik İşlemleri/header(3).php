<?php
header("Content-type: image/png");//Sayfan�n grafik oldu�unu taray�c�ya bildiriyoruz
$resim=imagecreate(350,250);//Resmimizi olu�turuyoruz
imagecolorallocate( $resim, 255,0,0);//Resmin rengini k�rm�z� olarak belirliyoruz
imagepng($resim);//Resmimizi png format�na �eviriyoruz ve taray�c�da g�r�nt�l�yoruz
imagedestroy($resim);//Olu�turdu�umuz resmi taray�c�dan siliyoruz.
?>