<?php
//fgetc():Bu fonksiyon dosyadan her defas�nda bir karakter okutmak i�in kullan�l�r.Daima bir byte veri okuyaca�� i�in parametreolarak sadece dosya de�i�keni yaz�l�r.
$dizin="�rnek";
$dosya_adi="dosya.txt";
if($dosya=fopen($dizin."/".$dosya_adi,"r"))
{
	echo "Dosya Ad�:c".$dosya_adi."<br>";
	$i=0;
	while(!feof($dosya))//dosya sonuna gelmedi�i m�ddet�e
	{
		$i++;
		$karakter=fgetc($dosya,1000);
		echo $i.".Karakter: ".$karakter."<br>";
	}
}
else
echo "Dosya a��lamad�: ".$dosya_adi;
?>