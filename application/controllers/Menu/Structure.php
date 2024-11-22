<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Structure extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->username == "") {
            redirect('login');
        }
		$this->load->model('Menu/Structure_mod', 'structure');
	}
	public function index() {
		$programmers_positions = [
			'System Programmer I', 
			'System Programmer II', 
			'System Programmer III'
		];
		$analysts_positions = [
			'System Analyst I', 
			'System Analyst II', 
			'System Analyst III'
		];
		$rms_positions = [
			'Tech Support Technician I', 
			'Tech Support Technician II', 
			'Tech Support Technician III'
		];

		$programmers 				= $this->structure->get_employees_by_positions($programmers_positions);
		$analysts 					= $this->structure->get_employees_by_positions($analysts_positions);
		$others 					= $this->structure->get_employees_by_positions($rms_positions);
		$leaders 					= $this->structure->get_employees_by_positions($rms_positions);
	

		$programmers = $this->format_employees($programmers);
		$analysts 	 = $this->format_employees($analysts);
		$others 	 = $this->format_employees($others);
		$leaders 	 = $this->format_employees($leaders);
	
		$data['programmers'] = $programmers;
		$data['analysts'] = $analysts;
		$data['others'] = $others;
		$data['leaders'] = $leaders;
	
		$this->load->view('_layouts/header');
		$this->load->view('menu/structure', $data);
		$this->load->view('_layouts/footer');
	}

	private function format_employees($employees) {
		$formatted = [];
		foreach ($employees as $e) {
			$formatted[] = [
				'name' => $e['name'],
				'photo' => ltrim($e['photo'], '.'),
			];
		}
		return $formatted;
	}
	
	
	
	

}
