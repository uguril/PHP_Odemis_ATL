<?php
class Otomobil
{//renk se�eneklerini belirliyoruz
//renk se�ene�inin private oldu�una dikkat
	private $renk=array("K�rm�z�","Beyaz","Siyah");
	public function renkler()
	{//this ile yukar�da tan�mlad���m�z renk dizisini al�yoruz ve bu diziyifonksiyonun �a�r�ld��� yere g�nderiyoruz
		return $this->renk;//this anahtar s�zc�kt�r.s�n�f i�erisindekinesnelere eri�imi sa�lar
	}
}
?>