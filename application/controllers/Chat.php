<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('session_expire');
		}
		$this->load->model('Chat_mod', 'chat');
		$this->load->model('Menu/Workload', 'workload');
	}

    public function index(){
        $this->load->view('_layouts/header');
        $this->load->view('menu/chats');
        $this->load->view('_layouts/footer');
    }

    public function get_users() {

        $users = $this->chat->getAllUsers();


        $data = [];
        foreach ($users as $value) {
            $emp_data = $this->workload->get_emp($value['emp_id']);  

            $data[] = [
                'id' => $value['id'],
                'emp_id' => $value['emp_id'],
                'name' => $emp_data['name'],
            ];
            
        }


        echo json_encode($data);
    }

    public function getChatHistory($receiver_id) {
        $user_id = $this->session->userdata('user_id');
        $history = $this->chat->getChatHistory($user_id, $receiver_id);
        echo json_encode($history);
    }

    public function sendMessage() {

        $data = [
            'sender_id' => $this->session->userdata('user_id'),
            'receiver_id' => $this->input->post('receiver_id'),
            'message' => $this->input->post('message')
        ];
        $this->chat->insertMessage($data);
        echo json_encode(['status' => 'success']);
    }
}