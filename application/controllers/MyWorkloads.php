<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyWorkloads extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('session_expire');
		}
		$this->load->model('MyWorkloads_mod', 'myWorkload');
	}

    public function index(){
        $this->load->view('_layouts/header');
        $this->load->view('myworkloads');
        $this->load->view('_layouts/footer');
    }

    public function fetch_workloads()
    {
        $status = $this->input->get('status', true) ?: 'all';

        $page = (int) $this->input->get('page', true) ?: 1;
        $limit = 6;
        $offset = ($page - 1) * $limit;

        $workloads = $this->myWorkload->get_workloads($status, $limit, $offset);

        $total_workloads = $this->myWorkload->count_workloads($status);
        $total_pages = max(1, ceil($total_workloads / $limit));
    
        if (empty($workloads)) {
            echo '<div class="alert alert-info text-center text-primary"><iconify-icon icon="fluent:box-multiple-search-24-filled" width="80" height="80"></iconify-icon><h6 class="mt-2">No workload has been added yet in '.$status.'.. </h6></div>';
            return;
        }

        $html = '<div class="row">';
        foreach ($workloads as $workload) {
            $html .= '
                <div class="col-md-4"> 
                    <div class="card joblist-card">
                        <div class="card-body">  
                            <div class="d-flex mb-4">
                                <div class="avatar-sm">
                                    <div class="avatar-title bg-primary rounded">
                                        <iconify-icon icon="tdesign:task-checked-filled" width="25" height="25"></iconify-icon>
                                    </div>
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <a href="#!">
                                        <h5 class="job-title fw-bold fs-15">' . htmlspecialchars($workload->mod_name) . ' | ' . htmlspecialchars($workload->sub_mod_name) . '</h5>
                                    </a>
                                    <p class="company-name text-muted mb-0 fs-12">' . htmlspecialchars($workload->team_name) . '</p>
                                </div>
                            </div>
                            <p class="text-muted job-description fs-12">' . htmlspecialchars($workload->desc) . '</p>
                        </div>
                        <div class="card-footer border-top-dashed text-muted">
                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-1 fs-10">
                                <div><i class="ri-briefcase-2-line align-bottom me-1"></i> <span class="job-type">' . $workload->type . '</span></div>
                                <div><i class="ri-map-pin-2-line align-bottom me-1"></i> <span class="job-location">' . $this->session->hrms_position . '</span></div>
                                <div><i class="ri-user-3-line align-bottom me-1"></i> ' . htmlspecialchars($workload->w_status) . '</div>
                                <div><i class="ri-time-line align-bottom me-1"></i> <span class="job-postdate">' . date('m/d/Y', strtotime($workload->date_added)) . '</span></div>
                            </div>
                        </div>
                    </div>
                </div>';
        }
        $html .= '</div>';
        $prev_page = max(1, $page - 1);
        $next_page = min($total_pages, $page + 1);
    
        $pagination = '<div class="d-flex justify-content-center mt-3">';
        if ($page > 1) {
            $pagination .= '<a href="javascript:void(0);" class="btn btn-primary btn-sm mx-1 pagination-link" data-page="' . $prev_page . '">Prev</a>';
        }
        $pagination .= '<span class="mx-2 text-muted">Page ' . $page . ' of ' . $total_pages . '</span>';
        if ($page < $total_pages) {
            $pagination .= '<a href="javascript:void(0);" class="btn btn-primary btn-sm mx-1 pagination-link" data-page="' . $next_page . '">Next</a>';
        }
        $pagination .= '</div>';
    
        echo $html . $pagination;
    }
    public function fetch_tasks()
    {
        $s = $this->input->get('task_stats');
        $page = (int) $this->input->get('page', true) ?: 1;
        $limit = 6;
        $offset = ($page - 1) * $limit;
    
        $status = '';
        if ($s == 'AllTasks') {
            $status = 'all';
        } elseif ($s == 'PendingTasks') {
            $status = 'Pending';
        } elseif ($s == 'OngoingTasks') {
            $status = 'Ongoing';
        } elseif ($s == 'DoneTasks') {
            $status = 'Done';
        }
    
        $tasks = $this->myWorkload->get_tasks($status, $limit, $offset);
        $total_tasks = $this->myWorkload->count_tasks($status);
        $total_pages = max(1, ceil($total_tasks / $limit));
    
        if (empty($tasks)) {
            echo '<div class="alert alert-info text-center text-primary">
                    <iconify-icon icon="fluent:box-multiple-search-24-filled" width="80" height="80"></iconify-icon>
                    <h6 class="mt-2">No daily task has been added yet in ' . htmlspecialchars($status) . '.</h6>
                  </div>';
            return;
        }
        $html = '<div class="row">';
        foreach ($tasks as $workload) {
            $html .= '
                <div class="col-md-4"> 
                    <div class="card joblist-card">
                        <div class="card-body">  
                            <div class="d-flex mb-4">
                                <div class="avatar-sm">
                                    <div class="avatar-title bg-primary rounded">
                                        <iconify-icon icon="tdesign:task-checked-filled" width="25" height="25"></iconify-icon>
                                    </div>
                                </div>
                                <div class="ms-3 flex-grow-1">
                                    <a href="#!">
                                        <h5 class="job-title fw-bold fs-15">' . htmlspecialchars($workload->mod_name) . ' | ' . htmlspecialchars($workload->sub_mod_name) . '</h5>
                                    </a>
                                    <p class="company-name text-muted mb-0 fs-12">' . htmlspecialchars($workload->team_name) . '</p>
                                </div>
                            </div>
                            <p class="text-muted job-description fs-12">' . htmlspecialchars($workload->desc) . '</p>
                        </div>
                        <div class="card-footer border-top-dashed text-muted">
                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-1 fs-10">
                                <div><i class="ri-briefcase-2-line align-bottom me-1"></i> <span class="job-type">' . $workload->type . '</span></div>
                                <div><i class="ri-map-pin-2-line align-bottom me-1"></i> <span class="job-location">' . $this->session->hrms_position . '</span></div>
                                <div><i class="ri-user-3-line align-bottom me-1"></i> ' . htmlspecialchars($workload->task_status) . '</div>
                                <div><i class="ri-time-line align-bottom me-1"></i> <span class="job-postdate">' . date('m/d/Y', strtotime($workload->date_added)) . '</span></div>
                            </div>
                        </div>
                    </div>
                </div>';
        }
        $html .= '</div>';
    
        $prev_page = max(1, $page - 1);
        $next_page = min($total_pages, $page + 1);
    
        $pagination = '<div class="d-flex justify-content-center mt-3">';
        if ($page > 1) {
            $pagination .= '<a href="javascript:void(0);" class="btn btn-primary btn-sm mx-1 pagination-link" data-page="' . $prev_page . '">Prev</a>';
        }
        $pagination .= '<span class="mx-2 text-muted">Page ' . $page . ' of ' . $total_pages . '</span>';
        if ($page < $total_pages) {
            $pagination .= '<a href="javascript:void(0);" class="btn btn-primary btn-sm mx-1 pagination-link" data-page="' . $next_page . '">Next</a>';
        }
        $pagination .= '</div>';
    
        echo $html . $pagination;
    }
    
    

}