<?php
require "12-otomobil.php";
$yaris=new yarisotomobili("ferrari ","laferrari ","k�rm�z� ");
$amarka=$yaris->marka;
$amodel=$yaris->model;
$amotor=$yaris->motorsec();
echo $amarka,$amodel,$amotor;
?>