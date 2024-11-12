<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_ctrl extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('Login_mod');
    } 

    public function index()
    {
        $this->load->view('auth/login');

    }

    public function logout()
    {

		// $this->session->set_flashdata('message', 'You have successfully logged out');
		// $this->session->set_flashdata('message_type', 'success');

		// $this->session->sess_destroy();

        $this->load->view('auth/login');
    }
    
}

