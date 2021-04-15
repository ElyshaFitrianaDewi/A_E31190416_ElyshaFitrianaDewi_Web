<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// membuat class controller, dengan syarat nama file sama dengan nama Class
class Mahasiswa extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model'); // memanggil file mahasiswa_model.php yang ada di folder model

	}

	public function tambah(){ // memanggil fungsi tambah pada template didalam view tambah mahasiswa
		$this->template->views('crud/tambah_mahasiswa');
	}

	public function input(){ //memanggil fungsi input username, passsword, nama, grup
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nama = $this->input->post('nama');
		$grup = $this->input->post('grup');

		$data = array( // mendeklarasikan array data
		'username' => $username,
		'password' => $password,
		'nama' => $nama,
		'grup' => $grup
	);
		$this->Mahasiswa_model->input_data($data, 'tm_user'); //menginput data ke database dengan menggunakan mahasiswa_model
		redirect('Mahasiswa/index'); //parameter yang berisi data - data yang di inputkan
	}

	public function index() //memanggil fungsi index
	{
		$data['user'] = $this->Mahasiswa_model->getAll()->result(); //menyimpan data user untuk dipassing ke view
		$this->template->views('crud/home_mahasiswa',$data); 
	}
}
