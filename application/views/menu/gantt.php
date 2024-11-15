<div class="modal fade" id="add_system_gantt" tabindex="-1" aria-labelledby="add_system_gantt" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" style="width: 655px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">GANTT | SETUP SYSTEM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
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
                    <label for="module" class="col-sm-3 col-form-label">Date Request:</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="date_request" data-provider="flatpickr"
                            placeholder="MM/DD/YYYY">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sub_module" class="col-sm-3 col-form-label">Date Parallel:</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="date_parallel" data-provider="flatpickr"
                            placeholder="MM/DD/YYYY">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-sm-3 col-form-label">Date Implementation</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="date_implementation" data-provider="flatpickr"
                            placeholder="MM/DD/YYYY">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-sm-3 col-form-label">Date Start | Coding</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="date_start" data-provider="flatpickr"
                            placeholder="MM/DD/YYYY">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-sm-3 col-form-label">Date End | Coding</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="date_end" data-provider="flatpickr"
                            placeholder="MM/DD/YYYY">
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
            <div class="modal-header">
                <h5 class="modal-title">EDIT GANTT | SETUP SYSTEM</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
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
                    <label for="module" class="col-sm-3 col-form-label">Date Request:</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="edit_date_request" data-provider="flatpickr" placeholder="MM/DD/YYYY">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sub_module" class="col-sm-3 col-form-label">Date Parallel:</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="edit_date_parallel" data-provider="flatpickr" placeholder="MM/DD/YYYY">

                    </div>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-sm-3 col-form-label">Date Implementation</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="edit_date_implementation" data-provider="flatpickr" placeholder="MM/DD/YYYY">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-sm-3 col-form-label">Date Start | Coding</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="edit_date_start" data-provider="flatpickr" placeholder="MM/DD/YYYY">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="title" class="col-sm-3 col-form-label">Date End | Coding</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="edit_date_end" data-provider="flatpickr" placeholder="MM/DD/YYYY">
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
                        <h5 class="card-title mb-0 flex-grow-1">LIST OF SCHEDULED</h5>
                        <div class="col-md-3">
                            <div class="d-flex align-items-center flex-shrink-0">
                                <select class="form-select" id="team_filter" style="width: 150px; height: auto;">
                                    <option value="">Select Team</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-shrink-0 ms-2">
                            <button class="btn btn-primary waves-effect waves-light add-btn" data-bs-toggle="modal"
                                data-bs-target="#add_system_gantt">
                                <i class="ri-add-line align-bottom me-1"></i> Add System
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="tab-content">
                        <div class="mt-2 tab-pane active" id="System Analyst" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover compact" id="gantt_list">
                                    <thead class="table-primary text-center">
                                        <tr>
                                            <th>Incharge</th>
                                            <th>Module</th>
                                            <th>Sub Module</th>
                                            <th>Description</th>
                                            <th>Date Requested</th>
                                            <th>Date Parallel</th>
                                            <th>Date Implementation</th>
                                            <th>Date Start</th>
                                            <th>Date End</th>
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
    $('#team_filter').change(function () {
        $('#gantt_list').DataTable().ajax.reload();
    });

    $('#gantt_list').DataTable({
        "processing": true,
        "serverSide": true,
        "destroy": true,
        "stateSave": true,
        "ajax": {
            "url": "<?php echo base_url('gantt_list'); ?>",
            "type": "POST",
            "data": function(d) {
                d.team_id = $('#team_filter').val();
            }
        },
        "columns": [
            { "data": "emp_name" },
            { "data": "mod_name" },
            { "data": "sub_mod_name" },
            { "data": "desc" },
            { "data": 'date_req',
                "render": function(data, type, row) {
                    if (data) {
                        var date = new Date(data);
                        return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric'
                        });
                    }
                }
            },
            { "data": 'date_parallel',
                "render": function(data, type, row) {
                    if (data) {
                        var date = new Date(data);
                        return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric'
                        });
                    }
                }
            },
            { "data": 'date_implem',
                "render": function(data, type, row) {
                    if (data) {
                        var date = new Date(data);
                        return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric'
                        });
                    }
                }
            },
            { "data": 'date_start',
                "render": function(data, type, row) {
                    if (data) {
                        var date = new Date(data);
                        return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric'
                        });
                    }
                }
            },
            { "data": 'date_end',
                "render": function(data, type, row) {
                    if (data) {
                        var date = new Date(data);
                        return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric'
                        });
                    }
                }
            },
            { "data": "action" }
        ],
        "columnDefs": [
            { "className": "text-center", "targets": '_all' }
        ]
    });


    $(document).ready(function () {
        $('#team, #team_filter, #edit_team').select2({ placeholder: 'Select Team', allowClear: true, minimumResultsForSearch: Infinity });
        $('#incharge, #edit_incharge').select2({ placeholder: 'Select Incharge', allowClear: true, minimumResultsForSearch: Infinity });
        $('#module, #edit_module').select2({ placeholder: 'Module Name | System', allowClear: true, minimumResultsForSearch: Infinity });
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
                    $('#module, #edit_module').append('<option value="' + module.mod_id + '">' + module.mod_name + '</option>');
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

        if (team == '' || incharge == '' || module == '' || sub_module == '' || description == '' || date_request == '' || date_parallel == '' || date_implementation == '' || date_start == '' || date_end == '') {
            Swal.fire({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                icon: 'error',
                title: 'Please fill up fields!',
            });
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
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            icon: 'success',
                            title: 'Gantt data added successfully',
                        });
                        $('#add_system_gantt').modal('hide');
                        $('#gantt_list').DataTable().ajax.reload();
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
            text: 'You want to update this module?',
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
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            icon: 'success',
                            title: 'Gantt data updated successfully',
                        });
                        $('#edit_system_gantt').modal('hide');
                        $('#gantt_list').DataTable().ajax.reload();
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
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            icon: 'success',
                            title: 'Gantt data deleted successfully',
                        });
                        $('#gantt_list').DataTable().ajax.reload();
                    },
                });
            }
        });
    }

</script>