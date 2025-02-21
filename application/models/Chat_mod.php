<?php 
class Chat_mod extends CI_Model
{
    function __construct() {
        parent::__construct();
    }

    public function getAllUsers() {
        $this->db->select('*');
        $this->db->where('emp_id !=', $this->session->userdata('emp_id'));
        $this->db->where('type', 'Fulltime');

        $data = $this->db->get('users');
        if($data->num_rows() > 0){
            return $data->result_array();
        }else{
            return false;
        }
    }

    public function get_messages($user_id = null, $receiver_id = null) {
        $this->db->order_by('date_send', 'ASC');
    
        $this->db->group_start();
        $this->db->where('sender_id', $user_id);
        $this->db->where('receiver_id', $receiver_id);
        $this->db->group_end();
        $this->db->or_group_start();
        $this->db->where('sender_id', $receiver_id);
        $this->db->where('receiver_id', $user_id);
        $this->db->group_end();
    
        return $this->db->get('messages')->result();
    }

    public function getLastMessage($receiver_id) {
        $user_id = $this->session->userdata("emp_id"); // Logged-in user
    
        $this->db->select('message, date_send, sender_id, receiver_id');
        $this->db->from('messages');
        $this->db->group_start();
        $this->db->where('sender_id', $user_id);
        $this->db->where('receiver_id', $receiver_id);
        $this->db->group_end();
        $this->db->or_group_start();
        $this->db->where('sender_id', $receiver_id);
        $this->db->where('receiver_id', $user_id);
        $this->db->group_end();
        $this->db->order_by('date_send', 'DESC');
        $this->db->limit(1);
    
        $query = $this->db->get();
        return $query->result_array(); // Returns the last message as an array
    }
    

    public function fetch_new_messages($user_id, $receiver_id, $last_message_id) {
        $this->db->select('*');
        $this->db->from('messages');
        $this->db->group_start();
        $this->db->where('sender_id', $user_id);
        $this->db->where('receiver_id', $receiver_id);
        $this->db->group_end();
        $this->db->or_group_start();
        $this->db->where('sender_id', $receiver_id);
        $this->db->where('receiver_id', $user_id);
        $this->db->group_end();
        $this->db->order_by('date_send', 'ASC');

        $query = $this->db->get();

        return $query->result_array();
    }
        
    
    
    
    

    public function send_message($data) {
        return $this->db->insert('messages', $data);
    }
}