<?php
//Dosyaya yazma fonksiyonlar� fwrite() ve fputs()'dur.Bu iki fonksiyon tamamen ayn� i�i yapar.Aralar�nda bir fark yoktur.Genel Kullan�m �ekilleri:
//fputs($dosya,"Dosyaya yaz�lacak ya da eklenecek ifade..");
$dosya=fopen("dosya.txt","w");
$i=0;
while($i<10)
{
	$bilgi=$i.".kay�t\n";
	fwrite($dosya,$bilgi);
	$i++;
}
fclose($dosya);
?>