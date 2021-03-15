<?php 

	class Kalkulator{
	
	private $bilangan1 = 8;
	private $bilangan2 = 15;
	private $bilangan3 = 20;
	
		function tambah()
		{
			$hasil = $this -> bilangan1 + $this -> bilangan2;
			return $hasil = "".$this -> bilangan1." + ".$this -> bilangan2." = ".$hasil; 
		}
		
		function kurang()
		{
			$hasil = $this -> bilangan2 - $this -> bilangan3;
			return $hasil = "".$this -> bilangan2." - ".$this -> bilangan3." = ".$hasil; 
		}
		
		function bagi()
		{
			$hasil = $this -> bilangan3 / $this -> bilangan1;
			return $hasil = "".$this -> bilangan3." / ".$this -> bilangan1." = ".$hasil; 
		}
		
		function kali()
		{
			$hasil = $this -> bilangan3 * $this -> bilangan2;
			return $hasil = "".$this -> bilangan3." * ".$this -> bilangan2." = ".$hasil; 
		}
	} 
	//Membuat instance
	$tambah = new Kalkulator();
	$kurang = new Kalkulator();
	$bagi = new Kalkulator();
	$kali = new Kalkulator();

	//set value objek
	$hasil1=$tambah -> tambah();
	$hasil2=$kurang -> kurang();
	$hasil3=$bagi -> bagi();
	$hasil4=$kali -> kali();

	echo "Hasil Tambah : ".$hasil1."<br>";
	echo "Hasil Kurang : ".$hasil2."<br>";
	echo "Hasil Bagi : ".$hasil3."<br>";
	echo "Hasil Kali : ".$hasil4."<br>";

 ?>