<?php 


class daftar extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('register');
		$this->load->model('ModelAccount');

		$this->load->helper('url');

	}

	function index(){
		$this->load->view('register');
	}

	function tambah(){
		$this->load->view('register');
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$nosim = $this->input->post('sim');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			'alamat' => $alamat,
			'nosim' => $nosim,
			'nama' => $nama,
			'email' => $email,
			'password' => $password
			);

		$this->register->input_data($data,'pelanggan');
		$data['regis'] = ('1');
        $this->load->view('Login',$data);
	}

	function editp(){
		$email = $_SESSION["eml"];
		$password = $this->input->post('password');
		$data = array(
			'password' => $password
			);

		$this->ModelAccount->editp($email,$data);
		$data['regis'] = ('1');
        $this->load->view('Login',$data);
	}
}