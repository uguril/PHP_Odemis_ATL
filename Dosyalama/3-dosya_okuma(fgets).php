<?php
//fgets():bu fonksiyon parametre olarak daha �nce a��lm�� olan dosyaya ait de�i�keni ve asgari okuyaca�� byte miktar�n� al�r
$dizin="�rnek";
$dosya_adi="dosya.txt";
if($dosya=fopen($dizin."/".$dosya_adi,"r"))
{
	echo "Dosya Ad�:".$dosya_adi."<br>";
	$i=0;
	
	while(!feof($dosya))//dosya sonuna gelmedi�i m�ddet�e
	{
		$i++;
		$sat�r=fgets($dosya,1000);
		echo $i.".Sat�r: ".$sat�r."<br>";
	}
}
else
echo "Dosya a��lamad�: ".$dosya_adi;
?>