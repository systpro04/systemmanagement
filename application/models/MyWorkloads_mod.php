<?php 
class MyWorkloads_mod extends CI_Model
{
    function __construct() {
        parent::__construct();
    }

    public function get_workloads($status)
    {

        $this->db->select('w.*, m.*, sb.*, t.*, w.status as w_status, w.date_added, u.type');
        $this->db->from('workload w');
        $this->db->join('module m', 'm.mod_id = w.module', 'LEFT');
        $this->db->join('sub_module sb', 'w.sub_mod = sb.sub_mod_id AND w.module = sb.mod_id', 'LEFT');
        $this->db->join('team t', 't.team_id = w.team_id');
        $this->db->join('users u', 'u.emp_id = w.emp_id AND u.team_id = w.team_id', 'LEFT');
        $this->db->where('w.emp_id', $this->session->userdata('emp_id'));
        if ($status !== 'all') {
            $this->db->where('w.status', $status);
        }

        $query = $this->db->get();
        return $query->result();
    }
}