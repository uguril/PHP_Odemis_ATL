<?php
$dizin="�rnek";
$dosya_adi="dosya.txt";
if($dosya=fopen($dizin."/".$dosya_adi,"r"))
{
	echo "dosya ad�".$dosya_adi."<br/>";
	echo "dosya boyutu".filesize($dosya_adi)."byte<br/>";
	$blok=fread($dosya,100);
	echo 	"i�erik<br/>";
	echo "$blok";
	}
	else echo "dosya a��lmad�:".$dosya_adi;
?>