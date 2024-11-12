<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Structure extends CI_Controller {
	public function index()
	{
		$this->load->view('_layouts/header');
		$this->load->view('menu/structure');
		$this->load->view('_layouts/footer');

	}
}
