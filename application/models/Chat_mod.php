<?php 
class Chat_mod extends CI_Model
{
    function __construct() {
        parent::__construct();
    }

    public function getAllUsers() {
        $this->db->select('*');
        $this->db->where('id !=', $this->session->userdata('user_id'));
        $this->db->where('type', 'Fulltime');
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function getChatHistory($user_id, $receiver_id) {
        $this->db->where("(sender_id = $user_id AND receiver_id = $receiver_id) OR (sender_id = $receiver_id AND receiver_id = $user_id)");
        $this->db->order_by('created_at', 'ASC');
        return $this->db->get('chats')->result();
    }

    public function insertMessage($data) {
        $this->db->insert('chats', $data);
    }
}