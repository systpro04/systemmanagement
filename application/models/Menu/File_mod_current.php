<?php 
class File_mod_current extends CI_Model
{
	function __construct() {
		parent::__construct();
	}
    public function get_file_details($file_name, $team = null, $module = null, $sub_module = null) {

        $this->db->where('file_name', $file_name);
        if ($team) {
            $this->db->where('team_id', $team);
        }
        if ($module) {
            $this->db->where('mod_id', $module);
        }
        if ($sub_module) {
            $this->db->where('sub_mod_id', $sub_module);
        }
    
        $this->db->where('typeofsystem', 'current');
        $query = $this->db->get('system_files');
        return $query->row();
    }
    public function get_files_by_name($folder_name) {
        $this->db->select('file_name');
        $this->db->from('system_files');
        $this->db->where('uploaded_to', $folder_name);
        $this->db->where('typeofsystem', 'current');
        $query = $this->db->get();
    
        return $query->result_array();
    }
    public function upload_file($data) {
        $this->db->insert('system_files', $data);
    }

    public function file_exists($file_name, $team, $module, $sub_mod_id, $path) {
        $this->db->where('file_name', $file_name);
        $this->db->where('team_id', $team);
        $this->db->where('mod_id', $module);
        $this->db->where('sub_mod_id', $sub_mod_id);
        $this->db->where('uploaded_to', $path);
        $this->db->where('typeofsystem', 'current');
        $query = $this->db->get('system_files');
        
        return $query->num_rows() > 0;
    }


    public function delete_file_record($file_name) {
        $this->db->where('file_name', $file_name);
        $this->db->where('typeofsystem', 'current');
        $this->db->delete('system_files');
    }

    public function get_teams() {
        $this->db->select('*');
        $this->db->from('team');
        $query = $this->db->get();
    
        return $query->result_array();
    }
    public function get_modules() {
        $this->db->select('*');
        $this->db->from('module');
        $query = $this->db->get();
    
        return $query->result_array();
    }

    public function get_sub_modules() {
        $this->db->select('*');
        $this->db->from('sub_module');
        $query = $this->db->get();
    
        return $query->result_array();
    }

    public function check_pending_files($team, $module, $sub_mod_id, $previous_directory) {
        $this->db->where('team_id', $team);
        $this->db->where('mod_id', $module);
        $this->db->where('sub_mod_id', $sub_mod_id);
        $this->db->where('uploaded_to', $previous_directory);
        $this->db->group_start();
            $this->db->where('isr_status', 'pending');
            $this->db->or_where('wt_status', 'pending');
            $this->db->or_where('flowchart_status', 'pending');
            $this->db->or_where('dfd_status', 'pending');
            $this->db->or_where('proposed_status', 'pending');
            $this->db->or_where('local_status', 'pending');
            $this->db->or_where('uat_status', 'pending');
            $this->db->or_where('live_status', 'pending');
        $this->db->group_end();
    
        return $this->db->count_all_results('system_files');
    }
    public function check_files_exist($team, $module, $sub_mod_id, $previous_directory) {
        $this->db->where('team_id', $team);
        $this->db->where('mod_id', $module);
        $this->db->where('sub_mod_id', $sub_mod_id);
        $this->db->where('uploaded_to', $previous_directory);
        return $this->db->count_all_results('system_files');
    }
    public function get_pending_files($team, $module, $sub_mod_id, $previous_directory) {
        $this->db->where('team_id', $team);
        $this->db->where('mod_id', $module);
        $this->db->where('sub_mod_id', $sub_mod_id);
        $this->db->where('uploaded_to', $previous_directory);
        $this->db->group_start();
            $this->db->where('isr_status', 'pending');
            $this->db->or_where('wt_status', 'pending');
            $this->db->or_where('flowchart_status', 'pending');
            $this->db->or_where('dfd_status', 'pending');
            $this->db->or_where('proposed_status', 'pending');
            $this->db->or_where('local_status', 'pending');
            $this->db->or_where('uat_status', 'pending');
            $this->db->or_where('live_status', 'pending');
        $this->db->group_end();
        return $this->db->get('system_files')->result_array();
    }
    
}