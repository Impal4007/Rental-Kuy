<?php 
class tambahk extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('ModelAccount');
		$this->load->helper('url');

	}

	function index(){
		$data['regis'] = ('0');
        $data['title'] = ('PREMIUM RENTAL');
	    $data['result'] = $this->ModelAccount->user();
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/tambahk',$data);
		$this->load->view('Admin/footer',$data);	}

	function tambahk_aksi(){
		$id = $this->input->post('id');
		$jenis = $this->input->post('jenis');
		$noplat = $this->input->post('noplat');
		$data = array(
			'id_kendaraan' => $id,
			'kondisi' => 1,
			'jenis' => $jenis,
			'noplat' => $noplat,
			'status' => 1,
			);

		$this->ModelAccount->input_data($data,'kendaraan');
	    $data['mobil'] = $this->ModelAccount->mobil();
		$data['regis'] = ('0');
        $data['title'] = ('PREMIUM RENTAL');
		$this->load->view('Admin/header',$data);
		$this->load->view('Admin/kendaraan',$data);
		$this->load->view('Admin/footer',$data);
	}

}