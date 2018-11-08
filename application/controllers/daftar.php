<?php 


class daftar extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('register');
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
		$sim = $this->input->post('sim');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'noktp' => $sim,
			'password' => $password
			);

		$this->register->input_data($data,'user');
		$data['regis'] = ('1');
        $this->load->view('Login',$data);
	}

}