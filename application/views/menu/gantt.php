<div class="modal fade" id="add_system_gantt" tabindex="-1" aria-labelledby="add_system_gantt" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" style="width: 655px">
        <div class="modal-content">
            <div class="modal-header bg-info-subtle">
                <h5 class="modal-title">GANTT | SETUP SYSTEM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="team_name" class="col-sm-3 col-form-label">Team:</label>
                    <input type="hidden" id="emp_id" class="form-control hidden">
                    <div class="col-sm-9">
                        <select class="form-select mb-3" id="team">
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="team_name" class="col-sm-3 col-form-label">Incharge:</label>
                    <div class="col-sm-9">
                        <select class="form-select mb-3" id="incharge">
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-3 col-form-label">System | Module:</label>
                    <div class="col-sm-9">
                        <select class="form-select mb-3" id="module">
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-3 col-form-label">Sub | Module:</label>
                    <div class="col-sm-9">
                        <select class="form-select mb-3" id="sub_module">
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-3 col-form-label">Description:</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="description" style="height: 70px"
                            placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Date Request:</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="date" id="date_request" class="form-control" readonly="" placeholder="Select Date Request" data-provider="flatpickr" data-altFormat="F j, Y" />
                            <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Date Parallel:</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="date" id="date_parallel" class="form-control" readonly="" placeholder="Select Date Parallel" data-provider="flatpickr" data-altFormat="F j, Y" />
                            <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Date Implementation:</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="date" id="date_implementation" class="form-control" readonly="" placeholder="Select Date Implementation" data-provider="flatpickr" data-altFormat="F j, Y" />
                            <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Date Start | Coding:</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="date" id="date_start" class="form-control" readonly="" placeholder="Select Date Start" data-provider="flatpickr" data-altFormat="F j, Y" />
                            <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Date End | Coding:</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="date" id="date_end" class="form-control" readonly="" placeholder="Select Date End" data-provider="flatpickr" data-altFormat="F j, Y" />
                            <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="submit_gantt()">Submit</button>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_system_gantt" tabindex="-1" aria-labelledby="edit_system_gantt" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" style="width: 655px;">
        <div class="modal-content">
            <div class="modal-header bg-info-subtle">
                <h5 class="modal-title">EDIT GANTT | SETUP SYSTEM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <label for="team_name" class="col-sm-3 col-form-label">Team:</label>
                    <input type="hidden" id="edit_emp_id" class="form-control hidden">
                    <input type="hidden" id="edit_id" class="form-control hidden">
                    <div class="col-sm-9">
                        <select class="form-select mb-3" id="edit_team">
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="team_name" class="col-sm-3 col-form-label">Incharge:</label>
                    <div class="col-sm-9">
                        <select class="form-select mb-3" id="edit_incharge">
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-3 col-form-label">System | Module:</label>
                    <div class="col-sm-9">
                        <select class="form-select mb-3" id="edit_module">
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-3 col-form-label">Sub | Module:</label>
                    <div class="col-sm-9">
                        <select class="form-select mb-3" id="edit_sub_module">
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="name" class="col-sm-3 col-form-label">Description:</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="edit_description" style="height: 70px" placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Date Request:</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="date" id="edit_date_request" class="form-control" readonly="" placeholder="Select Date Request" data-provider="flatpickr"  />
                            <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Date Parallel:</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="date" id="edit_date_parallel" class="form-control" readonly="" placeholder="Select Date Parallel" data-provider="flatpickr" />
                            <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Date Implementation:</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="date" id="edit_date_implementation" class="form-control" readonly="" placeholder="Select Date Implementation" data-provider="flatpickr" />
                            <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Date Start | Coding:</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="date" id="edit_date_start" class="form-control" readonly="" placeholder="Select Date Start" data-provider="flatpickr" />
                            <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Date End | Coding:</label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <input type="date" id="edit_date_end" class="form-control" readonly="" placeholder="Select Date End" data-provider="flatpickr" />
                            <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="update_gantt()">Submit</button>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Gantt Setup </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Gantt </a></li>
                        <li class="breadcrumb-item active">Index<i class="mdi mdi-alpha-x-circle:"></i></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0 flex-grow-1 fw-bold">LIST OF SCHEDULED</h5>
                        <div class="col-md-3">
                            <div class="d-flex align-items-center flex-shrink-0">
                                <select class="form-select" id="team_filter" style="width: 150px; height: auto;">
                                    <option value="">Select Team</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="d-flex align-items-center flex-shrink-0 mx-2">
                                <select class="form-select" id="module_filter" style="width: 150px; height: auto;">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-shrink-0 ms-2">
                            <button class="btn btn-primary waves-effect waves-light add-btn" data-bs-toggle="modal"
                                data-bs-target="#add_system_gantt">
                                <i class="ri-add-line align-bottom me-1"></i> Add Gantt | System
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="dropdown">
                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="columnDropdown" data-bs-toggle="dropdown" aria-expanded="false"> Column Visibility</button>
                        <ul class="dropdown-menu" aria-labelledby="columnDropdown" id="columnSelectorDropdown" data-simplebar style="max-height: 300px;">
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="0" checked> Team</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="1" checked> Incharge</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="2" checked> Module</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="3" checked> Sub Module</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="4" checked> Description</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="5" checked> Date Requested</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="6" checked> Date Parallel</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="7" checked> Date Implementation</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="8" checked> Date Start</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="9" checked> Date End</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="10" checked> Action</label></li>
                        </ul>
                        <button id="generate_report" class="btn btn-danger btn-sm ms-1">Generate Report</button>
                    </div>
                    <div class="tab-content">
                        <div class="mt-2 tab-pane active" id="System Analyst" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="gantt_list">
                                    <thead class="table-info text-center text-uppercase">
                                        <tr>
                                            <th>Team</th>
                                            <th>Incharge</th>
                                            <th>Module</th>
                                            <th>Sub Module</th>
                                            <th>Description</th>
                                            <th>Date Requested</th>
                                            <th>Date Parallel</th>
                                            <th>Date Implementation</th>
                                            <th>Date Start Coding</th>
                                            <th>Date End Coding</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $('#team_filter, #module_filter').change(function () {
        $('#gantt_list').DataTable().ajax.reload();
    });

   var table = $('#gantt_list').DataTable({
        "processing": true,
        "serverSide": true,
        "destroy": true,
        "stateSave": true,
        "scrollY": "400px",
        "scrollX": true,
        "scrollCollapse": true,
        "lengthMenu": [[10, 25, 50, 100, 10000], [10, 25, 50, 100, "Max"]],
        "pageLength": 10,
        "ajax": {
            "url": "<?php echo base_url('gantt_list'); ?>",
            "type": "POST",
            "data": function(d) {
                d.team_id = $('#team_filter').val();
                d.module  = $('#module_filter').val();
            }
        },
        "columns": [
            { "data": "team_name" },
            { "data": "emp_name" },
            { "data": "mod_name" },
            { "data": "sub_mod_name" },
            { "data": "desc" },
            { "data": 'date_req'},
            { "data": 'date_parallel'},
            { "data": 'date_implem'},
            { "data": 'date_start'},
            { "data": 'date_end'},
            { "data": "action" }
        ],
        "columnDefs": [
            { "className": "text-center", "targets": '_all' }
        ],
    });
    $('#columnSelectorDropdown').on('click', function (e) {
        e.stopPropagation();
    });
    $('#columnSelectorDropdown .column-toggle').each(function () {
        let columnIdx = $(this).val();
        $(this).prop('checked', table.column(columnIdx).visible());
    });

    $('#columnSelectorDropdown .column-toggle').on('change', function () {
        let columnIdx = $(this).val();
        let isChecked = $(this).prop('checked');
        table.column(columnIdx).visible(isChecked);
    });
    $('#generate_report').on('click', function () {
        let visibleColumns = [];
        let visibleHeaders = [];
        let desc = -1;
        table.columns().every(function (index) {
            let headerText = this.header().textContent.trim();
            if (this.visible() && headerText.toLowerCase() !== 'action') {
                visibleColumns.push(index);
                visibleHeaders.push(headerText);
                if (headerText.toLowerCase() === 'description') {
                    desc = visibleColumns.length - 1;
                }
            }
        });

        let rowData = table.rows({ filter: 'applied' }).data().toArray();
        let reportData = rowData.map(row => visibleColumns.map(index => row[table.column(index).dataSrc()]));
        let printContent = `
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            th, td {
                padding: 10px;
                text-align: left;
                border: 1px solid #ddd;
                word-wrap: break-word;
                max-width: 200px;
                white-space: normal;
            }
            .description {
                width: 300px;
            }
        </style>
        <div style="text-align: center; margin-bottom: 20px;"><h4>GANTT REPORT</h4></div>
        <table>
            <thead>
                <tr>${visibleHeaders.map((header, index) => 
                    `<th class="${index === desc ? 'description' : ''}">${header}</th>`
                ).join('')}</tr>
            </thead>
            <tbody>
                ${reportData.map((row, rowIndex) => 
                    `<tr>${row.map((cell, cellIndex) => 
                        `<td class="${cellIndex === desc ? 'description' : ''}">${cell}</td>`
                    ).join('')}</tr>`
                ).join('')}
            </tbody>
        </table>`;
        let printWindow = window.open('', '', '');
        printWindow.document.title = 'Gantt Report - PDF Export';
        printWindow.document.write(printContent);
        printWindow.document.close();
        printWindow.print();
    });


    $(document).ready(function () {
        $('#team, #team_filter, #edit_team').select2({ placeholder: 'Select Team', allowClear: true, minimumResultsForSearch: Infinity });
        $('#incharge, #edit_incharge').select2({ placeholder: 'Select Incharge', allowClear: true, minimumResultsForSearch: Infinity });
        $('#module_filter, #module, #edit_module').select2({ placeholder: 'Module Name | System', allowClear: true, minimumResultsForSearch: Infinity });
        $('#sub_module, #edit_sub_module').select2({ placeholder: 'Sub Module Name', allowClear: true, minimumResultsForSearch: Infinity });
    });

    $.ajax({
        url: '<?php echo base_url('get_team') ?>',
        type: 'POST',
        success: function (response) {
            teamData = JSON.parse(response);
            $('#team, #team_filter, #edit_team').empty().append('<option value="">Select Team Name</option>');
            teamData.forEach(function (team) {
                $('#team, #team_filter, #edit_team').append('<option value="' + team.team_id + '">' + team.team_name + '</option>');
            });
        }
    });
    let membersData = [];
    $('#incharge, #edit_incharge').prop('disabled', true);

    $('#team, #edit_team').change(function () {
        var team_id = $(this).val();
        $.ajax({
            url: '<?php echo base_url('setup_workload') ?>',
            type: 'POST',
            data: { team_id: team_id },
            success: function (response) {
                membersData = JSON.parse(response);
                $('#incharge, #edit_incharge').empty().append('<option value="">Select Name</option>');
                $('#incharge, #edit_incharge').prop('disabled', true);

                if (membersData.length > 0) {
                    membersData.forEach(function (member) {
                        $('#incharge, #edit_incharge').append('<option value="' + member.emp_id + '">' + member.emp_name + '</option>');
                    });

                    $('#incharge, #edit_incharge').prop('disabled', false);
                }
            }
        });
    });
    $('#incharge, #edit_incharge').change(function () {
        var selectedEmpId = $(this).val();
        var selectedMember = membersData.find(member => member.emp_id == selectedEmpId);

        if (selectedMember) {
            $('#emp_id, #edit_emp_id').val(selectedEmpId);
        } else {
            $('#emp_id, #edit_emp_id').val('');
        }
    });

    loadModule();
    function loadModule() {
        $.ajax({
            url: '<?php echo base_url('setup_module') ?>',
            type: 'POST',
            success: function (response) {
                moduleData = JSON.parse(response);
                $('#module, #edit_module').empty().append('<option value="">Select Module Name</option>');
                $('#sub_module, #edit_sub_module').empty().append('<option value="">Select Sub Module</option>');
                $('#sub_module, #edit_sub_module').prop('disabled', true);

                moduleData.forEach(function (module) {
                    $('#module_filter, #module, #edit_module').append('<option value="' + module.mod_id + '">' + module.mod_name + '</option>');
                });
            }
        });
    }


    $('#module, #edit_module').change(function () {
        var selectedModuleId = $(this).val();
        $('#sub_module, #edit_sub_module').empty().append('<option value="">Select Sub Module</option>');
        $('#sub_module, #edit_sub_module').prop('disabled', true);

        var selectedModule = moduleData.find(module => module.mod_id == selectedModuleId);

        if (selectedModule && selectedModule.submodules.length > 0) {
            selectedModule.submodules.forEach(function (subModule) {
                $('#sub_module, #edit_sub_module').append('<option value="' + subModule.sub_mod_id + '">' + subModule.sub_mod_name + '</option>');
            });
            $('#sub_module, #edit_sub_module').prop('disabled', false);
        }
    });

    $('#edit_system_gantt').on('hidden.bs.modal', function () {
        $('#edit_emp_id').val('');
        $('#edit_team').val('').trigger('change');
        $('#edit_incharge').val('').trigger('change');
        $('#edit_module').val('').trigger('change');
        $('#edit_sub_module').val('').trigger('change');
        $('#edit_description').val('');
        $('#edit_date_request').val('');
        $('#edit_date_parallel').val('');
        $('#edit_date_implementation').val('');
        $('#edit_date_start').val('');
        $('#edit_date_end').val('');
    });
    function submit_gantt() {
        var team = $('#team').val();
        var team_name = $('#team option:selected').text();
        var module_name = $('#module option:selected').text();
        var emp_id = $('#emp_id').val();
        var emp_name = $('#incharge option:selected').text();
        var module = $('#module').val();
        var sub_module = $('#sub_module').val();
        var description = $('#description').val();
        var date_request = $('#date_request').val();
        var date_parallel = $('#date_parallel').val();
        var date_implementation = $('#date_implementation').val();
        var date_start = $('#date_start').val();
        var date_end = $('#date_end').val();

        if (team == '' || incharge == '' || module == '' || description == '' || date_request == '' || date_implementation == '' || date_start == '' || date_end == '') {
            Toastify({
                text: `Please fill up the required fields.`,
                duration: 5000,
                gravity: "top",
                position: "left",
                stopOnFocus: true,
                close: true,
                style: {
                    background: "linear-gradient(to right, #ff5f6d, #ffc371)",
                },
            }).showToast();
            if (description === "") {
                $('#description').addClass('is-invalid');
            }
            if (date_request === "") {
                $('#date_request').addClass('is-invalid');
            }
            if (date_parallel === "") {
                $('#date_parallel').addClass('is-invalid');
            }
            if (date_implementation === "") {
                $('#date_implementation').addClass('is-invalid');
            }
            if (date_start === "") {
                $('#date_start').addClass('is-invalid');
            }
            if (date_end === "") {
                $('#date_end').addClass('is-invalid');
            }
            return;
        }
        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to add this data?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, add it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_url('submit_gantt') ?>',
                    type: 'POST',
                    data: {
                        team: team,
                        team_name: team_name,
                        module_name: module_name,
                        emp_name: emp_name,
                        emp_id: emp_id,
                        module: module,
                        sub_module: sub_module,
                        description: description,
                        date_request: date_request,
                        date_parallel: date_parallel,
                        date_implementation: date_implementation,
                        date_start: date_start,
                        date_end: date_end
                    },
                    success: function (response) {
                        Toastify({
                            text: `Gantt data added successfully.`,
                            duration: 5000,
                            gravity: "top",
                            position: "left",
                            stopOnFocus: true,
                            close: true,
                            style: {
                                background: "linear-gradient(to right, #ff5f6d, #ffc371)",
                            },
                        }).showToast();
                        $('#add_system_gantt').modal('hide');
                        var table = $('#gantt_list').DataTable();
                        var currentPage = table.page();

                        table.ajax.reload(function () {
                            table.page(currentPage).draw(false);
                        }, false);
                    }
                });
            }
        });
    }
    function edit_gantt(id) {
        $.ajax({
            url: '<?php echo base_url('edit_gantt_content') ?>',
            type: 'POST',
            data: { id: id },
            success: function (response) {
                let data = JSON.parse(response);

                $('#edit_team').val(data.team_id).trigger('change');
                $('#edit_id').val(data.id);
                $('#edit_system_gantt').modal('show');
                setTimeout(function () {
                    $('#edit_emp_id').val(data.emp_id);
                    $('#edit_incharge').val(data.emp_id).trigger('change');
                    $('#edit_module').val(data.mod_id).trigger('change');
                    $('#edit_sub_module').val(data.sub_mod_id).trigger('change');
                    $('#edit_description').val(data.desc);
                    $('#edit_date_request').val(data.date_req);
                    $('#edit_date_parallel').val(data.date_parallel);
                    $('#edit_date_implementation').val(data.date_implem);
                    $('#edit_date_start').val(data.date_start);
                    $('#edit_date_end').val(data.date_end);
                }, 800);
            }
        });
    }
    function update_gantt() {
        var id              = $('#edit_id').val();
        var team            = $('#edit_team').val();
        var team_name       = $('#edit_team option:selected').text();
        var module_name     = $('#edit_module option:selected').text();
        var emp_id          = $('#edit_emp_id').val();
        var emp_name        = $('#edit_incharge option:selected').text();
        var module          = $('#edit_module').val();
        var sub_module      = $('#edit_sub_module').val();
        var description     = $('#edit_description').val();
        var date_request    = $('#edit_date_request').val();
        var date_parallel   = $('#edit_date_parallel').val();
        var date_implem     = $('#edit_date_implementation').val();
        var date_start      = $('#edit_date_start').val();
        var date_end        = $('#edit_date_end').val();

        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to update this data?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, update it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_url('update_gantt') ?>',
                    type: 'POST',
                    data: {
                        id: id,
                        team: team,
                        team_name: team_name,
                        module_name: module_name,
                        emp_name: emp_name,
                        emp_id: emp_id,
                        module: module,
                        sub_module: sub_module,
                        description: description,
                        date_request: date_request,
                        date_parallel: date_parallel,
                        date_implementation: date_implem,
                        date_start: date_start,
                        date_end: date_end

                    },
                    success: function (response) {
                        Toastify({
                            text: `Gantt data updated successfully.`,
                            duration: 5000,
                            gravity: "top",
                            position: "left",
                            stopOnFocus: true,
                            close: true,
                            style: {
                                background: "linear-gradient(to right, #ff5f6d, #ffc371)",
                            },
                        }).showToast();
                        $('#edit_system_gantt').modal('hide');
                        var table = $('#gantt_list').DataTable();
                        var currentPage = table.page();

                        table.ajax.reload(function () {
                            table.page(currentPage).draw(false);
                        }, false);
                    }
                });
            }
        });
    }
    function delete_gantt(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to delete this data?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_url('delete_gantt') ?>',
                    type: 'POST',
                    data: { id: id },
                    success: function (response) {
                        Toastify({
                            text: `Gantt data deleted successfully.`,
                            duration: 5000,
                            gravity: "top",
                            position: "left",
                            stopOnFocus: true,
                            close: true,
                            style: {
                                background: "linear-gradient(to right, #ff5f6d, #ffc371)",
                            },
                        }).showToast();
                        var table = $('#gantt_list').DataTable();
                        var currentPage = table.page();

                        table.ajax.reload(function () {
                            table.page(currentPage).draw(false);
                        }, false);
                    },
                });
            }
        });
    }

</script>