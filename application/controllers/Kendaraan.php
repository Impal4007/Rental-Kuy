<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kendaraan extends CI_Controller {
	public function __construct() {
	    parent::__construct();
	    $this->load->model('ModelAccount');
	}
	public function index()
	{
	    $data['mobil'] = $this->ModelAccount->mobil();
		$data['regis'] = ('0');
        $data['title'] = ('PREMIUM RENTAL');
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/kendaraan',$data);
		$this->load->view('Admin/footer',$data);

	}
}
