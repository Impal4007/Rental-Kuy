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

	function user() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'Password' => $password
			);
		$cek = $this->ModelAccount->cek_login("pelanggan",$where)->num_rows();
		if($cek > 0) {
			$data_session = array(
				'email' => $email,
				'status' => 'login'
			);
			$where = $email;
			$dataa = $email;
	    	$data['result'] = $this->ModelAccount->akun($where);
	    	$data['sewa'] = $this->ModelAccount->datauser($dataa);

			$this->session->set_userdata($data_session);

        	$data['title'] = ('PREMIUM RENTAL');
        	$this->load->view('templates/header', $data);
            $this->load->view('product',$data);
		}else{
			$data['regis'] = ('2');
		    $data['cek'] = 1;
            $this->load->view('login',$data);
		}
	}
	function karyawan() {
		$email = $this->input->post('id');
		$password = $this->input->post('password');
		$where = array(
			'id_karyawan' => $email,
			'Password' => $password
			);
		$cek = $this->ModelAccount->cek_login("karyawan",$where)->num_rows();
		if($cek > 0) {
			$data_session = array(
				'email' => $email,
				'status' => 'login'
			);
			$where = $email;
	    	$data['result'] = $this->ModelAccount->user($where);

			$this->session->set_userdata($data_session);

        	$data['title'] = ('PREMIUM RENTAL');
        	$this->load->view('Admin/header', $data);
            $this->load->view('Admin/admin',$data);
			$this->load->view('Admin/footer',$data);

		}else{
			$data['regis'] = ('2');
		    $data['cek'] = 1;
            $this->load->view('Admin/login',$data);
		}
	}


}
