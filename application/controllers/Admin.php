<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    function __construct()
    {
        parent::__construct();
		if (!$this->session->userdata('id')) {
			redirect('session_expire');
		}
        $this->load->model('Admin_mod', 'admin');
        $this->load->model('Menu/Workload', 'workload');
    }
    public function add_user_view(){
        $this->load->view('_layouts/header');
		$this->load->view('admin/add_user');
		$this->load->view('_layouts/footer');
    }
    public function user_list() {
        $filter_team = $this->input->post('filter_team');
        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $order = $this->input->post('order');
        $search_value = $this->input->post('search')['value'];
        $order_column = $order[0]['column'];
        $order_dir = $order[0]['dir'];
        $userlist = $this->admin->get_user_list($filter_team , $start, $length, $search_value, $order_column, $order_dir);
        $total_filtered = $this->admin->get_user_count($filter_team, $search_value);
    
        $result = [
            'draw' => $this->input->post('draw'),
            'recordsTotal' => $total_filtered,
            'recordsFiltered' => $total_filtered,
            'data' => []
        ];
    
        foreach ($userlist as $value) {
            $emp_data = $this->workload->get_emp($value['emp_id']);  
            
            $button = '<button href="#" class="btn btn-sm btn-soft-info waves-effect waves-light" onclick="update_user_content(\'' . $value['id'] . '\')" data-bs-toggle="modal" data-bs-target="#updateUser">
                        <iconify-icon icon="solar:pen-new-round-bold-duotone" class="label-icon align-bottom fs-16 me-2"></iconify-icon></button>
                        <button type="button" class="btn btn-soft-danger waves-effect waves-light btn-sm" onclick="reset_password('.$value['id'].')">
                        <iconify-icon icon="tabler:refresh-alert" class="label-icon align-bottom fs-16 me-2"></iconify-icon>
                    </button>';
            $type = '';
            if($value['type'] == 'Parttime') {
                $type = '<span class="badge rounded-pill bg-danger-subtle text-danger">Parttime</span>';
            } else {
                $type = '<span class="badge rounded-pill bg-success-subtle text-success">Fulltime</span>';
            }

            if($value['contact_no'] == null || $value['contact_no'] == '') {
                $contact_no = '<span class="badge rounded-pill bg-danger-subtle text-danger">No Contact Number</span>';
            } else {
                $contact_no = $value['contact_no'];
            }
            $result['data'][] = [
                'team_name'     => ucwords(strtolower($value['team_name'])), 
                'emp_id'        => $value['emp_id'], 
                'name'          => ucwords(strtolower($emp_data['name'])),
                'contact_no'    => $contact_no,
                'position'      => $emp_data['position'],
                'type'          => $type,
                'action'        => $button
            ];
        }
    
        echo json_encode($result);
    }
    public function search() 
    {
        $search = $this->input->get('query', TRUE);
        $employees = $this->admin->get_employees($search);
        $data = [];
        
        foreach ($employees as $employee) {
            $data[] = [
                'emp_id' => $employee->emp_id,
                'name' => $employee->name,
            ];
        }
        echo json_encode($data);
    }

    public function emp_data()
    {
        $emp_id = $this->input->post('emp_id', TRUE);
        $data = $this->admin->emp_mod($emp_id); 
    
        $result = [
            'emp_id' => $data['emp_id'],
            'name' => $data['name']
        ];
        echo json_encode($result);
    }
    public function add_user(){
        $team           = $this->input->post('team_id');
        $emp_id         = $this->input->post('emp_id');
        $position       = $this->input->post('position');
        $is_parttime    = $this->input->post('is_parttime');
        $contact_no     = $this->input->post('contact_no');
        $type = '';
        if($is_parttime == 'Parttime') {
            $type = 'Parttime';
        }else{
            $type = 'Fulltime';
        }
        $data = [];
        $data = [
            'team_id'       => $team,
            'emp_id'        => $emp_id,
            'username'      => $emp_id,
            'position'      => $position,
            'date_added'    => date('Y-m-d H:i:s'),
            'password'      => md5($emp_id),
            'type'          => $type,
            'contact_no'    => $contact_no
        ];
        $this->admin->add_user($data);
    }
    public function update_user_content(){
        $id = $this->input->post('id');
        $user = $this->admin->update_user_content($id);
        echo json_encode($user);
    }
    public function update_user(){
        $id             = $this->input->post('id');
        $team           = $this->input->post('team_id');
        $position       = $this->input->post('position');
        $is_parttime    = $this->input->post('type');
        $contact_no     = $this->input->post('contact_no');
        $data = [];
        $data = [    
            'team_id'       => $team,
            'position'      => $position,
            'type'          => $is_parttime,
            'contact_no'    => $contact_no

        ];
        $this->admin->update_user($data, $id);
    }

    public function reset_password(){
        $id = $this->input->post('id');
        $this->admin->reset_password($id); 
    }
    public function get_team()
    {
        $module = $this->admin->get_teams();
        echo json_encode($module);
    }

	public function kpi_view()
	{
		$this->load->view('_layouts/header');
		$this->load->view('admin/kpi_list');
		$this->load->view('_layouts/footer');

	}
    public function kpi_list() {

        $type = $this->input->post('type');
        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $order = $this->input->post('order');
        $search_value = $this->input->post('search')['value'];
        $order_column = $order[0]['column'];
        $order_dir = $order[0]['dir'];

        $kpi = $this->admin->getKPI($type, $start, $length, $order_column, $order_dir, $search_value);
        $data = [];
    
        foreach ($kpi as $row) {
            $data[] = [
                'title' => $row['title'],
                'description' => $row['description'],
                'type' => '<span class="badge rounded-pill bg-success-subtle text-success">'.$row['type'].'</span>',
                'action' => '
                    <div class="hstack gap-1">
                        <button type="button" class="btn btn-soft-secondary btn-label waves-effect waves-light btn-sm" onclick="edit_kpi('.$row['id'].') " data-bs-toggle="modal" data-bs-target="#edit_kpi"><iconify-icon icon="solar:pen-bold-duotone" class="label-icon align-bottom fs-16 me-2"></iconify-icon> Edit</button>
                        <button type="button" class="btn btn-soft-danger btn-label waves-effect waves-light btn-sm" onclick="delete_kpi('.$row['id'].')"><iconify-icon icon="solar:trash-bin-minimalistic-bold-duotone" class="label-icon align-bottom fs-16 me-2"></iconify-icon> Delete</button>

                    </div>
                '
                    
            ];
        }
        $total_records = $this->admin->getTotalKPI($type, $search_value);

        $output = [
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $total_records,
            "recordsFiltered" => $total_records,
            "data" => $data
        ];
        echo json_encode($output);
    }

    public function create_kpi() {

        $title = $this->input->post('title');
        $type = $this->input->post('type');
        $description = $this->input->post('description');
    
        $data = [
            'title' => $title,
            'type' => $type,
            'description' => $description,
            'date_added' => date('Y-m-d H:i:s'),
        ];
    
        $this->admin->insertKPI($data);

    }
    public function edit_kpi() {
        $id = $this->input->post('id');
        $row = $this->admin->get_kpi_data($id);
    
        echo '<div class="mb-3">
            <label for="title" class="col-form-label">Title:</label>
                <input type="text" class="form-control" id="ktitle" name="title" value="' . htmlspecialchars($row['title']) . '"/>
            </div>
            <div class="mb-3">
                <label for="type" class="col-form-label">Type:</label>
                <select class="form-select mb-3" name="type" id="type_edit">';
                    $selected = ($row['type']) ? 'selected' : '';
                    echo '<option value="' . htmlspecialchars($row['type']) . '" ' . $selected . '>' . htmlspecialchars($row['type']) . '</option>';
        echo '    </select>
            </div>
            <div class="mb-3">
                <label for="desc" class="col-form-label">Description:</label>
                <textarea class="form-control" id="description" style="height: 210px" name="description">' . htmlspecialchars($row['description']) . '</textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="submiteditedKPI(' . $id . ')">Submit</button>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
            </div>';

    }
    public function update_kpi(){

        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $type = $this->input->post('type');
        $description = $this->input->post('description');
    
        $data = [
            'title' => $title,
            'type' => $type,
            'description' => $description,
            'date_updated' => date('Y-m-d H:i:s'),
        ];
    
        $this->admin->updateKPI($data, $id);
    }

    public function delete_kpi(){
        $id = $this->input->post('id');
        $this->admin->deleteKPI($id);
    }


    public function module_view()
    {
        $this->load->view('_layouts/header');
		$this->load->view('admin/add_module');
		$this->load->view('_layouts/footer');

    }


    public function module_list() 
    {
        $typeofsystem = $this->input->post('typeofsystem');
        $team = $this->input->post('team');
        $company = $this->input->post('requested_to_co');
        $business_unit = $this->input->post('requested_to_bu');
        $department = $this->input->post('requested_to_dep');
        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $order = $this->input->post('order');
        $search_value = $this->input->post('search')['value'];
        $order_column = $order[0]['column'];
        $order_dir = $order[0]['dir'];
        
        $module = $this->admin->getModule($team,$company, $business_unit, $department, $typeofsystem, $start, $length, $order_column, $order_dir, $search_value);
        $data = [];
        
        foreach ($module as $row) {
            $action = '
                <div class="hstack gap-1 d-flex justify-content-center">
                    <button type="button" class="btn btn-soft-primary waves-effect waves-light btn-sm" onclick="view_submodule('.$row['mod_id'].')" data-bs-toggle="modal" data-bs-target="#submodule">
                        <iconify-icon icon="solar:checklist-minimalistic-bold-duotone" class="label-icon align-bottom fs-16 me-2"></iconify-icon>
                    </button>
                    <button type="button" class="btn btn-soft-info waves-effect waves-light btn-sm" onclick="edit_module('.$row['mod_id'].',\''.$row['requested_to_co'].'\',\''.$row['requested_to_bu'].'\',\''.$row['requested_to_dep'].'\',\''.$row['bu_name'].'\',\''.$row['date_request'].'\',\''.$row['belong_team'].'\')" data-bs-toggle="modal" data-bs-target="#edit_module">
                        <iconify-icon icon="solar:pen-bold-duotone" class="label-icon align-bottom fs-16 me-2"></iconify-icon>
                    </button>
                    <button type="button" class="btn btn-soft-danger waves-effect waves-light btn-sm" onclick="delete_module('.$row['mod_id'].')">
                        <iconify-icon icon="solar:trash-bin-minimalistic-bold-duotone" class="label-icon align-bottom fs-16 me-2"></iconify-icon>
                    </button>';
            if ($typeofsystem === 'new' && $row['status'] === 'Pending') {
                $action .= '
                    <button type="button" class="btn btn-soft-success waves-effect waves-light btn-sm" onclick="approve_new_module('.$row['mod_id'].')">
                        <iconify-icon icon="ri:thumb-up-fill" class="label-icon align-bottom fs-16 me-2"></iconify-icon>
                    </button>';
            }elseif($typeofsystem === 'new' && $row['status'] === 'Approve') {
                $action .= '
                    <button type="button" class="btn btn-soft-danger waves-effect waves-light btn-sm" onclick="recall_new_module('.$row['mod_id'].')">
                        <iconify-icon icon="tabler:refresh-alert" class="label-icon align-bottom fs-16 me-2"></iconify-icon> 
                    </button>';
            }
        
            $action .= '</div>';
            $status = '';
            $bu_name = '';
            if ($row['status'] === 'Approve') {
                $status = '<span class="badge bg-success">' . $row['status'] . '</span>';
            } elseif ($row['status'] === 'Pending') {
                $status = '<span class="badge bg-warning">' . $row['status'] . '</span>';
            }

            if($typeofsystem === 'new'){
                if ($row['bu_name'] !== null && $row['bu_name'] !== "") {
                    $bu_name = '<span class="badge bg-primary">'.ucwords(strtolower($row['bu_name'])).'</span>';
                }else{
                    $bu_name = '<span class="badge bg-info">N/A</span>';
                }
            }else{
                if ($row['bu_name'] !== null && $row['bu_name'] !== "") {
                    $bu_name = '<span class="badge bg-primary">'.ucwords(strtolower($row['bu_name'])).'</span>';
                }else{
                    $bu_name = '<span class="badge bg-info">N/A</span>';
                }
            }

            if($row['date_implem'] == null) {
                $date_implem = '<span class="badge bg-info">N/A</span>';      
            }else{
                $date_implem = date('F d, Y', strtotime($row['date_implem']));
            }
            if($row['date_request'] == null) {
                $date_request = '<span class="badge bg-info">N/A</span>';      
            }else{
                $date_request = date('F d, Y', strtotime($row['date_request']));
            }

            if($row['others'] == null || $row['others'] == '') {
                $others = '<span class="badge bg-info">N/A</span>';      
            }else{
                $others = $row['others'];
            }


            $data[] = [
                'mod_name'      => ucwords(strtolower($row['mod_name'])),
                'status'        => $status,
                'bu_name'       => $bu_name,
                'date_request'  => $date_request,
                'date_implem'   => $date_implem,
                'others'        => $others,
                'action'        => $action
            ];
        }
        
        $total_records = $this->admin->getTotalModule($team,$company, $business_unit, $department, $typeofsystem, $search_value);

        $output = [
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $total_records,
            "recordsFiltered" => $total_records,
            "data" => $data
        ];
        echo json_encode($output);
    }

    public function add_module(){
        $mod_name       = $this->input->post('mod_name');
        $mod_abbr       = $this->input->post('mod_abbr');
        $typeofsystem   = $this->input->post('typeofsystem');
        $date_request   = $this->input->post('date_request');
        $co             = $this->input->post('co');
        $bcode          = $this->input->post('bcode');
        $dep            = $this->input->post('dep');

        $company        = $this->input->post('company');
        $business_unit  = $this->input->post('business_unit');
        $department     = $this->input->post('department');

        $team           = $this->input->post('team');
        $other_details  = $this->input->post('other_details');
        if($date_request === "") {
            $date_request = null;
        }

        $data = [
            'mod_name'          => $mod_name,
            'mod_abbr'          => $mod_abbr,
            'typeofsystem'      => $typeofsystem,
            'requested_to_co'   => $co,
            'requested_to_bu'   => $bcode,
            'requested_to_dep'  => $dep,
            'bu_name'           => $company . ' | ' . $business_unit . ' | ' . $department,
            'date_request'      => $date_request,
            'belong_team'       => $team,
            'status'            => 'Approve',
            'date_added'        => date('Y-m-d H:i:s'),
            'others'            => $other_details
        ];
    
        $this->admin->insertModule($data);
    }

    public function edit_module() {
        $mod_id = $this->input->post('mod_id');
        $row = $this->admin->get_module_data($mod_id);
    
        echo '<div class="mb-3">
            <div class="mb-2">
                <label for="title" class="col-form-label">Team Name</label>
                <select id="edit_team_" class="form-select" aria-label="Team">
                    <option value="'.htmlspecialchars($row['belong_team']) . '">"'. $row['team_name'] .'"></option>
                </select>
            </div>
            <label for="title" class="col-form-label">Module Name:</label>
                <input type="text" class="form-control" id="edit_mod_name" name="mod_name" value="' . htmlspecialchars($row['mod_name']) . '"/>
                <input type="hidden" class="form-control" id="edit_mod_id" name="mod_id" value="' . htmlspecialchars($mod_id ). '"/>
            </div>
            <div class="mb-3">
            <label for="title" class="col-form-label">Module Abbreviation:</label>
                <input type="text" class="form-control" id="edit_mod_abbr" name="mod_abbr" value="' . htmlspecialchars($row['mod_abbr']) . '"/>
            </div>
            <div class="mb-2">
                <label class="col-form-label">Date Request:</label>
                    <div class="input-group">
                        <input type="date" id="edit_date_request" class="form-control" readonly="" placeholder="Select Date Request" data-provider="flatpickr" value="' . $row['date_request'] . '" />
                        <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                    </div>
            </div>

            <div class="mb-2">
                <label for="title" class="col-form-label">Company</label>
                <select id="edit_co" class="form-select">
                    <option value="'.htmlspecialchars($row['requested_to_co']) . '"></option>
                </select>
            </div>

            <div class="mb-2">
                <label for="title" class="col-form-label">Business Unit</label>
                <select id="edit_bu" class="form-select">
                    <option value="'.htmlspecialchars($row['requested_to_bu']) . '"></option>
                </select>
            </div>

            <div class="mb-2">
                <label for="title" class="col-form-label">Department</label>
                <select id="edit_dept" class="form-select">
                    <option value="'.htmlspecialchars($row['requested_to_dep']) . '"></option>
                </select>
            </div>

            <div class="mb-2">
                <label class="col-form-label">Date Implem:</label>
                    <div class="input-group">
                        <input type="date" id="edit_date_implem" class="form-control" readonly="" placeholder="Select Date Implemented" data-provider="flatpickr" value="' . $row['date_implem'] . '" />
                        <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                    </div>
            </div>
            <label for="title" class="col-form-label">Other Details:</label>
                <input type="text" class="form-control" id="edit_other_details" name="edit_other_details" value="' . htmlspecialchars($row['others']) . '"/>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="submiteditedmodule(' . $mod_id . ')">Submit</button>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
            </div>';
            ?>
            <script>
                flatpickr("#edit_date_request, #edit_date_implem");
                $('#edit_co').select2({ placeholder: 'Select Company', allowClear: true, minimumResultsForSearch: Infinity});
                $('#edit_bu').select2({ placeholder: 'Select Business Unit', allowClear: true, minimumResultsForSearch: Infinity});
                $('#edit_dept').select2({ placeholder: 'Select Department', allowClear: true, minimumResultsForSearch: Infinity});

                $('#edit_team_').select2({ placeholder: 'Select Team', allowClear: true, minimumResultsForSearch: Infinity });

                $.ajax({
                    url: '<?php echo base_url('get_team') ?>',
                    type: 'POST',
                    success: function (response) {
                        const teamData = JSON.parse(response);
                        const existingTeam = $('#edit_team_').val();
                        $('#edit_team_').empty().append('<option value="">Select Team Name</option>');
                        teamData.forEach(function (team) {
                            const selected = (team.team_id === existingTeam) ? 'selected' : '';
                            $('#edit_team_').append('<option value="' + team.team_id + '" ' + selected + '>' + team.team_name + '</option>');
                        });
                    }
                });
                $.ajax({
                    url: '<?php echo base_url('setup_location'); ?>',
                    type: 'POST',
                    success: function (response) {
                        companyData = JSON.parse(response);

                        const selectedCompany = $('#edit_co').val();
                        const selectedBusinessUnit = $('#edit_bu').val();
                        const selectedDepartment = $('#edit_dept').val();

                        $('#edit_co').empty().append('<option value="">Select Company</option>');
                        $('#edit_bu').empty().append('<option value="">Select Business Unit</option>').prop('disabled', true);
                        $('#edit_dept').empty().append('<option value="">Select Department</option>').prop('disabled', true);

                        companyData.forEach(function (company) {
                            const selected = (company.company_code === selectedCompany) ? 'selected' : '';
                            $('#edit_co').append('<option value="' + company.company_code + '" ' + selected + '>' + company.company + '</option>');
                        });

                        if (selectedCompany) {
                            loadBusinessUnits(selectedCompany, selectedBusinessUnit);
                        }
                        if (selectedBusinessUnit) {
                            loadDepartments(selectedCompany, selectedBusinessUnit, selectedDepartment);
                        }
                    },
                });

                $('#edit_co').change(function () {
                    var companyCode = $(this).val();
                    $('#edit_bu').empty().append('<option value="">Select Business Unit</option>').prop('disabled', true);
                    $('#edit_dept').empty().append('<option value="">Select Department</option>').prop('disabled', true);
                    if (companyCode) {
                        loadBusinessUnits(companyCode, '');
                    }
                });

                function loadBusinessUnits(companyCode, selectedBusinessUnit) {
                    var selectedCompany = companyData.find(company => company.company_code == companyCode);
                    if (selectedCompany && selectedCompany.business_unit) {
                        $('#edit_bu').empty().append('<option value="">Select Business Unit</option>');

                        selectedCompany.business_unit.forEach(function (bu) {
                            const selected = (bu.bunit_code === selectedBusinessUnit) ? 'selected' : '';
                            $('#edit_bu').append('<option value="' + bu.bunit_code + '" ' + selected + '>' + bu.business_unit + '</option>');
                        });

                        $('#edit_bu').prop('disabled', false);
                        if (selectedBusinessUnit) {
                            loadDepartments(companyCode, selectedBusinessUnit, '');
                        }
                    }
                }

                $('#edit_bu').change(function () {
                    var companyCode = $('#edit_co').val();
                    var businessUnitCode = $(this).val();
                    $('#edit_dept').empty().append('<option value="">Select Department</option>').prop('disabled', true);
                    if (businessUnitCode) {
                        loadDepartments(companyCode, businessUnitCode, '');
                    }
                });

                function loadDepartments(companyCode, businessUnitCode, selectedDepartment) {
                    var selectedCompany = companyData.find(company => company.company_code == companyCode);
                    if (selectedCompany && selectedCompany.department) {
                        $('#edit_dept').empty().append('<option value="">Select Department</option>');

                        selectedCompany.department
                            .filter(dept => dept.bunit_code == businessUnitCode)
                            .forEach(function (dept) {
                                const selected = (dept.dcode === selectedDepartment) ? 'selected' : '';
                                $('#edit_dept').append('<option value="' + dept.dcode + '" ' + selected + '>' + dept.dept_name + '</option>');
                            });

                        $('#edit_dept').prop('disabled', false);
                    }
                }


            </script>
            <?php
    }

    public function update_module(){
        $mod_id         = $this->input->post('mod_id');
        $mod_name       = $this->input->post('mod_name');
        $mod_abbr       = $this->input->post('mod_abbr');
        $co             = $this->input->post('co');
        $bcode          = $this->input->post('bcode');
        $dep            = $this->input->post('dep');

        $company        = $this->input->post('company');
        $business_unit  = $this->input->post('business_unit');
        $department     = $this->input->post('department');

        $date_request   = $this->input->post('date_request');
        $date_implem    = $this->input->post('date_implem');
        $team           = $this->input->post('team');
        $other_details  = $this->input->post('other_details');
    
        if($date_request === "") {
            $date_request = null;
        }else{
            $date_request = date('Y-m-d', strtotime($date_request));
        }
        if($date_implem === "") {
            $date_implem = null;
        }else{
            $date_implem = date('Y-m-d', strtotime($date_implem));
        }
        if($co === "") {
            $co = null;
        }

        if($bcode === "") {
            $bcode = null;
        }
        if($dep === "") {
            $dep = null;
        }

        $data = [
            'mod_name'          => $mod_name,
            'mod_abbr'          => $mod_abbr,
            'bu_name'           => $company . ' | ' . $business_unit . ' | ' . $department,
            'date_request'      => $date_request,
            'date_implem'       => $date_implem,
            'date_updated'      => date('Y-m-d H:i:s'),
            'belong_team'       => $team,
            'requested_to_co'   => $co,
            'requested_to_bu'   => $bcode,
            'requested_to_dep'  => $dep,
            'other'             => $other_details
        ];
    
        $this->admin->updateModule($data, $mod_id);
    }
    public function delete_module(){
        $mod_id = $this->input->post('mod_id');
        $this->admin->deleteModule($mod_id);
    }
    public function approve_new_module(){
        $mod_id = $this->input->post('id');
        $data = [
            'mod_id' => $mod_id,
            'status' => 'Approve'
        ];
        $this->admin->updateModuleStatus($data, $mod_id);
    }
    public function recall_new_module(){
        $mod_id = $this->input->post('id');
        $data = [
            'mod_id' => $mod_id,
            'status' => 'Pending'
        ];
        $this->admin->updateModuleStatus($data, $mod_id);
    }

    public function view_submodule()
    {
        $mod_id = $this->input->post('mod_id');
    
        echo '<div class="d-flex align-items-center float-end mb-3">
                <div class="flex-shrink-0">
                    <div class="d-flex flex-wrap gap-2">
                        <button class="btn btn-primary btn-sm waves-effect waves-light add-btn" data-bs-toggle="modal"
                            data-bs-target="#add_submodule" onclick="add_submodule_content('.$mod_id.')"><i class="ri-add-line align-bottom me-1"></i> Add Sub
                            Module </button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered" id="submodule_list">
                <thead class="table-primary">
                <tr>
                    <th>Submodule Name</th>
                    <th>Action</th>
                </tr>
                </thead>
            </table>';

            ?>
                <script>
                $(document).ready(function(){
                    var table = $('#submodule_list').DataTable({
                        "processing": true,
                        "serverSide": true,
                        'lengthMenu': [[8, 25, 50, 100, 10000], [8, 25, 50, 100, "Max"]],
                        'pageLength': 8,
                        "ajax": {
                            "url": "<?= base_url('submodule_list') ?>",
                            "dataType": "json",
                            "type": "POST",
                            "data": { 
                                "mod_id": <?= $mod_id ?>
                            }
                        },
                        "columns": [
                            { "data": 'sub_mod_name' },
                            { "data": 'action' },
                        ],
                        "columnDefs": [
                            { "className": "text-center", "targets": ['_all'] }
                        ],
                    });
                });
                </script>
            <?php

    }
    public function submodule_list(){
        $mod_id = $this->input->post('mod_id');

        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $order = $this->input->post('order');
        $search_value = $this->input->post('search')['value'];
        $order_column = $order[0]['column'];
        $order_dir = $order[0]['dir'];

        $module = $this->admin->getSubModule($mod_id, $start, $length, $order_column, $order_dir, $search_value);
        $data = [];
    
        foreach ($module as $row) {
            $data[] = [
                'sub_mod_name' => ucwords(strtolower($row['sub_mod_name'])),
                'action' => '
                    <div class="hstack gap-1 d-flex justify-content-center">
                        <button class="btn btn-sm btn-info edit-btn" onclick="edit_submodule_modal('.$row['sub_mod_id'].')" data-bs-toggle="modal" data-bs-target="#edit_submodule">
                            <iconify-icon icon="solar:pen-bold-duotone" class="label-icon align-bottom fs-16 me-2"></iconify-icon> Edit
                        </button>
                    </div>'

            ];
        }
        $total_records = $this->admin->getTotalSubModule($mod_id, $search_value);

        $output = [
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $total_records,
            "recordsFiltered" => $total_records,
            "data" => $data
        ];
        echo json_encode($output);

    }

    public function add_submodule_content(){
        $mod_id = $this->input->post('mod_id');

        echo '<div class="mb-3">
                    <label for="title" class="col-form-label">Sub Module Name:</label>
                    <input type="text" class="form-control" id="sub_mod_name">
                    <input type="hidden" class="form-control" id="mod_id" value="'.$mod_id.'">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="add_submodule()">Submit</button>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#submodule">Back To List</button>
                </div>';
    }

    public function insert_submodule(){
        $sub_mod_name = $this->input->post('sub_mod_name');
        $mod_id = $this->input->post('mod_id');
    
        $data = [
            'sub_mod_name' => $sub_mod_name,
            'mod_id' => $mod_id,
            'date_added' => date('Y-m-d H:i:s'),
        ];
    
        $this->admin->insertSubModule($data);
    }

    public function edit_submodule_content(){
        $sub_mod_id = $this->input->post('sub_mod_id');

        $row = $this->admin->get_submodule_data($sub_mod_id);

        echo '<div class="mb-3">
                    <label for="title" class="col-form-label">Sub Module Name:</label>
                    <input type="text" class="form-control" id="sub_mod_name" value="'.htmlspecialchars($row['sub_mod_name']).'">
                    <input type="hidden" class="form-control" id="sub_mod_id" value="'.$row['sub_mod_id'].'">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="submiteditedsubmodule('.$row['sub_mod_id'].')">Submit</button>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#submodule">Back To List</button>
                </div>';

    }
    public function update_submodule(){
        $sub_mod_id = $this->input->post('sub_mod_id');
        $sub_mod_name = $this->input->post('sub_mod_name');

        $data = [
            'sub_mod_name' => $sub_mod_name,
            'date_updated' => date('Y-m-d H:i:s'),
        ];
    
        $this->admin->updateSubModule($data, $sub_mod_id);
    }

    public function request()
	{
		$this->load->view('_layouts/header');
		$this->load->view('admin/request');
		$this->load->view('_layouts/footer');

	}
    

    public function typeofsystem_data() {
        $type = $this->input->post('type');
        $typeofsystem = $this->input->post('system');

        $team = $this->input->post('team');
        $module_id = $this->input->post('module');
        $sub_mod_id = $this->input->post('sub_module');


        $start = $this->input->post('start');
        $length = $this->input->post('length');
        $order = $this->input->post('order');
        $search_value = isset($this->input->post('search')['value']) ? $this->input->post('search')['value'] : '';
    
        $order_column = isset($order[0]['column']) ? $order[0]['column'] : 0;
        $order_dir = isset($order[0]['dir']) ? $order[0]['dir'] : 'asc';
    


        $data = [];
        if ($typeofsystem === 'current') {
            $current = $this->admin->get_current_system_data($team, $module_id, $sub_mod_id, $type, $typeofsystem, $start, $length, $order_column, $order_dir, $search_value);

            foreach ($current as $row) {
                $status = '';
                switch ($type) {
                    case 'ISR':
                        $status = $row['isr_status'];
                        break;
                    case 'ATTENDANCE':
                        $status = $row['att_status'];
                        break;
                    case 'MINUTES':
                        $status = $row['minute_status'];
                        break;
                    case 'WALKTHROUGH':
                        $status = $row['wt_status'];
                        break;
                    case 'FLOWCHART':
                        $status = $row['flowchart_status'];
                        break;
                    case 'DFD':
                        $status = $row['dfd_status'];
                        break;
                    case 'SYSTEM_PROPOSED':
                        $status = $row['proposed_status'];
                        break;
                    case 'GANTT_CHART':
                        $status = $row['gantt_status'];
                        break;
                    case 'LOCAL_TESTING':
                        $status = $row['local_status'];
                        break;
                    case 'UAT':
                        $status = $row['uat_status'];
                        break;
                    case 'LIVE_TESTING':
                        $status = $row['live_status'];
                        break;
                    case 'USER_GUIDE':
                        $status = $row['guide_status'];
                        break;
                    case 'MEMO':
                        $status = $row['memo_status'];
                        break;
                    case 'BUSINESS_ACCEPTANCE':
                        $status = $row['acceptance_status'];
                        break;
                }
                $status_badge = '';
                if ($status === 'Approve') {
                    $status_badge = '<span class="badge bg-success">' . $status . '</span>';
                } elseif ($status === 'Pending') {
                    $status_badge = '<span class="badge bg-warning">' . $status . '</span>';
                }


                $file_info = pathinfo($row['file_name']);
                $extension = strtolower($file_info['extension']);
 
                $file_link = '';

                switch ($extension) {
                    case 'jpg':
                    case 'jpeg':
                    case 'png':
                    case 'gif':
                        $file_link = base_url('open_image/' . $row['uploaded_to'] . '/' . $row['file_name']);
                        break;
                    case 'pdf':
                        $file_link = base_url('open_pdf/' . $row['uploaded_to'] . '/' . $row['file_name']);
                        break;
                    case 'csv':
                    case 'xlsx':
                        $file_link = base_url('open_csv/' . $row['uploaded_to'] . '/' . $row['file_name']);
                        break;
                    case 'txt':
                    case 'docx':
                        $file_link = base_url('open_txt/' . $row['uploaded_to'] . '/' . $row['file_name']);
                        break;
                    case 'mp3':
                    case 'wav':
                    case 'ogg':
                        $file_link = base_url('open_audio/' . $row['uploaded_to'] . '/' . $row['file_name']);
                        break;
                }

                $data[] = [
                    'team_name' => ucwords(strtolower($row['team_name'])),
                    'file_name' => '<a href="' . $file_link . '" target="_blank">' . $row['file_name'] . '</a>',
                    'mod_name'  => ucwords(strtolower($row['mod_name'])),
                    'uploaded_to' => $row['uploaded_to'],
                    'status' => $status_badge,
                    'action' => '
                        <div class="hstack gap-1 d-flex justify-content-center">' .
                        ($status === 'Pending' ? 
                            '<button type="button" class="btn btn-soft-primary waves-effect waves-light btn-sm" onclick="approved(' . $row['file_id'] . ', \'' . $type . '\', \'' . $typeofsystem . '\', \''.$row['mod_id']. '\')">' .
                            '<iconify-icon icon="ri:thumb-up-fill" class="align-bottom fs-16"></iconify-icon></button>'
                            : 
                            '<button type="button" class="btn btn-soft-danger waves-effect waves-light btn-sm" onclick="backtopending(' . $row['file_id'] . ', \'' . $type . '\', \'' . $typeofsystem . '\', \''.$row['mod_id']. '\')">' .
                            '<iconify-icon icon="tabler:refresh-alert" class="align-bottom fs-16"></iconify-icon></button>') .
                        '</div>'
                ];
            }
    
            $total_records = $this->admin->getTotalModuleCurrent($team, $module_id, $sub_mod_id, $search_value, $type);
        }


        if ($typeofsystem === 'new') {
            $new = $this->admin->get_new_system_data($team, $module_id, $sub_mod_id, $type, $typeofsystem, $start, $length, $order_column, $order_dir, $search_value);
            foreach ($new as $row) {
                $status = '';
                switch ($type) {
                    case 'ISR':
                        $status = $row['isr_status'];
                        break;
                    case 'ATTENDANCE':
                        $status = $row['att_status'];
                        break;
                    case 'MINUTES':
                        $status = $row['minute_status'];
                        break;
                    case 'WALKTHROUGH':
                        $status = $row['wt_status'];
                        break;
                    case 'FLOWCHART':
                        $status = $row['flowchart_status'];
                        break;
                    case 'DFD':
                        $status = $row['dfd_status'];
                        break;
                    case 'SYSTEM_PROPOSED':
                        $status = $row['proposed_status'];
                        break;
                    case 'LOCAL_TESTING':
                        $status = $row['local_status'];
                        break;
                    case 'UAT':
                        $status = $row['uat_status'];
                        break;
                    case 'LIVE_TESTING':
                        $status = $row['live_status'];
                        break;
                }

                $status_badge = '';
                if ($status === 'Approve') {
                    $status_badge = '<span class="badge bg-success">' . $status . '</span>';
                } elseif ($status === 'Pending') {
                    $status_badge = '<span class="badge bg-warning">' . $status . '</span>';
                }

                $file_info = pathinfo($row['file_name']);
                $extension = strtolower($file_info['extension']);
 
                $file_link = '';

                switch ($extension) {
                    case 'jpg':
                    case 'jpeg':
                    case 'png':
                    case 'gif':
                        $file_link = base_url('open_new_image/' . $row['uploaded_to'] . '/' . $row['file_name']);
                        break;
                    case 'pdf':
                        $file_link = base_url('open_new_pdf/' . $row['uploaded_to'] . '/' . $row['file_name']);
                        break;
                    case 'csv':
                    case 'xlsx':
                        $file_link = base_url('open_new_csv/' . $row['uploaded_to'] . '/' . $row['file_name']);
                        break;
                    case 'txt':
                    case 'docx':
                        $file_link = base_url('open_new_txt/' . $row['uploaded_to'] . '/' . $row['file_name']);
                        break;
                    case 'mp3':
                    case 'wav':
                    case 'ogg':
                        $file_link = base_url('open_new_audio/' . $row['uploaded_to'] . '/' . $row['file_name']);
                        break;
                }


                $data[] = [
                    'team_name' => ucwords(strtolower($row['team_name'])),
                    'file_name' => '<a href="' . $file_link . '" target="_blank">' . $row['file_name'] . '</a>',
                    'mod_name'  => ucwords(strtolower($row['mod_name'])),
                    'uploaded_to' => $row['uploaded_to'],
                    'status' => $status_badge,
                    'action' => '
                        <div class="hstack gap-1 d-flex justify-content-center">' .
                        ($status === 'Pending' ? 
                            '<button type="button" class="btn btn-soft-primary waves-effect waves-light btn-sm" onclick="approved(' . $row['file_id'] . ', \'' . $type . '\', \'' . $typeofsystem . '\', \''.$row['mod_id']. '\')">' .
                            '<iconify-icon icon="ri:thumb-up-fill" class=" align-bottom fs-16"></iconify-icon></button>'
                            : 
                            '<button type="button" class="btn btn-soft-danger waves-effect waves-light btn-sm" onclick="backtopending(' . $row['file_id'] . ', \'' . $type . '\', \'' . $typeofsystem . '\', \''.$row['mod_id']. '\')">' .
                            '<iconify-icon icon="tabler:refresh-alert" class=" align-bottom fs-16"></iconify-icon></button>') .
                        '</div>'
                ];
            }
    
            $total_records = $this->admin->getTotalModuleNew($team, $module_id, $sub_mod_id,$search_value, $type);
        }
    
        $output = [
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => $total_records,
            "recordsFiltered" => $total_records,
            "data" => $data
        ];
        echo json_encode($output);
    }
    public function get_directory_counts()
    {
        $directories = [
            'ISR', 'ATTENDANCE', 'MINUTES', 'WALKTHROUGH', 
            'FLOWCHART', 'DFD', 'SYSTEM_PROPOSED', 
            'GANTT_CHART', 'LOCAL_TESTING', 'UAT', 
            'LIVE_TESTING', 'USER_GUIDE', 'MEMO', 
            'BUSINESS_ACCEPTANCE'
        ];
    
        $counts = [];
        $team = $this->input->post('team');
        $mod_id = $this->input->post('module');
        $sub_mod_id = $this->input->post('sub_module');
        $typeofsystem = $this->input->post('typeofsystem');
    
        $totalCurrentPending = 0;
        $totalNewPending = 0;
    
        foreach ($directories as $directory) {
            $count = $this->admin->get_file_count_by_directory($directory, $mod_id, $sub_mod_id, $team, $typeofsystem);
            $counts[$directory] = $count;
    
            // Separate counts for current and new systems
            if ($typeofsystem === 'current') {
                $totalCurrentPending += $count;
            } elseif ($typeofsystem === 'new') {
                $totalNewPending += $count;
            }
        }
    
        // Add aggregated counts for the frontend
        $counts['current_pending'] = $totalCurrentPending;
        $counts['new_pending'] = $totalNewPending;
    
        echo json_encode($counts);
    }
    

    public function setup_module()
    {
        $type = $this->input->post('typeofsystem');
        $module = $this->admin->get_module($type);
        echo json_encode($module);
    }

    public function approved() {
        $file_id = $this->input->post('file_id');
        $type = $this->input->post('type');
        $typeofsystem = $this->input->post('typeofsystem');
        $mod_id = $this->input->post('mod_id');
    
        $status_field = '';
    
        if ($typeofsystem === 'current') {
            switch ($type) {
                case 'ISR':
                    $status_field = 'isr_status';
                    break;
                case 'ATTENDANCE':
                    $status_field = 'att_status';
                    break;
                case 'MINUTES':
                    $status_field = 'minute_status';
                    break;
                case 'WALKTHROUGH':
                    $status_field = 'wt_status';
                    break;
                case 'FLOWCHART':
                    $status_field = 'flowchart_status';
                    break;
                case 'DFD':
                    $status_field = 'dfd_status';
                    break;
                case 'SYSTEM_PROPOSED':
                    $status_field = 'proposed_status';
                    break;
                case 'GANTT_CHART':
                    $status_field = 'gantt_status';
                    break;
                case 'LOCAL_TESTING':
                    $status_field = 'local_status';
                    break;
                case 'UAT':
                    $status_field = 'uat_status';
                    break;
                case 'LIVE_TESTING':
                    $status_field = 'live_status';
                    break;
                case 'USER_GUIDE':
                    $status_field = 'guide_status';
                    break;
                case 'MEMO':
                    $status_field = 'memo_status';
                    break;
                case 'BUSINESS_ACCEPTANCE':
                    $status_field = 'acceptance_status';
                    break;
            }
        }
        if ($typeofsystem === 'new') {
            switch ($type) {
                case 'ISR':
                    $status_field = 'isr_status';
                    break;
                case 'ATTENDANCE':
                    $status_field = 'att_status';
                    break;
                case 'MINUTES':
                    $status_field = 'minute_status';
                    break;
                case 'WALKTHROUGH':
                    $status_field = 'wt_status';
                    break;
                case 'FLOWCHART':
                    $status_field = 'flowchart_status';
                    break;
                case 'DFD':
                    $status_field = 'dfd_status';
                    break;
                case 'SYSTEM_PROPOSED':
                    $status_field = 'proposed_status';
                    break;
                case 'LOCAL_TESTING':
                    $status_field = 'local_status';
                    break;
                case 'UAT':
                    $status_field = 'uat_status';
                    break;
                case 'LIVE_TESTING':
                    $status_field = 'live_status';
                    break;
            }
        }
    
        // if($type == 'LIVE_TESTING'){
        //     $this->db->set('implem_type', '1');
        //     $this->db->where('mod_id', $mod_id);
        //     $this->db->update('module');
        // }
        $update_data = [
            $status_field => 'Approve'
        ];
    
        $this->admin->approved($file_id, $update_data, $typeofsystem);  // Pass typeofsystem to the model
    }

    public function backtopending(){
        $file_id = $this->input->post('file_id');
        $type = $this->input->post('type');
        $typeofsystem = $this->input->post('typeofsystem');
        $mod_id = $this->input->post('mod_id');
        $status_field = '';
    
        if ($typeofsystem === 'current') {
            switch ($type) {
                case 'ISR':
                    $status_field = 'isr_status';
                    break;
                case 'ATTENDANCE':
                    $status_field = 'att_status';
                    break;
                case 'MINUTES':
                    $status_field = 'minute_status';
                    break;
                case 'WALKTHROUGH':
                    $status_field = 'wt_status';
                    break;
                case 'FLOWCHART':
                    $status_field = 'flowchart_status';
                    break;
                case 'DFD':
                    $status_field = 'dfd_status';
                    break;
                case 'SYSTEM_PROPOSED':
                    $status_field = 'proposed_status';
                    break;
                case 'GANTT_CHART':
                    $status_field = 'gantt_status';
                    break;
                case 'LOCAL_TESTING':
                    $status_field = 'local_status';
                    break;
                case 'UAT':
                    $status_field = 'uat_status';
                    break;
                case 'LIVE_TESTING':
                    $status_field = 'live_status';
                    break;
                case 'USER_GUIDE':
                    $status_field = 'guide_status';
                    break;
                case 'MEMO':
                    $status_field = 'memo_status';
                    break;
                case 'BUSINESS_ACCEPTANCE':
                    $status_field = 'acceptance_status';
                    break;
            }
        }
        if ($typeofsystem === 'new') {
            switch ($type) {
                case 'ISR':
                    $status_field = 'isr_status';
                    break;
                case 'ATTENDANCE':
                    $status_field = 'att_status';
                    break;
                case 'MINUTES':
                    $status_field = 'minute_status';
                    break;
                case 'WALKTHROUGH':
                    $status_field = 'wt_status';
                    break;
                case 'FLOWCHART':
                    $status_field = 'flowchart_status';
                    break;
                case 'DFD':
                    $status_field = 'dfd_status';
                    break;
                case 'SYSTEM_PROPOSED':
                    $status_field = 'proposed_status';
                    break;
                case 'LOCAL_TESTING':
                    $status_field = 'local_status';
                    break;
                case 'UAT':
                    $status_field = 'uat_status';
                    break;
                case 'LIVE_TESTING':
                    $status_field = 'live_status';
                    break;
            }
        }
    
        // if($type == 'LIVE_TESTING'){
        //     $this->db->set('implem_type', '0');
        //     $this->db->where('mod_id', $mod_id);
        //     $this->db->update('module');
        // }

        $update_data = [
            $status_field => 'Pending'
        ];
    
        $this->admin->backtopending($file_id, $update_data, $typeofsystem);
    }
    
    public function fetch_notifications()
    {
        $notifications = $this->admin->get_notifications();
        echo json_encode($notifications);
    }
    public function get_notification_count()
    {
        $count = $this->admin->get_pending_notification_count();
        echo json_encode(['count' => $count]);
    }


    public function fetch_messages()
    {
        $messages = $this->admin->get_messages();
    
        foreach ($messages as &$msg) {
            $emp = $this->workload->get_emp($msg['sender_id']);
            
            $msg['name'] = $emp['name'];
        }
    
        echo json_encode($messages);
    }
    
    
    public function get_messages_count()
    {
        $count = $this->admin->get_messages_count();
        echo json_encode(['count' => $count]);
    }


    
    
    
    
    public function generate_pdf()
    {
        $modules = $this->admin->get_print_module();
        
        // Initialize the PDF object
        $pdf = new PDF('P', PDF_UNIT, 'LETTER', true, 'UTF-8', false);
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' 001', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
        $pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));
        $pdf->SetMargins(10, 30, 10);
        $pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
        $pdf->AddPage();
        $pdf->setPrintFooter(true);
        $pdf->setFooterFont(Array('', '', 8));
    
        $pdf->SetFont('helvetica', '', 10);
    
        $html = '
        <table border="1" cellpadding="5" cellspacing="0" width="100%">
            <thead>
                <tr nobr="true">
                    <th style="text-align:center; width:33.4%;">MODULE</th>
                    <th style="text-align:center; width:33.3%;">TYPE</th>
                    <th style="text-align:center; width:33.3%;">SUBMODULE</th>
                </tr>
            </thead>
            <tbody>';
    
        foreach ($modules as $module) {
            $html .= '<tr nobr="true">';
            $html .= '<td width:33%;>' . $module->mod_name . '</td>';
            $html .= '<td width:34%;>' . $module->typeofsystem . '</td>';
    
            if (!empty($module->submodules)) {
                $submodules = '';
                foreach ($module->submodules as $submodule) {
                    $submodules .= $submodule->sub_mod_name . '<br>'; // Concatenate submodule names with line break
                }
                $html .= '<td width:33%;>' . $submodules . '</td>';
            } else {
                $html .= '<td width:34%;></td>';
            }
    
            $html .= '</tr>';
        }
    
        $html .= '</tbody></table>';
    
        // Output HTML content to the PDF
        $pdf->writeHTML($html, true, false, false, false, '');
    
        // Output the generated PDF
        $pdf->Output('MODULE|SUBMODULE.pdf', 'I');
    }
    
    
    
    
    
}


