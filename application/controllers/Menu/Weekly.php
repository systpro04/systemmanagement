<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weekly extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('session_expire');
		}
        $this->load->model('Menu/Weekly_mod', 'weekly');
        $this->load->model('Menu/Workload', 'workload');
    }
    public function index(){
        $this->load->view('_layouts/header');
		$this->load->view('menu/weekly_report');
		$this->load->view('_layouts/footer');
    }
    public function weekly_list()
    {
        $team           = $this->input->post('team');
        $module         = $this->input->post('module'); 
        $sub_module     = $this->input->post('submodule');
        $date_range     = $this->input->post('date_range');
        
        $start          = $this->input->post('start');
        $length         = $this->input->post('length');
        $order          = $this->input->post('order');
        $search_value   = $this->input->post('search')['value'];
        $order_column   = $order[0]['column'];
        $order_dir      = $order[0]['dir'];

        $weekly         = $this->weekly->getweekly($date_range, $team,$module,$sub_module, $start, $length, $order_column, $order_dir, $search_value);
        $data           = [];
    
        foreach ($weekly as $row) {
            $emp_data = $this->workload->get_emp($row['emp_id']);

            if($row['sub_mod_id'] != 0){
                $sub_mod_name = ucwords(strtolower($row['sub_mod_name']));
            }else{
                $sub_mod_name = '<span class="badge bg-secondary">N/A</span>';
            }

            if($row['remarks'] != ''){
                $remarks =  ucwords(strtolower($row['remarks']));
            }else{
                $remarks = '<span class="badge bg-secondary">N/A</span>'; 
            } 

            $data[] = [
                'id'                => $row['id'],
                'date_range'        => $row['date_range'],
                'emp_name'          => ucwords(strtolower($emp_data['name'])),
                'module'            => ucwords(strtolower($row['mod_name'])),
                'sub_mod_name'      => $sub_mod_name,
                'task_workload'     => ucwords(strtolower($row['task_workload'])),
                'remarks'           => $remarks,
                'weekly_status'     => $row['weekly_status'],
                'action'            => '
                    <div class="hstack gap-1">
                        <button type="button" class="btn btn-soft-secondary waves-effect waves-light btn-sm" onclick="edit_weekly_report_content(' . $row['id'] . ')" data-bs-toggle="modal" data-bs-target="#edit_weekly_report">
                            <iconify-icon icon="solar:pen-bold-duotone" class="label-icon align-bottom fs-16"></iconify-icon> 

                        </button>
                        <button type="button" class="btn btn-soft-danger waves-effect waves-light btn-sm" onclick="delete_weekly(' . $row['id'] . ')">
                            <iconify-icon icon="solar:trash-bin-minimalistic-bold-duotone" class="label-icon align-bottom fs-16"></iconify-icon>
                        </button>
                    </div>
                '
            ];
        }
        
        $total_records = $this->weekly->getTotalweekly($date_range, $team,$module,$sub_module, $search_value);

        $output = [
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $total_records,
            "recordsFiltered" => $total_records,
            "data" => $data
        ];
        echo json_encode($output);
    }
    public function submit_weeklyreport(){
        $date_range     = $this->input->post('date_range');
        $team           = $this->input->post('team');
        $emp_id         = $this->input->post('emp_id');
        $emp_name       = $this->input->post('emp_name');
        $module         = $this->input->post('module');
        $sub_module     = $this->input->post('sub_module');
        $task_workload  = $this->input->post('task_workload');
        $remarks        = $this->input->post('remarks');
        $weekly_status  = $this->input->post('weekly_status');

        $data = [
            'date_range'        => $date_range,
            'team_id'           => $team,
            'mod_id'            => $module,
            'sub_mod_id'        => $sub_module,
            'task_workload'     => $task_workload,
            'remarks'           => $remarks,
            'emp_id'            => $emp_id,
            'date_added'        => date('Y-m-d H:i:s'),
            'weekly_status'     => $weekly_status,
        ];
        $this->weekly->add_weekly($data);
        $action = '<b>' . $this->session->name. '</b> added a weekly report to <b>'.$emp_name.'</b>';

        $data1 = array(
            'emp_id' => $this->session->emp_id,
            'action' => $action,
            'date_added' => date('Y-m-d H:i:s'),
        );
        $this->load->model('Logs', 'logs');
        $this->logs->addLogs($data1);
    }
    public function edit_weekly_report_content(){
        $id = $this->input->post('id');
        $weekly = $this->weekly->edit_weekly_report_content($id);
        echo json_encode($weekly);
    }
    public function update_weeklyreport(){
        $id             = $this->input->post('id');
        $date_range     = $this->input->post('date_range');
        $team           = $this->input->post('team');
        $emp_id         = $this->input->post('emp_id');
        $emp_name       = $this->input->post('emp_name');
        $module         = $this->input->post('module');
        $sub_module     = $this->input->post('sub_module');
        $task_workload  = $this->input->post('task_workload');
        $remarks        = $this->input->post('remarks');
        $weekly_status  = $this->input->post('weekly_status');

        $data = [
            'date_range'        => $date_range,
            'team_id'           => $team,   
            'mod_id'            => $module,
            'sub_mod_id'        => $sub_module,
            'task_workload'     => $task_workload,
            'remarks'           => $remarks,
            'emp_id'            => $emp_id,
            'weekly_status'     => $weekly_status,
            'date_updated'      => date('Y-m-d H:i:s'),
        ];
        $this->weekly->update_weekly($data, $id);
        $action = '<b>' . $this->session->name. '</b> updated a weekly report to <b>'.$emp_name.'</b>';

        $data1 = array(
            'emp_id' => $this->session->emp_id,
            'action' => $action,
            'date_updated' => date('Y-m-d H:i:s'),
        );
        $this->load->model('Logs', 'logs');
        $this->logs->addLogs($data1);
    }
    public function update_weekly_status(){
        $id             = $this->input->post('id');
        $weekly_status  = $this->input->post('weekly_status');
        $emp_name       = $this->input->post('emp_name');

        $this->db->where('id', $id);
        $this->db->set('weekly_status', $weekly_status);
        $this->db->update('weekly_report');

        $action = '<b>' . $this->session->name. '</b> updated a weekly report status of <b>'.$emp_name.'</b> to <b>'.$weekly_status.'</b>';

        $data1 = array(
            'emp_id' => $this->session->emp_id,
            'action' => $action,
            'date_added' => date('Y-m-d H:i:s'),
        );
        $this->load->model('Logs', 'logs');
        $this->logs->addLogs($data1);


    }
    public function delete_weekly(){
        $id = $this->input->post('id');
        $this->weekly->delete_weekly($id);

        
        $action = '<b>' . $this->session->name. '</b> deleted a weekly report';
        $data1 = array(
            'emp_id' => $this->session->emp_id,
            'action' => $action,
            'date_updated' => date('Y-m-d H:i:s'),
        );
        $this->load->model('Logs', 'logs');
        $this->logs->addLogs($data1);


    }
}