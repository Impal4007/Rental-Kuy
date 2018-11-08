<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('ModelAccount');
	}

    public function index() {
		$data['regis'] = ('0');
        $this->load->view('login',$data);
    }

	function aksi_login() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'Password' => $password
			);
		$cek = $this->ModelAccount->cek_login("user",$where)->num_rows();
		if($cek > 0) {
			$data_session = array(
				'nama' => $email,
				'status' => 'login'
			);
			$this->session->set_userdata($data_session);
			redirect(base_url());
		}else{
			$data['regis'] = ('2');
		    $data['cek'] = 1;
            $this->load->view('login',$data);
		}
	}
}
