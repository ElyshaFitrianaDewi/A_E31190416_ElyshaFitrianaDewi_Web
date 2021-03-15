<?php

//soal 2
class kendaraan {
	public $jeniskendaraan;
	public $jumlahroda;
	public $jenismerk;
	public $bahanbakar;
	public $harga;
	public $tahunpembuatan;

	public function dapatSubsidi(){
	if($this -> tahunpembuatan < 2005 && $this -> bahanbakar == "Premium")
		$status = 'Ya';
		else $status = 'Tidak';
		return $status;
	}


//soal 3
	public function hargaSecond() {
		if ($this -> tahunpembuatan >= 2010) {
			$hargaAwal= $this -> harga;
			$hargaAkhir= ($hargaAwal*20)/100;
		} else if ($this -> tahunpembuatan < 2010 && $this -> tahunpembuatan >= 2005) {
			$hargaAwal= $this -> harga;
			$hargaAkhir= ($hargaAwal*30)/100;
		} else if ($this -> tahunpembuatan < 2005) {
			$hargaAwal= $this -> harga;
			$hargaAkhir= ($hargaAwal*40)/100;
		}
		return $hargaAkhir;
	}

}

$honda = new kendaraan ();
echo $honda -> jenismerk="Honda";
echo "<br>";
echo $honda -> tahunpembuatan=2007;
echo "<br>";
echo $honda -> bahanbakar="Premium";
echo "<br>";
echo $honda -> harga="4000"; echo " $";
echo "<br>";
echo $honda -> hargaSecond(); echo " $";
echo "<br>";


echo "Mendapat Subsidi ?";
echo $honda -> dapatSubsidi();


?>

?>