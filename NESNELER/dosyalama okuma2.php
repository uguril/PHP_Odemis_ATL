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
		$satir=fgets($dosya,1000);
		echo $i.".Sat�r:".$satir."<br/>";
	}
}
else echo "dosya a��lmad�".$dosya_adi;
?>