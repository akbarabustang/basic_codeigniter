<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Siswa_model');
	}

	public function index()
	{
		$data['siswa_data'] = $this->Siswa_model->get_siswa();
		$this->load->view('siswa_list', $data);
	}

	public function create(){
		if (isset($_POST['submit'])) {
			$this->Siswa_model->insert_siswa();
			redirect('welcome/index');
		}
		$this->load->view('siswa_tambah');		

	}
}
