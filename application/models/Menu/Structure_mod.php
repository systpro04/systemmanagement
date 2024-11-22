<?php 
class Structure_mod extends CI_Model
{
	function __construct() {
		parent::__construct();
        $this->db2 = $this->load->database('pis', TRUE);
	}
    // public function getData()
    // {
    //     $this->db->distinct();
    //     $this->db->group_by('emp_id');
    //     $query = $this->db->get('users');
    //     return $query->result_array();
    // }

    // public function get_emp($emp_id) {
    //     $this->db2->select('employee3.name, applicant.photo');
    //     $this->db2->from('employee3');
    //     $this->db2->join('pis.applicant', 'applicant.app_id = employee3.emp_id');
    //     $this->db2->where('employee3.emp_id', $emp_id);
    //     $this->db2->order_by('employee3.name', 'DESC');
    //     $this->db2->group_by('employee3.emp_id');
    //     $query = $this->db2->get();
    //     return $query->row_array();
    // }

    public function get_employees_by_positions($positions) {
        $this->db2->select('
            e.name, 
            a.photo, 
            e.position
        ');
        $this->db2->from('employee3 e');
        $this->db2->join('applicant a', 'a.app_id = e.emp_id', 'inner');
        $this->db2->where([
            'e.company_code' => '01',
            'e.bunit_code' => '01',
            'e.dept_code' => '13',
            'e.section_code' => '02',
            'e.current_status' => 'active'
        ]);
        $this->db2->where_in('e.sub_section_code', ['', '01', '02']);
        $this->db2->where_in('e.position', $positions);
        $this->db2->where_not_in('e.emp_id', [
            '04316-2017', '05137-2022', '25077-2013', 
            '28541-2013', '00207-2023', '00203-2023', 
            '05011-2023', '04143-2023', '09662-2015', '23188-2013', '01075-2016', '01074-2016'
        ]);

        $this->db2->order_by('e.startdate', 'ASC');
        $query = $this->db2->get();
        return $query->result_array();
    }
    
    
    
}
