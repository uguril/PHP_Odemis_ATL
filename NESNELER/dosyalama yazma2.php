<?php
$dosya_adi="dosya.txt";
$dosya=fopen($dosya_adi,"w")or die	("dosya a��lmad�");
$metin="U�ur Ilg�n";
fwrite($dosya,$metin);
fputs($dosya,"  M�hendis");
fclose($dosya);
?>