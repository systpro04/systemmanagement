<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gantt extends CI_Controller {

    function __construct() {
        parent::__construct();
        if ($this->session->username == "") {
            redirect('login');
        }
        $this->load->model('Menu/Gantt_mod', 'gantt');
    }
    public function index() {
        $this->load->view('_layouts/header');
        $this->load->view('menu/gantt');
        $this->load->view('_layouts/footer');
    }

    public function gantt_list() {
        $team_id = $this->input->post('team_id');
        $module_id  = $this->input->post('module');

        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $order = $this->input->post('order');
        $search_value = $this->input->post('search')['value'];
        $order_column = $order[0]['column'];
        $order_dir = $order[0]['dir'];
    
        $module = $this->gantt->getGanttData($module_id,$team_id, $start, $length, $order_column, $order_dir, $search_value);
        $data = [];

        foreach ($module as $row) {
            if($row['sub_mod_name'] == null) {
                $sub_module = '<span class="badge bg-info">N/A</span>';      
            }else{
                $sub_module = ucwords(strtolower($row['sub_mod_name']));
            }

            if (!empty($row['date_implem'])) {
                $formatted_date = date('F d, Y', strtotime($row['date_implem'])); // Format the date
                if (date('Y-m-d') >= $row['date_implem']) {
                    $date_implem = $formatted_date . ' - <span class="badge bg-success">Implemented | Done</span>';
                } else {
                    $date_implem = $formatted_date . ' - <span class="badge bg-warning">For Implementation</span>';
                }
            } else {
                $date_implem = '<span class="badge bg-secondary">N/A</span>';
            }
            


            
            if($row['date_parallel'] != null) {
                $date_parallel = date('F d, Y', strtotime($row['date_parallel']));   
            }else{
                $date_parallel = '<span class="badge bg-info">N/A</span>';   
            }

            if($row['date_start'] == null) {
                $date_start = '<span class="badge bg-info">N/A</span>';      
            }else{
                $date_start = date('F d, Y', strtotime($row['date_start']));
            }
            if($row['date_end'] == null) {
                $date_end = '<span class="badge bg-info">N/A</span>';      
            }else{
                $date_end = date('F d, Y', strtotime($row['date_end']));
            }

            $data[] = [
                'team_name'     => ucwords(strtolower($row['team_name'])),
                'emp_name'      => ucwords(strtolower($row['emp_name'])),
                'mod_name'      => ucwords(strtolower($row['mod_name'])),
                'sub_mod_name'  => $sub_module,
                'desc'          => $row['desc'],
                'date_req'      => date('F d, Y', strtotime($row['date_req'])),
                'date_parallel' => $date_parallel,
                'date_implem'   => $date_implem,
                'date_start'    => $date_start,
                'date_end'      => $date_end,
                'action'        => '
                    <div class="hstack gap-1 d-flex justify-content-center">
                        <button class="btn btn-sm btn-soft-info waves-effect waves-light" onclick="edit_gantt(' . $row['id'] . ')" data-bs-toggle="modal" data-bs-target="#edit_submodule"><iconify-icon icon="solar:pen-bold-duotone" class=" align-bottom fs-16"></iconify-icon></button>
                        <button class="btn btn-sm btn-soft-danger waves-effect waves-light" onclick="delete_gantt(' . $row['id'] . ')"><iconify-icon icon="solar:trash-bin-minimalistic-bold-duotone" class=" align-bottom fs-16"></iconify-icon></button>
                    </div>'
            ];
        }
    
        $total_records = $this->gantt->getTotalGantt($module_id, $team_id, $search_value);
    
        $output = [
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $total_records,
            "recordsFiltered" => $total_records,
            "data" => $data
        ];
        echo json_encode($output);
    }
    public function submit_gantt() {
        $team                = $this->input->post('team');
        $team_name           = $this->input->post('team_name');
        $module_name         = $this->input->post('module_name');
        $emp_id              = $this->input->post('emp_id');
        $emp_name            = $this->input->post('emp_name');
        $module              = $this->input->post('module');
        $module_name         = $this->input->post('module_name');
        $sub_module          = $this->input->post('sub_module');
        $description         = $this->input->post('description');
        $date_request        = $this->input->post('date_request');
        $date_parallel       = $this->input->post('date_parallel');
        $date_implementation = $this->input->post('date_implementation');
        $date_start          = $this->input->post('date_start');
        $date_end            = $this->input->post('date_end');
        $data = [];

        if ($date_request === "") {
            $date_request = '';
        }else{
            $date_request = date('Y-m-d', strtotime($date_request));
        }

        if ($date_parallel === "") {
            $date_parallel = '';
        }else{
            $date_parallel = date('Y-m-d', strtotime($date_parallel));
        }

        if ($date_implementation === "") {
            $date_implementation = '';
        }else{
            $date_implementation = date('Y-m-d', strtotime($date_implementation));
        }

        if ($date_start === "") {
            $date_start = '';
        }else{
            $date_start = date('Y-m-d', strtotime($date_start));
        }

        if ($date_end === "") {
            $date_end = '';
        }else{
            $date_end = date('Y-m-d', strtotime($date_end));
        }


        $data = [
            'team_id'             => $team,
            'emp_id'              => $emp_id,
            'emp_name'            => $emp_name,
            'mod_id'              => $module,
            'sub_mod_id'          => $sub_module,
            'desc'                => $description,
            'date_req'            => $date_request,
            'date_parallel'       => $date_parallel,
            'date_implem'         => $date_implementation,
            'date_start'          => $date_start,
            'date_end'            => $date_end,
            'date_added'          => date('Y-m-d H:i:s'),
        ];
        $this->gantt->submit_gantt($data);

        $action = '<b>' . $this->session->name. '</b> added a gantt for <b>'.$team_name.' | '.$module_name.'</b>';

        $data1 = array(
            'emp_id' => $this->session->emp_id,
            'action' => $action,
            'date_added' => date('Y-m-d H:i:s'),
        );
        $this->load->model('Logs', 'logs');
        $this->logs->addLogs($data1);
    }

    public function edit_gantt_content() {
        $id = $this->input->post('id');
        $data = $this->gantt->get_gant_data($id);
        echo json_encode($data);
    }

    public function update_gantt() {
        $id                  = $this->input->post('id');
        $team                = $this->input->post('team');
        $team_name           = $this->input->post('team_name');
        $module_name         = $this->input->post('module_name');
        $emp_id              = $this->input->post('emp_id');
        $emp_name            = $this->input->post('emp_name');
        $module              = $this->input->post('module');
        $sub_module          = $this->input->post('sub_module');
        $description         = $this->input->post('description');
        $date_request        = $this->input->post('date_request');
        $date_parallel       = $this->input->post('date_parallel');
        $date_implementation = $this->input->post('date_implementation');
        $date_start          = $this->input->post('date_start');
        $date_end            = $this->input->post('date_end');
        $data = [];

        if ($date_request === "") {
            $date_request = '';
        }else{
            $date_request = date('Y-m-d', strtotime($date_request));
        }

        if ($date_parallel === "") {
            $date_parallel = '';
        }else{
            $date_parallel = date('Y-m-d', strtotime($date_parallel));
        }

        if ($date_implementation === "") {
            $date_implementation = '';
        }else{
            $date_implementation = date('Y-m-d', strtotime($date_implementation));
        }

        if ($date_start === "") {
            $date_start = '';
        }else{
            $date_start = date('Y-m-d', strtotime($date_start));
        }

        if ($date_end === "") {
            $date_end = '';
        }else{
            $date_end = date('Y-m-d', strtotime($date_end));
        }

        $data = [
            'team_id'             => $team,
            'emp_id'              => $emp_id,
            'emp_name'            => $emp_name,
            'mod_id'              => $module,
            'sub_mod_id'          => $sub_module ,
            'desc'                => $description,
            'date_req'            => $date_request,
            'date_parallel'       => $date_parallel,
            'date_implem'         => $date_implementation,
            'date_start'          => $date_start,
            'date_end'            => $date_end,
            'date_added'          => date('Y-m-d H:i:s'),
        ];
        $this->gantt->update_gantt($data, $id);
        $action = '<b>' . $this->session->name. '</b> updated a gantt for <b>'.$team_name.' | '.$module_name.'</b>';

        $data1 = array(
            'emp_id' => $this->session->emp_id,
            'action' => $action,
            'date_updated' => date('Y-m-d H:i:s'),
        );
        $this->load->model('Logs', 'logs');
        $this->logs->addLogs($data1);
    }

    public function delete_gantt(){
        $id = $this->input->post('id');
        $this->gantt->delete_gantt($id);
    }
}