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
		$this->load->model('Menu/Structure_mod', 'structure');
	}

    public function index(){
        $this->load->view('_layouts/header');
        $this->load->view('menu/chats');
        $this->load->view('_layouts/footer');
    }

    public function get_users() {
        $session_id = $_SESSION['emp_id'];
        $users = $this->chat->getAllUsers();
        $data = [];
    
        foreach ($users as $value) {
            $emp_data = $this->workload->get_emp($value['emp_id']);  
            $emp_dat = $this->structure->get_emp($value['emp_id']);  
            $this->db->select('message, date_send');
            $this->db->where("(sender_id = '$session_id' AND receiver_id = '{$value['emp_id']}') OR 
                               (sender_id = '{$value['emp_id']}' AND receiver_id = '$session_id')");
            $this->db->order_by('date_send', 'DESC');
            $this->db->limit(1);
            $last_message = $this->db->get('messages')->row_array();
    
            $data[] = [
                'id'           => $value['id'],
                'emp_id'       => $value['emp_id'],
                'name'         => ucwords(strtolower($emp_data['name'])),
                'last_message' => $last_message ? $last_message['message'] : '',
                'last_time'    => $last_message ? date('h:i A', strtotime($last_message['date_send'])) : '',
                'has_messages' => $last_message ? 1 : 0,
                'photo'        => ltrim($emp_dat['photo'], '.')
            ];
        }
        usort($data, function($a, $b) {
            if ($a['has_messages'] == $b['has_messages']) {
                return strcmp(strtolower($a['name']), strtolower($b['name']));
            }
            return $b['has_messages'] - $a['has_messages'];
        });
    
        echo json_encode($data);
    }
    
    
    
    




    public function get_messages() {
        $user_id     = $this->session->userdata('emp_id');
        $receiver_id = $this->input->post('receiver_id');
    
        $messages = $this->chat->get_messages($user_id, $receiver_id);
    
        $sender   = $this->structure->get_emp($user_id);  
        $receiver = $this->structure->get_emp($receiver_id);  
    
        $sender_photo   = ltrim($sender['photo'], '.');
        $receiver_photo = ltrim($receiver['photo'], '.');
    
        foreach ($messages as &$msg) {
            if ($msg->sender_id == $user_id) {
                $msg->photo = $sender_photo;
            } else {
                $msg->photo = $receiver_photo;
            }
        }
    
        echo json_encode($messages);
    }
    

    public function get_new_messages() {
        $user_id = $this->session->userdata("emp_id");
        $receiver_id = $this->input->post('receiver_id');
        $last_message_id = $this->input->post('last_message_id');

        $new_messages = $this->chat->fetch_new_messages($user_id, $receiver_id, $last_message_id);


        $sender   = $this->structure->get_emp($user_id);  
        $receiver = $this->structure->get_emp($receiver_id);  


        $sender_photo   = ltrim($sender['photo'], '.');
        $receiver_photo = ltrim($receiver['photo'], '.');


        foreach ($new_messages as &$msg) {
            if ($msg['sender_id'] == $user_id) {
                $msg['photo'] = $sender_photo;
            } else {
                $msg['photo'] = $receiver_photo;
            }
        }

        echo json_encode($new_messages);
    }

    public function send_message() {
        $sender_id = $this->session->userdata('emp_id');
        $receiver_id = $this->input->post('receiver_id');
        $team_id = $this->input->post('team_id');
        $message = $this->input->post('message', TRUE);
        $reply_to = $this->input->post('reply_to'); 

        $data = [
            'sender_id'     => $sender_id,
            'receiver_id'   => $receiver_id,
            'team_id'       => $team_id,
            'message'       => $message,
            'date_send'     => date('Y-m-d H:i:s'),
            'reply_to'      => $reply_to
        ];

        $receiver = $this->structure->get_emp($receiver_id);  


        $this->chat->send_message($data);
        echo json_encode([
            'status' => 'success',
            'message' => $message,
            'date_send' => $data['date_send'],
            'photo' => ltrim($receiver['photo'], '.'),
        ]);
        
    }

    

}