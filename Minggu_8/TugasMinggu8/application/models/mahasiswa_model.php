<?php 
class Mahasiswa_model extends CI_Model {
	public function get_data(){
		$data_mahasiswa = [
			["nama"=>"Elysha","prodi"=>"MIF"],
			["nama"=>"Fitriana","prodi"=>"TKK"],
			["nama"=>"Dewi","prodi"=>"TIF"]
		];
		return $data_mahasiswa;
	}
}
?>