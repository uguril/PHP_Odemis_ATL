<?php
require "9-otomobil.php";
$arabam=new otomobil();
$sonuc=$arabam->calistir("12345");
if($sonuc)
echo "ara� �al��t�";
else
echo"H�rk�zzz";
?>