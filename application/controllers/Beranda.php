<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('D_Bukutamu');
	}
	public function index()
	{
		$this->load->view('beranda');
	}
	public function inputData()
	{
		$this->load->view('input_bukutamu');
	}

	
	public function tampilData()
	{
		// data _bkt ialah data
		$recordBukutamu = $this->D_Bukutamu->getDatabukutamu();
		$Data = array('data_bkt'=>$recordBukutamu);
		$this->load->view('tampil_bukutamu',$Data);
		// echo "<pre>";
		// echo print_r($recordBukutamu);
		// echo "<pre>";
		

	}
	public function AksiInput()
	{
		$nim = $this ->input->post('nim');
		$nama = $this ->input->post('nama');
		$email = $this ->input->post('email');
		$pesan = $this ->input->post('pesan');
		$DataInsert = array(
			'nim' => $nim,
			'nama' => $nama,
			'email' => $email,
			'pesan' => $pesan,

		);		
		// echo "<pre>";
		// echo print_r($DataInsert);
		// echo "<pre>";
		$this->D_Bukutamu->InsertDatabkt($DataInsert);
		redirect (base_url('index.php/Beranda/'));
	}

	public function formEdit($id){
		$recordBukutamu = $this->D_Bukutamu->GetDatabkt($id);
		// echo "<pre>";
		// echo print_r($recordBukutamu);
		// echo "<pre>";
		$Data = array('data_bkt'=>$recordBukutamu);
		$this->load->view('form_edit',$Data);
	}
	
	public function AksiEdit(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$pesan = $this->input->post('pesan');
		$DataUpdate = array(
			'nama' => $nama,
			'email' => $email,
			'pesan' => $pesan,
		);
		$this->D_Bukutamu->EditDatabkt($DataUpdate,$nim);
		redirect (base_url('index.php/Beranda/tampilData'));

	}

	public function AksiDelete($nim){
		$this->D_Bukutamu->DeleteDatabkt($nim);
		redirect (base_url('index.php/Beranda/tampilData'));
	}
	
}