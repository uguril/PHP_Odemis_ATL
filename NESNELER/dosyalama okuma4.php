<?php
$dizin="�rnek";
$dosya_adi="dosya.txt";
if($dosya=fopen($dizin."/".$dosya_adi,"r"))
{
	echo "dosya ad�".$dosya_adi."<br/>";
	$i=0;
	while(!feof($dosya))
	{
		$i++;
		$karakter=fgetc($dosya);
		echo $i."karakter:  ------------->    ".$karakter."<br/>";
	}
	}
	else echo "dosya a��lmad�:".$dosya_adi;
?>