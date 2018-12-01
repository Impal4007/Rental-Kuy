<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
    public function index() {
        $data_session = array('email','status');
		$this->session->unset_userdata($data_session);
		redirect(base_url());
    }
}
