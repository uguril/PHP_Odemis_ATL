<?php
header("Content-type: image/png");
$resim=imagecreate(250,250);
$kirmizi=imagecolorallocate( $resim, 255,0,0);
$beyaz=imagecolorallocate( $resim, 255,255,255);
$a=0;
for($x=0,$y=240;$x<130;$x+=10,$y-=10)//x ve y koordinatlar�n� ayarl�yoruz
{
	$a++;
	if($a %2==0) $color=$beyaz;//bir k�rm�z� bir beyaz olmas� i�in
	else $color=$kirmizi;
	imagefilledrectangle($resim,$x,$x,$y,$y,$color);//renge g�re boyama yap�l�yor
}
imagepng($resim);
imagedestroy($resim);
?>