<?php
require "11-otomobil.php";
$arabam=new otomobil("ferrari","laferrari","k�rm�z�");
$oto=new otomobil("anadolu","toprak","beyaz");
echo $oto->marka ;
echo "<br/>";
echo $arabam->model;
?>