<?php
header("Content-type: image/png");//Sayfan�n grafik oldu�unu taray�c�ya bildiriyoruz
$resim=imagecreatetruecolor(250,250);//Varsay�lan rengimizi siyah olarak belirliyoruz
$renk=imagecolorallocate( $resim, 0,206,209);//resmin rengini belirliyoruz
imagefill( $resim,0,20,$renk);//Resmimizi boyuyoruz
imagepng($resim);//Resmimizi png format�na �eviriyoruz ve taray�c�da g�r�nt�l�yoruz
imagedestroy($resim);//Olu�turdu�umuz resmi taray�c�dan siliyoruz.
?>