<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Request </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item">
                            <ts href="javascript: void(0);">Requests </ts>
                        </li>
                        <li class="breadcrumb-item active">Index<i class="mdi mdi-alpha-x-circle:"></i></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-pills animation-nav nav-justified gap-2 mb-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-light active typeofsystem fw-bold"
                                    data-bs-toggle="tab" id="current" role="tab">
                                    CURRENT SYSTEM | MODULE
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-light typeofsystem fw-bold" data-bs-toggle="tab"
                                    id="new" role="tab">
                                    NEW SYSTEM | MODULE
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="col-xxl-12">
                            <div class="row">
                                <div class="col-xxl-3">
                                    <div class="nav nav-pills flex-column nav-pills-tab custom-verti-nav-pills text-center"
                                        role="tablist" aria-orientation="vertical" data-simplebar=""
                                        style="max-height: 450px;">
                                        <a href="#!" id="ISR" class="fw-bold nav-link active type" data-bs-toggle="pill" role="tab">ISR</a>
                                        <a href="#!" id="ATTENDANCE" class="fw-bold nav-link type" data-bs-toggle="pill" role="tab">ATTENDANCE</a>
                                        <a href="#!" id="MINUTES" class="fw-bold nav-link type" data-bs-toggle="pill" role="tab">MINUTES</a>
                                        <a href="#!" id="WALKTHROUGH" class="fw-bold nav-link type" data-bs-toggle="pill" role="tab">WALKTHROUGH</a>
                                        <a href="#!" id="FLOWCHART" class="fw-bold nav-link type" data-bs-toggle="pill" role="tab">FLOWCHART</a>
                                        <a href="#!" id="DFD" class="fw-bold nav-link type" data-bs-toggle="pill" role="tab">DFD</a>
                                        <a href="#!" id="SYSTEM_PROPOSED" class="fw-bold nav-link type" data-bs-toggle="pill" role="tab">SYSTEM PROPOSED</a>
                                        <a href="#!" id="GANTT_CHART" class="fw-bold nav-link type" data-bs-toggle="pill" role="tab">GANTT CHART</a>
                                        <a href="#!" id="LOCAL_TESTING" class="fw-bold nav-link type" data-bs-toggle="pill" role="tab">LOCAL TESTING</a>
                                        <a href="#!" id="UAT" class="fw-bold nav-link type" data-bs-toggle="pill" role="tab">UAT</a>
                                        <a href="#!" id="LIVE_TESTING" class="fw-bold nav-link type" data-bs-toggle="pill" role="tab">LIVE TESTING</a>
                                        <a href="#!" id="USER_GUIDE" class="fw-bold nav-link type" data-bs-toggle="pill" role="tab">USER GUIDE</a>
                                        <a href="#!" id="MEMO" class="fw-bold nav-link type" data-bs-toggle="pill" role="tab">MEMO</a>
                                        <a href="#!" id="BUSINESS_ACCEPTANCE" class="fw-bold nav-link type" data-bs-toggle="pill" role="tab">BUSINESS ACCEPTANCE</a>
                                    </div>
                                </div>
                                <div class="col-xxl-9">
                                    <div class="d-flex gap-2 mb-2">
                                        <select class="form-select" id="team" name="team">
                                            <option value=""></option>
                                        </select>
                                        <select class="form-select" id="module" name="module">
                                            <option value="">Module</option>
                                        </select>
                                        <select class="form-select" id="sub_module" name="sub_module">
                                            <option value="">Sub Module</option>
                                        </select>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tab-content mt-3">
                                                <div class="tab-pane fade active show" id="current" role="tabpanel">
                                                    <div class="d-flex mb-4">
                                                        <div class="flex-grow-1 ms-3" data-simplebar="" style="max-height: 450px;">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-hover" id="typeofsystem_table" style="max-width: 100%;">
                                                                    <thead class="table-primary text-center">
                                                                        <tr>
                                                                            <th>TEAM</th>
                                                                            <th>FILENAME</th>
                                                                            <th>UPLOADED TO</th>
                                                                            <th>STATUS</th>
                                                                            <th>ACTION</th>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#team').select2({ placeholder: 'Select Team', allowClear: true });
        $('#module').select2({ placeholder: 'Module Name', allowClear: true });
        $('#sub_module').select2({ placeholder: 'Sub Module Name', allowClear: true });
    });

    $.ajax({
        url: '<?php echo base_url('get_team') ?>',
        type: 'POST',
        success: function (response) {
            teamData = JSON.parse(response);
            $('#team').empty().append('<option value="">Select Team Name</option>');
            teamData.forEach(function (team) {
                $('#team').append('<option value="' + team.team_id + '">' + team.team_name + '</option>');
            });
        }
    });

    $.ajax({
        url: '<?php echo base_url('setup_module') ?>',
        type: 'POST',
        success: function (response) {
            moduleData = JSON.parse(response);
            $('#module').empty().append('<option value="">Select Module Name</option>');
            $('#sub_module').empty().append('<option value="">Select Sub Module</option>');
            $('#sub_module').prop('disabled', true);

            moduleData.forEach(function (module) {
                $('#module').append('<option value="' + module.mod_id + '">' + module.mod_name + '</option>');
            });
        }
    });

    $('#module').change(function () {
        var selectedModuleId = $(this).val();
        $('#sub_module').empty().append('<option value="">Select Sub Module</option>');
        $('#sub_module').prop('disabled', true);

        var selectedModule = moduleData.find(module => module.mod_id == selectedModuleId);

        if (selectedModule && selectedModule.submodules.length > 0) {
            $('#sub_module').prop('disabled', false);
            selectedModule.submodules.forEach(function (subModule) {
                $('#sub_module').append('<option value="' + subModule.sub_mod_id + '">' + subModule.sub_mod_name + '</option>');
            });
        }
    });

    $('#team, #module, #sub_module').change(function () {
        $('#typeofsystem_table').DataTable().ajax.reload();
    });

    var typeofsystem = "current";
    var type = "ISR";
    var table;
    $('#SYSTEM_PROPOSED').closest('a').show();
    $('#GANTT_CHART').closest('a').show();

    load_system_content(typeofsystem, type);

    $("a.typeofsystem").click(function () {
        $("a.typeofsystem").removeClass('btn-primary');
        $(this).addClass('btn-primary');
        typeofsystem = this.id;

        if (typeofsystem == 'new') {
            $('#SYSTEM_PROPOSED').closest('a').show();
            $('#GANTT_CHART').closest('a').hide();
            $('#USER_GUIDE').closest('a').hide();
            $('#MEMO').closest('a').hide();
            $('#BUSINESS_ACCEPTANCE').closest('a').hide();
        }

        if (typeofsystem == 'current') {
            $('#SYSTEM_PROPOSED').closest('a').hide();
            $('#GANTT_CHART').closest('a').show();
            $('#USER_GUIDE').closest('a').show();
            $('#MEMO').closest('a').show();
            $('#BUSINESS_ACCEPTANCE').closest('a').show();
        }

        load_system_content(typeofsystem, type);
    });

    
    $("a.type").click(function () {
        $("a.type").removeClass('btn-primary');
        $(this).addClass('btn-primary');
        type = this.id;
        load_system_content(typeofsystem, type);
    });
    function load_system_content(typeofsystem, type) {

        table = $('#typeofsystem_table').DataTable({
            processing: true,
            serverSide: true,
            stateSave: true,
            destroy: true,
            responsive: true,
            ajax: {
                url: '<?php echo base_url('typeofsystem_data'); ?>',
                type: 'POST',
                data: function (d) {
                    d.type = type;
                    d.system = typeofsystem;
                    d.team = $('#team').val();
                    d.module = $('#module').val();
                    d.sub_module = $('#sub_module').val();
                },
            },
            columns: [
                { data: 'team_name' },
                { data: 'file_name' },
                { data: 'uploaded_to' },
                { data: 'status' },
                { data: 'action' }
            ],
            columnDefs: [
                { "className": "text-center", "targets": ['_all'] }
            ],
        });
    }
    function approved(fileId, type, typeofsystem) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to approve this file?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, approve it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_url('approved'); ?>',
                    type: 'POST',
                    data: {
                        file_id: fileId,
                        type: type,
                        typeofsystem: typeofsystem
                    },
                    success: function () {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            icon: 'success',
                            title: type + ' file approved successfully',
                        });
                        var table = $('#typeofsystem_table').DataTable();
                        var currentPage = table.page();

                        table.ajax.reload(function () {
                            table.page(currentPage).draw(false);
                        }, false);
                    },
                });
            }
        });
    }
    function backtopending(fileId, type, typeofsystem) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to recall this file?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Recall it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_url('backtopending'); ?>',
                    type: 'POST',
                    data: {
                        file_id: fileId,
                        type: type,
                        typeofsystem: typeofsystem
                    },
                    success: function () {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            icon: 'success',
                            title: type + ' file recall to pending',
                        });
                        var table = $('#typeofsystem_table').DataTable();
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