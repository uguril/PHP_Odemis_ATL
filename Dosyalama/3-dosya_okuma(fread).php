<?php
//fread():Dosyadan sat�r sat�r de�il de blok okumak istedi�imiz durumlarda bu fonksiyonu kullan�r�z.farkl� olarakyenisat�r karakteri g�r�l�nce durmaz
$dizin="�rnek";
$dosya_adi="dosya.txt";
if($dosya=fopen($dizin."/".$dosya_adi,"r"))
{
	echo "Dosya Ad�:c".$dosya_adi."<br>";
	echo "Dosya Boyutu: ".filesize($dosya_adi)." Byte<br>";
	$blok=fread($dosya,100);
	echo "Dosya ��eri�i: <br>";
	echo $blok;
}
else
echo "Dosya A��lamad�: ".$dosya_adi;
?>