<?php
//Hedef resmi al�yoruz
$resim = "resimler/resim.jpg";
//resmi �l�eklendirmek i�in max. ebatlar� ayarl�yoruz
$max_boy = 300 ; //boy 300 piksel den fazla olamayacak
$max_en = 300;   //en 300 piksel den fazla olamayacak
//kaynak resmin boyutlar�n� al�yoruz
$boyut = getimagesize($resim);
//yeni resmin boyutlar� i�in oranlama i�lemi yap�l�yor
$boyorani = ($boyut[0] / $max_en); //hangi oranda k���ltece�imizi ayarl�yoruz
$enorani = ($boyut[1] / $max_boy); //boy oran� 2.56 en oran� 3.4
//en b�y�k oran� al�yoruz
if ($boyorani >= $enorani)
$oran = $enorani;
else
$oran = $enorani;
//olu�turaca��m�z resmin boyutlar�n� ayarl�yoruz
$yenien = ($boyut[0] / $oran); 
$yeniboy = ($boyut[1] / $oran);

header("Content-type: image/jpeg"); 

$kaynakresim = imagecreatefromjpeg($resim);
$yeniresim = imagecreatetruecolor($yenien,$yeniboy);
imagecopyresampled($yeniresim,$kaynakresim,0,0,0,0,$yenien,$yeniboy,$boyut[0],$boyut[1]);
imagejpeg($yeniresim,"resimler/resimk���k.jpg");
imagedestroy($kaynakresim);
imagedestroy($yeniresim);

?>