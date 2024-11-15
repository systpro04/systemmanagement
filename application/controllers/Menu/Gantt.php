<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gantt extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Menu/Gantt_mod', 'gantt');
    }
    public function index() {
        $this->load->view('_layouts/header');
        $this->load->view('menu/gantt');
        $this->load->view('_layouts/footer');
    }

    public function gantt_list() {
        $team_id = $this->input->post('team_id');
        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $order = $this->input->post('order');
        $search_value = $this->input->post('search')['value'];
        
        $columns = ['emp_name', 'mod_name', 'sub_mod_name', 'desc', 'date_req', 'date_parallel', 'date_implem', 'date_start', 'date_end'];
        $order_column = $columns[$order[0]['column']];
        $order_dir = $order[0]['dir'];
    
        $module = $this->gantt->getGanttData($team_id, $start, $length, $order_column, $order_dir, $search_value);
        $data = [];
        
        foreach ($module as $row) {
            $data[] = [
                'emp_name'      => $row['emp_name'],
                'mod_name'      => $row['mod_name'],
                'sub_mod_name'  => $row['sub_mod_name'],
                'desc'          => $row['desc'],
                'date_req'      => $row['date_req'],
                'date_parallel' => $row['date_parallel'],
                'date_implem'   => $row['date_implem'],
                'date_start'    => $row['date_start'],
                'date_end'      => $row['date_end'],
                'action'        => '
                    <div class="hstack gap-1 d-flex justify-content-center">
                        <button class="btn btn-sm btn-soft-info btn-label waves-effect waves-light" onclick="edit_gantt(' . $row['id'] . ')" data-bs-toggle="modal" data-bs-target="#edit_submodule"><i class="ri-edit-line label-icon align-bottom me-2"></i> Edit</button>
                        <button class="btn btn-sm btn-soft-danger btn-label waves-effect waves-light" onclick="delete_gantt(' . $row['id'] . ')"><iconify-icon icon="ri:delete-bin-5-fill" class="label-icon align-bottom fs-16 me-2"></iconify-icon> Delete</button>
                    </div>'
            ];
        }
    
        $total_records = $this->gantt->getTotalGantt($team_id, $search_value);
    
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

        $data = [
            'team_id'             => $team,
            'emp_id'              => $emp_id,
            'emp_name'            => $emp_name,
            'mod_id'              => $module,
            'sub_mod_id'          => $sub_module,
            'desc'                => $description,
            'date_req'            => date('Y-m-d', strtotime($date_request)),
            'date_parallel'       => date('Y-m-d', strtotime($date_parallel)),
            'date_implem'         => date('Y-m-d', strtotime($date_implementation)),
            'date_start'          => date('Y-m-d', strtotime($date_start)),
            'date_end'            => date('Y-m-d', strtotime($date_end)),
            'date_added'          => date('Y-m-d H:i:s'),
        ];
        $this->gantt->submit_gantt($data);
    }

    public function edit_gantt_content() {
        $id = $this->input->post('id');
        $data = $this->gantt->get_gant_data($id);
        echo json_encode($data);
    }

    public function update_gantt() {
        $id                  = $this->input->post('id');
        $team                = $this->input->post('team');
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

        $data = [
            'team_id'             => $team,
            'emp_id'              => $emp_id,
            'emp_name'            => $emp_name,
            'mod_id'              => $module,
            'sub_mod_id'          => $sub_module,
            'desc'                => $description,
            'date_req'            => date('Y-m-d', strtotime($date_request)),
            'date_parallel'       => date('Y-m-d', strtotime($date_parallel)),
            'date_implem'         => date('Y-m-d', strtotime($date_implementation)),
            'date_start'          => date('Y-m-d', strtotime($date_start)),
            'date_end'            => date('Y-m-d', strtotime($date_end)),
            'date_added'          => date('Y-m-d H:i:s'),
        ];
        $this->gantt->update_gantt($data, $id);
    }

    public function delete_gantt(){
        $id = $this->input->post('id');
        $this->gantt->delete_gantt($id);
    }
}