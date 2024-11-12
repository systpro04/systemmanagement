<?php
class Admin_mod extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->db2 = $this->load->database('pis', TRUE);
    }

    public function get_employees($search)
    {
        $this->db2->select('emp_id, name');
        $this->db2->where('current_status', 'Active');
        $this->db2->group_start();
        $this->db2->like('emp_id', $search);
        $this->db2->or_like('name', $search);
        $this->db2->group_end();
        $this->db2->limit(10);
        $query = $this->db2->get('employee3');
        return $query->result();
    }

    public function emp_mod($emp_id)
    {
        $this->db2->where('emp_id', $emp_id);
        $this->db2->where('current_status', 'Active');
        $data = $this->db2->get('employee3');
        return $data->row_array();
    }
    public function add_user($data)
    {
        $this->db->insert('users', $data);
        return $this->db->affected_rows();
    }

    public function get_user_list($filter_team, $start, $length, $search_value, $order_by_column, $order_dir) {
        $this->db->select('users.*, team.*');
        $this->db->from('users');
        $this->db->join('team', 'users.team_id = team.team_id');
        $this->db->where('users.status', 'Active');
    

        if (!empty($search_value)) {
            $this->db->group_start()
                     ->like('team.team_name', $search_value)
                    //  ->or_like('users.name', $search_value)
                     ->or_like('users.position', $search_value)
                     ->group_end();
        }

        $this->db->order_by($order_by_column, $order_dir);
    
        if ($length != -1) {
            $this->db->limit($length, $start);
        }
    
        if (!empty($filter_team)) {
            $this->db->where('team.team_id', $filter_team);
        }
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_user_count($filter_team,$search_value = null) {
        $this->db->select('users.*, team.*');
        $this->db->from('users');
        $this->db->join('team', 'users.team_id = team.team_id');
        $this->db->where('users.status', 'Active');
    
        if (!empty($search_value)) {
            $this->db->group_start()
                     ->like('team.team_name', $search_value)
                    //  ->or_like('users.name', $search_value)
                     ->or_like('users.position', $search_value)
                     ->group_end();
        }
        if (!empty($filter_team)) {
            $this->db->where('team.team_id', $filter_team);
        }
        return $this->db->count_all_results();
    }
    



    public function getKPI($type, $start, $length, $order_column, $order_dir, $search_value)
    {
        $this->db->select('*');
        $this->db->from('kpi');

        if (!empty($search_value)) {
            $this->db->like('title', $search_value);
            $this->db->or_like('type', $search_value);
        }
        $this->db->where('type', $type);
        $this->db->where('status', 'Active');
        $this->db->order_by($order_column, $order_dir);
        $this->db->limit($length, $start);

        return $this->db->get()->result_array();
    }

    public function getTotalKPI($type, $search_value)
    {
        $this->db->select('*');
        $this->db->from('kpi');

        if (!empty($search_value)) {
            $this->db->like('title', $search_value);
            $this->db->or_like('type', $search_value);

        }
        $this->db->where('type', $type);
        $this->db->where('status', 'Active');
        return $this->db->count_all_results();
    }

    public function get_kpi_data($id)
    {
        $this->db->select('*');
        $this->db->from('kpi');
        $this->db->where('id', $id);
        $this->db->where('status', 'Active');
        return $this->db->get()->row_array();
    }

    public function insertKPI($data)
    {

        $this->db->insert('kpi', $data);
    }

    public function updateKPI($data, $id)
    {

        $this->db->where('id', $id);
        $this->db->update('kpi', $data);
    }

    public function deleteKPI($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kpi');
    }


    public function getModule($start, $length, $order_column, $order_dir, $search_value)
    {
        $this->db->select('*');
        $this->db->from('module');

        if (!empty($search_value)) {
            $this->db->like('mod_name', $search_value);
            $this->db->or_like('mod_abbr', $search_value);

        }
        $this->db->order_by($order_column, $order_dir);
        $this->db->limit($length, $start);

        return $this->db->get()->result_array();
    }

    public function getTotalModule($search_value)
    {
        $this->db->select('*');
        $this->db->from('module');

        if (!empty($search_value)) {
            $this->db->like('mod_name', $search_value);
            $this->db->or_like('mod_abbr', $search_value);

        }
        return $this->db->count_all_results();
    }

    public function insertModule($data)
    {
        $this->db->insert('module', $data);
    }
    public function updateModule($data, $id)
    {
        $this->db->where('mod_id', $id);
        $this->db->update('module', $data);
    }

    public function getSubModule($mod_id, $start, $length, $order_column, $order_dir, $search_value)
    {
        $this->db->select('*');
        $this->db->from('sub_module');

        if (!empty($search_value)) {
            $this->db->like('sub_mod_name', $search_value);
        }
        $this->db->order_by($order_column, $order_dir);
        $this->db->limit($length, $start);

        $this->db->where('mod_id', $mod_id);

        return $this->db->get()->result_array();
    }

    public function getTotalSubModule($mod_id, $search_value)
    {
        $this->db->select('*');
        $this->db->from('sub_module');

        if (!empty($search_value)) {
            $this->db->like('sub_mod_name', $search_value);
        }

        $this->db->where('mod_id', $mod_id);
        return $this->db->count_all_results();
    }
    public function insertSubModule($data)
    {

        $this->db->insert('sub_module', $data);
    }

    public function get_module_data($id)
    {
        $this->db->select('*');
        $this->db->from('module');
        $this->db->where('mod_id', $id);
        return $this->db->get()->row_array();
    }

    public function get_submodule_data($sub_mod_id)
    {
        $this->db->select('*');
        $this->db->from('sub_module');
        $this->db->where('sub_mod_id', $sub_mod_id);
        return $this->db->get()->row_array();
    }
    public function updateSubModule($data, $sub_mod_id)
    {
        $this->db->where('sub_mod_id', $sub_mod_id);
        $this->db->update('sub_module', $data);
    }




    public function get_current_system_data($type, $typeofsystem, $start, $length, $order_column, $order_dir, $search_value)
    {
        $this->db->select('*');
        $this->db->from('system_files');
        $this->db->where('uploaded_to', $type);
        $this->db->where('typeofsystem', $typeofsystem);

        if ($search_value) {
            $this->db->like('file_name', $search_value);
        }

        $columns = ['file_name', 'uploaded_to'];
        $order_column_name = isset($columns[$order_column]) ? $columns[$order_column] : $columns[0];
        $this->db->order_by($order_column_name, $order_dir);

        $this->db->limit($length, $start);

        return $this->db->get()->result_array();
    }

    public function get_new_system_data($type, $typeofsystem, $start, $length, $order_column, $order_dir, $search_value)
    {
        $this->db->select('*');
        $this->db->from('system_files');
        $this->db->where('uploaded_to', $type);
        $this->db->where('typeofsystem', $typeofsystem);

        if ($search_value) {
            $this->db->like('file_name', $search_value);
        }

        $columns = ['file_name', 'uploaded_to'];
        $order_column_name = isset($columns[$order_column]) ? $columns[$order_column] : $columns[0];
        $this->db->order_by($order_column_name, $order_dir);

        $this->db->limit($length, $start);

        return $this->db->get()->result_array();
    }



    public function getTotalModuleCurrent($search_value = null, $type)
    {
        $this->db->select('COUNT(*) as total');
        $this->db->from('system_files');

        if ($search_value) {
            $this->db->like('file_name', $search_value);
        }
        $this->db->where('uploaded_to', $type);
        $query = $this->db->get();
        return $query->row()->total;
    }
    public function getTotalModuleNew($search_value = null, $type)
    {
        $this->db->select('COUNT(*) as total');
        $this->db->from('system_files');

        if ($search_value) {
            $this->db->like('file_name', $search_value);
        }
        $this->db->where('uploaded_to', $type);
        $query = $this->db->get();
        return $query->row()->total;
    }

    public function approved($file_id, $data, $typeofsystem)
    {
        if ($typeofsystem === 'current') {
            $this->db->where('file_id', $file_id);
            $this->db->update('system_files', $data);
        } elseif ($typeofsystem === 'new') {
            $this->db->where('file_id', $file_id);
            $this->db->update('system_files', $data);
        }
    }



}