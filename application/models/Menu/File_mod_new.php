<?php 
class File_mod_new extends CI_Model
{
	function __construct() {
		parent::__construct();
        $this->db2 = $this->load->database('pis', TRUE);
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
    
        $this->db->where('typeofsystem', 'new');
        // $this->db->where('file_status', 'Approve');
        $query = $this->db->get('system_files');
        return $query->row();
    }

    public function get_business_units(){

        $this->db2->select('c.*, b.*');
        $this->db2->from('locate_company c');
        $this->db2->join('locate_business_unit b', 'c.company_code = b.company_code');
        $this->db2->where('c.status', 'active');
        $business_unit = $this->db2->get()->result();
    
        foreach ($business_unit as &$bu) {
            $this->db2->select('*');
            $this->db2->from('locate_department d');
            $this->db2->where('d.bunit_code', $bu->bunit_code);
            $bu->buData = $this->db2->get()->result();
        }
        return $business_unit;

    }
    public function get_module_new()
    {
        $this->db->select('m.mod_id, m.mod_name, sb.sub_mod_id, sb.sub_mod_name');
        $this->db->from('module m');
        $this->db->join('sub_module sb', 'm.mod_id = sb.mod_id', 'left');
        $this->db->group_by('m.mod_id');
        $this->db->where('typeofsystem', 'new');
        $this->db->where('status', 'Approve');
        $modules = $this->db->get()->result();
    
        foreach ($modules as &$module) {
            $this->db->select('sb.sub_mod_id, sb.sub_mod_name');
            $this->db->from('sub_module sb');
            $this->db->where('sb.mod_id', $module->mod_id);
            $module->submodules = $this->db->get()->result();
        }
        return $modules;
    }

    public function get_files_by_name($folder_name) {
        $this->db->select('file_name');
        $this->db->from('system_files');
        $this->db->where('uploaded_to', $folder_name);
        $this->db->where('typeofsystem', 'new');
        $query = $this->db->get();
    
        return $query->result_array();
    }
    public function upload_file($data) {
        $this->db->insert('system_files', $data);
    }

    public function file_exists_new($file_name, $team, $module, $sub_mod_id, $path) {
        $this->db->where('file_name', $file_name);
        $this->db->where('team_id', $team);
        $this->db->where('mod_id', $module);
        $this->db->where('sub_mod_id', $sub_mod_id);
        $this->db->where('uploaded_to', $path);
        $this->db->where('typeofsystem', 'new');
        $query = $this->db->get('system_files');
        
        return $query->num_rows() > 0;
    }

    public function delete_file_record($file_name) {
        $this->db->where('file_name', $file_name);
        $this->db->delete('system_files');
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