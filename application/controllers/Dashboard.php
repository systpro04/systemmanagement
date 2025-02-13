<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('session_expire');
		}


		$this->load->model('Dashboard_mod', 'dashboard');
	}
	public function index(){


		$programmers_count = $this->dashboard->programmers();
		$analysts_count = $this->dashboard->analysts();
		$others_count = $this->dashboard->rms();   

		$my_workloads = $this->dashboard->my_workloads(); 

		$data['programmers_count'] = $programmers_count;
		$data['analysts_count'] = $analysts_count;
		$data['others_count'] = $others_count;
		$data['my_workloads'] = $my_workloads;

		$this->load->view('_layouts/header');
		$this->load->view('dashboard', $data);
		$this->load->view('_layouts/footer');
	}
	// public function index() {
	// 	$programmers_positions = [
	// 		'System Programmer I', 
	// 		'System Programmer II', 
	// 		'System Programmer III'
	// 	];
	// 	$analysts_positions = [
	// 		'System Analyst I', 
	// 		'System Analyst II', 
	// 		'System Analyst III'
	// 	];
	// 	$rms_positions = [
	// 		'Tech Support Technician I', 
	// 		'Tech Support Technician II', 
	// 		'Tech Support Technician III',
	// 		'Office Clerk I'
	// 	];
	
	// 	$programmers_count = $this->dashboard->get_employees_count_by_positions($programmers_positions);
	// 	$analysts_count    = $this->dashboard->get_employees_count_by_positions($analysts_positions);
	// 	$others_count      = $this->dashboard->get_employees_count_by_positions($rms_positions);

	// 	$data['programmers_count'] = $programmers_count;
	// 	$data['analysts_count'] = $analysts_count;
	// 	$data['others_count'] = $others_count;

	// 	$this->load->view('_layouts/header');
	// 	$this->load->view('dashboard', $data);
	// 	$this->load->view('_layouts/footer');
	// }
	public function get_birthdays() {
		$month = $this->input->get('month');
	
		$positions = [
			'System Programmer I', 
			'System Programmer II', 
			'System Programmer III',
			'System Analyst I', 
			'System Analyst II', 
			'System Analyst III',
			'Tech Support Technician I', 
			'Tech Support Technician II', 
			'Tech Support Technician III',
			'Office Clerk I'
		];
	
		$birthday_list = $this->dashboard->get_birthday_list($positions, $month);
	
		if ($birthday_list) {
			echo json_encode(['status' => 'success', 'data' => $birthday_list]);
		} else {
			echo json_encode(['status' => 'error', 'message' => 'No data found']);
		}
	}


	public function profile(){
		$this->load->view('_layouts/header');
		$this->load->view('profile');
		$this->load->view('_layouts/footer');
	}

	public function update_password(){
		$id 		= $this->input->post('id');
		$username 	= $this->input->post('username');
		$password 	= md5($this->input->post('password'));
		$data = array(
			'password' => $password,
			'username' => $username
		);
		$this->dashboard->update_password($id, $data);
		$this->session->set_userdata('username', $username);
		$this->session->set_userdata('password', $password);
	}


	public function getChartData() {
        $type = $this->input->post('type'); // "new" or "current"
        $typeofsystem = $this->input->post('typeofsystem'); // e.g., 'new' or 'current'

        $types = $type === 'new' 
            ? ['ISR', 'ATTENDANCE', 'MINUTES', 'WALKTHROUGH', 'FLOWCHART', 'DFD', 'SYSTEM_PROPOSED', 'LOCAL_TESTING', 'UAT', 'LIVE_TESTING'] 
            : ['ISR', 'ATTENDANCE', 'MINUTES', 'WALKTHROUGH', 'FLOWCHART', 'DFD', 'SYSTEM_PROPOSED', 'GANTT_CHART', 'LOCAL_TESTING', 'UAT', 'LIVE_TESTING', 'USER_GUIDE', 'MEMO', 'BUSINESS_ACCEPTANCE'];

        $data = $this->dashboard->getFileCountsByType($types, $typeofsystem);

        $chartData = [];
        $labels = [];
		$colors = [
			'rgba(254, 106, 0, 0.7)',
			'rgba(255, 247, 0, 0.7)',
			'rgba(0, 247, 181, 0.7)',
			'rgba(255, 51, 161, 0.7)',
			'rgba(255, 193, 51, 0.7)',
			'rgba(141, 51, 255, 0.7)',
			'rgba(27, 155, 151, 0.7)',
			'rgba(255, 51, 51, 0.7)', 
			'rgba(87, 255, 51, 0.7)', 
			'rgba(87, 51, 255, 0.7)', 
			'rgba(255, 51, 141, 0.7)',
			'rgba(255, 199, 51, 0.7)',
			'rgba(255, 141, 51, 0.7)',
			'rgba(51, 199, 255, 0.7)' 
		];
        foreach ($data as $key => $item) {
            $chartData[] = $item['count'];
            $labels[] = $item['uploaded_to'];
        }

        echo json_encode([
            'chartData' => $chartData,
            'labels' => $labels,
            'colors' => $colors
        ]);
    }
}
