<?php
$dosya=fopen("dosya.txt","r");//r okumak i�in yazmak i�in r yerine w yaz�l�r.
while(!feof($dosya))
{
	$sat�r=fgets($dosya,50);//50'sini okur'
	echo $sat�r;
}
fclose($dosya)
?>