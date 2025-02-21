<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('session_expire');
		}
    }

    public function index(){
        $this->load->view('_layouts/header');
		$this->load->view('aboutus');
		$this->load->view('_layouts/footer');
    }

}