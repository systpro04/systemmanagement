<?php 
class Task_mod extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
	public function gettasks($type, $start, $length, $order_column, $order_dir, $search_value) {
        $this->db->select('dt.*, m.*, sb.*, t.*, dt.task_status');
        $this->db->from('daily_task dt');
		$this->db->join('team t', 't.team_id = dt.team_id');
        $this->db->join('module m', 'm.mod_id = dt.mod_id');
        $this->db->join('sub_module sb', 'dt.sub_mod_id = sb.sub_mod_id');

        if (!empty($search_value)) {
            $this->db->like('dt.emp_id', $search_value);
            $this->db->or_like('m.mod_name', $search_value);
            $this->db->or_like('sb.sub_mod_name', $search_value);
        }

        $this->db->order_by($order_column, $order_dir);
        $this->db->limit($length, $start);
		if (!empty($type)) {
            $this->db->where('dt.team_id', $type);
        }
        return $this->db->get()->result_array();
    }

    public function getTotaltasks($type, $search_value) {
        $this->db->select('dt.*, m.*, sb.*, t.*, dt.task_status');
        $this->db->from('daily_task dt');
		$this->db->join('team t', 't.team_id = dt.team_id');
        $this->db->join('module m', 'm.mod_id = dt.mod_id');
        $this->db->join('sub_module sb', 'dt.sub_mod_id = sb.sub_mod_id');
        if (!empty($search_value)) {
            $this->db->like('dt.emp_id', $search_value);
            $this->db->or_like('m.mod_name', $search_value);
            $this->db->or_like('sb.sub_mod_name', $search_value);
        }

		if (!empty($type)) {
            $this->db->where('dt.team_id', $type);
		}
        return $this->db->count_all_results();
    }
	public function add_task($data) {
		$this->db->insert('daily_task', $data);
	}

	public function get_task_data($id) {
		$this->db->select('*');
		$this->db->from('daily_task');
        $this->db->where('task_id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
	public function update_task($data, $id) {
		$this->db->where('task_id', $id);
		$this->db->update('daily_task', $data);
	}
	public function delete_task($id) {
		$this->db->where('task_id', $id);
		$this->db->delete('daily_task');
	}
}