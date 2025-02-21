<!-- Create Module -->
<div class="modal fade" id="create_module" tabindex="-1" aria-labelledby="create_module" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-info-subtle">
                <h5 class="modal-title" id="varyingcontentModalLabel">CREATE MODULE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row mb-2">
                        <label for="team" class="col-sm-3 col-form-label">Team:</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="team">
                                <option></option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="mod_name" class="col-sm-3 col-form-label">Module | System Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mod_name">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="mod_abbr" class="col-sm-3 col-form-label">Module Abbreviation:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="mod_abbr">
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="date_request" class="col-sm-3 col-form-label">Date Request:</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="date" id="date_request" class="form-control" readonly placeholder="Select Date Request" data-provider="flatpickr" />
                                <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="company" class="col-sm-3 col-form-label">Company:</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="company">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="business_unit" class="col-sm-3 col-form-label">Business Unit:</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="business_unit">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="department" class="col-sm-3 col-form-label">Department:</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="department">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="typeofsystem" class="col-sm-3 col-form-label">Type of System:</label>
                        <div class="col-sm-9">
                            <select name="type" class="form-select" id="typeofsystem">
                                <option value=""></option>
                                <option value="current">Current System</option>
                                <option value="new">New System</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <label for="other_details" class="col-sm-3 col-form-label">Other Details</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="other_details">
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="add_module()">Submit</button>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Module -->
<div class="modal fade" id="edit_module" tabindex="-1" aria-labelledby="edit_module" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-info-subtle">
                <h5 class="modal-title" id="varyingcontentModalLabel">EDIT MODULE NAME</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="" id="edit_module_content">
                </div>
            </div>

        </div>
    </div>
</div>

<!-- View Submodule of the module -->
<div class="modal fade" id="submodule" tabindex="-1" aria-labelledby="submodule" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info-subtle">
                <h5 class="modal-title" id="varyingcontentModalLabel">SUB MODULES</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="" id="submodule_content">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Add Submodule -->
<div class="modal fade" id="add_submodule" tabindex="-1" aria-labelledby="add_submodule" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-info-subtle">
                <h5 class="modal-title" id="varyingcontentModalLabel">ADD SUBMODULE NAME</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="" id="add_submodule_content"></div>
            </div>

        </div>
    </div>
</div>

<!-- Edit Submodule -->
<div class="modal fade" id="edit_submodule" tabindex="-1" aria-labelledby="edit_submodule" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-info-subtle">
                <h5 class="modal-title" id="varyingcontentModalLabel">EDIT SUBMODULE NAME</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="" id="edit_submodule_content">

                </div>
            </div>

        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Admin Setup </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin </a></li>
                        <li class="breadcrumb-item active">Index<i class="mdi mdi-alpha-x-circle:"></i></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-1">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="col-md-12">
                            <div class="d-flex align-items-center mx-2 gap-2">
                                <select class="form-select" id="coFilter" name="coFilter">
                                    <option value=""></option>
                                </select>
                                <select class="form-select" id="buFilter" name="buFilter">
                                    <option value=""></option>
                                </select>
                                <select class="form-select" id="departmentFilter" name="departmentFilter">
                                    <option value=""></option>
                                </select>
                                <select class="form-select" id="team_filter">
                                    <option value="">Select Team</option>
                                </select>
                                <button class="btn btn-primary waves-effect waves-light add-btn" data-bs-toggle="modal" data-bs-target="#create_module"><i class="ri-add-line align-bottom me-5"></i> </button>
                                <button class="btn btn-danger waves-effect waves-light generate" target="_blank"><iconify-icon icon="fluent:document-pdf-32-filled" class="align-bottom mb-1 fs-15 me-5"></iconify-icon></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills arrow-navtabs nav-primary bg-light mb-4" role="tablist">

                        <li class="nav-item">
                            <a id="all" aria-expanded="false" class="nav-link active typeofsystem" data-bs-toggle="tab" >
                                <span class="d-block d-sm-none"><iconify-icon icon="ri:list-settings-line" class="fs-25"></iconify-icon></span>
                                <span class="d-none d-sm-block">All Module | System</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a id="current" aria-expanded="false" class="nav-link typeofsystem" data-bs-toggle="tab" >
                                <span class="d-block d-sm-none"><iconify-icon icon="ri:list-settings-line" class="fs-25"></iconify-icon></span>
                                <span class="d-none d-sm-block">Current Module | System</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="new" aria-expanded="true" class="nav-link typeofsystem" data-bs-toggle="tab" >
                                <span class="d-block d-sm-none"><iconify-icon icon="ri:chat-new-fill" class="fs-25"></iconify-icon></span>
                                <span class="d-none d-sm-block">New Module | System</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="columnDropdown" data-bs-toggle="dropdown" aria-expanded="false"> Column Visibility</button>
                        <ul class="dropdown-menu" aria-labelledby="columnDropdown" id="columnSelectorDropdown" data-simplebar style="max-height: 300px;">
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="0" checked> Module Name</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="1" checked> Status</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="2" checked> Business Unit</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="3" checked> Date Requested</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="4" checked> Date Implem</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="5" checked> Action</label></li>
                        </ul>
                        <button id="generate_report" class="btn btn-danger btn-sm ms-1">Generate Report</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped dt-responsive nowrap table-hover compact" id="module_list">
                            <thead class="table-info text-center text-uppercase">
                                <tr>
                                    <th>Module Name</th>
                                    <th>Status</th>
                                    <th>REQUESTED TO</th>
                                    <th>Date Requested</th>
                                    <th>Date Implem</th>
                                    <th>Other Details</th>
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
<script>
    $(document).ready(function () {
        $('#coFilter, #company').select2({ placeholder: 'Select Company', allowClear: true, minimumResultsForSearch: Infinity});
        $('#buFilter, #business_unit').select2({ placeholder: 'Select Business Unit', allowClear: true, minimumResultsForSearch: Infinity});
        $('#departmentFilter, #department').select2({ placeholder: 'Select Department', allowClear: true, minimumResultsForSearch: Infinity});

        $('#typeofsystem').select2({ placeholder: 'Select Type of System', allowClear: true, minimumResultsForSearch: Infinity });
        $('#team, #team_filter').select2({ placeholder: 'Select Team', allowClear: true, minimumResultsForSearch: Infinity });
    });

    $.ajax({
        url: '<?php echo base_url('setup_location') ?>',
        type: 'POST',
        success: function (response) {
            companyData = JSON.parse(response);
            $('#coFilter, #company').empty().append('<option value="">Select Company</option>');
            $('#buFilter, #business_unit').empty().append('<option value="">Select Business Unit</option>');
            $('#departmentFilter, #department').empty().append('<option value="">Select Department</option>');
            $('#buFilter, #business_unit, #departmentFilter, #department').prop('disabled', true);

            companyData.forEach(function (company) {
                $('#coFilter, #company').append('<option value="' + company.company_code + '">' + company.company + '</option>');
            });
        }
    });

    $('#coFilter, #company').change(function () {
        var companyCode = $(this).val();
        $('#buFilter, #business_unit').empty().append('<option value="">Select Business Unit</option>');
        $('#departmentFilter, #department').empty().append('<option value="">Select Department</option>');
        $('#buFilter, #business_unit').prop('disabled', true);
        $('#departmentFilter, #department').prop('disabled', true);


        var selectedCompany = companyData.find(company => company.company_code == companyCode);

        if (selectedCompany) {
            selectedCompany.business_unit.forEach(function (bu) {
                $('#buFilter, #business_unit').append('<option value="' + bu.bunit_code + '">' + bu.business_unit + '</option>');
            });
            $('#buFilter, #business_unit').prop('disabled', false);
        }
    });

    $('#buFilter, #business_unit').change(function () {
        var companyCode = $('#coFilter').val() || $('#company').val(); 
        var businessUnitCode = $(this).val();
        $('#departmentFilter, #department').empty().append('<option value="">Select Department</option>');
        $('#departmentFilter, #department').prop('disabled', true);

        var selectedCompany = companyData.find(company => company.company_code == companyCode);
        if (selectedCompany) {
            selectedCompany.department.forEach(function (dept) {
                if (dept.bunit_code == businessUnitCode) {
                    $('#departmentFilter, #department').append('<option value="' + dept.dcode + '">' + dept.dept_name + '</option>');
                }
            });
            $('#departmentFilter, #department').prop('disabled', false);
        }
    });


    $.ajax({
        url: '<?php echo base_url('get_team') ?>',
        type: 'POST',
        success: function (response) {
            teamData = JSON.parse(response);
            $('#team, #team_filter').empty().append('<option value="">Select Team Name</option>');
            teamData.forEach(function (team) {
                $('#team, #team_filter').append('<option value="' + team.team_id + '">' + team.team_name + '</option>');
            });
        }
    });



    var typeofsystem = "all";
    var table = null;
    var printWindow = null; 

    $('#team_filter, #coFilter, #buFilter, #departmentFilter').change(function () {
        $('#module_list').DataTable().ajax.reload();
    });

    
    loadsystem(typeofsystem);

    $("a.typeofsystem").click(function () {
        $("a.btn-primary").removeClass('btn-primary').addClass('btn-secondary');
        $(this).addClass('btn-primary');
        let typeofsystem = this.id;
        loadsystem(typeofsystem);
    });

    function loadsystem(typeofsystem){
        table = $('#module_list').DataTable({
            "processing": true,
            "serverSide": true,
            "destroy": true,
            // 'scrollCollapse': true,
            // "scrollY": "400px",
            // "scrollX": true,
            'lengthMenu': [[10, 25, 50, 100, 10000], [10, 25, 50, 100, "Max"]],
            'pageLength': 10,
            // 'stateSave': true,
            "ajax": {
                "url": "<?= base_url('module_list') ?>",
                "dataType": "json",
                "type": "POST",
                "data": function (d) {
                    d.typeofsystem = typeofsystem !== "all" ? typeofsystem : null;
                    d.team = $('#team_filter').val();
                    d.requested_to_co = $('#coFilter').val();
                    d.requested_to_bu = $('#buFilter').val();
                    d.requested_to_dep = $('#departmentFilter').val();
                }
            },
            "columns": [
                { "data": 'mod_name' },
                { "data": 'status' },
                { "data": 'bu_name' },
                { "data": 'date_request'},
                { "data": 'date_implem'},
                { "data": 'others'},
                { "data": 'action'}
            ],
            "paging": true,
            "searching": true,
            "ordering": true,
            "columnDefs": [
                { "className": "text-center", "targets": ['_all'] }
            ]
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

            if (printWindow && !printWindow.closed) {
                return;
            }

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
            <div style="text-align: center; margin-bottom: 20px;"><h4>LIST OF MODULES</h4></div>
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
            printWindow = window.open('', '', '');
            printWindow.document.title = 'MODULES LIST - PDF Export';
            printWindow.document.write(printContent);
            printWindow.document.close();
            printWindow.print();
        });
    }

    $('#create_module').on('hidden.bs.modal', function () {
        $('#mod_name').val('');
        $('#mod_abbr').val('');
        $('#typeofsystem').val('').trigger('change');
    });

    function add_module() {
        var mod_name        = $('#mod_name').val();
        var mod_abbr        = $('#mod_abbr').val();
        var typeofsystem    = $('#typeofsystem').val();
        var co              = $('#company').val() || '';
        var bcode           = $('#business_unit').val() || '';
        var dep             = $('#department').val() || '';

        var company         = $('#company option:selected').text().trim();
        var business_unit   = $('#business_unit option:selected').text().trim();
        var department      = $('#department option:selected').text().trim();

        var date_request    = $('#date_request').val();
        var team            = $('#team').val();
        var other_details   = $('#other_details').val();


        if (bcode === "") {
            business_unit = '';
        }


        if (mod_name === "" || mod_abbr === "" || typeofsystem === "") {
            toastr.options = {
                progressBar: true,
                positionClass: "toast-top-left",
                timeOut: 5000,
                extendedTimeOut: 2000,
                preventDuplicates: true,
            };

            toastr.info(
                `Please fill up the required fields`,
            );
            $('#mod_name, #mod_abbr').each(function () {
                if ($(this).val() === '') {
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                }
            });


            return;
        }

        var data = {
            mod_name: mod_name,
            mod_abbr: mod_abbr,
            typeofsystem: typeofsystem,
            bcode: bcode,
            co: co,
            bcode: bcode,
            dep: dep,

            company: company,
            business_unit: business_unit,
            department: department,

            department: department,
            date_request: date_request,
            team: team,
            other_details: other_details
        };

        $.ajax({
            url: '<?php echo base_url("add_module"); ?>',
            type: 'POST',
            data: data,
            success: function () {
                $('#create_module').modal('hide');
                var table = $('#module_list').DataTable();
                var currentPage = table.page();

                table.ajax.reload(function () {
                    table.page(currentPage).draw(false);
                }, false);
                toastr.options = {
                    progressBar: true,
                    positionClass: "toast-top-left",
                    timeOut: 5000,
                    extendedTimeOut: 2000,
                    preventDuplicates: true,
                };

                toastr.success(
                    `Module was successfully added`,
                );
            },
        });
    }
    function view_submodule(mod_id) {
        $.ajax({
            url: '<?= base_url('view_submodule') ?>',
            type: 'POST',
            data: { mod_id: mod_id },
            error: function () {
                toastr.options = {
                    progressBar: true,
                    positionClass: "toast-top-left",
                    timeOut: 5000,
                    extendedTimeOut: 2000,
                    preventDuplicates: true,
                };

                toastr.error(
                    `Oops! Something went wrong.`,
                );
            },
            success: function (data) {
                $("#submodule_content").html(data);
            }
        });
    }

    function add_submodule_content(mod_id) {
        $.ajax({
            url: '<?= base_url('add_submodule_content') ?>',
            type: 'POST',
            data: { mod_id: mod_id },
            error: function () {
                toastr.options = {
                    progressBar: true,
                    positionClass: "toast-top-left",
                    timeOut: 5000,
                    extendedTimeOut: 2000,
                    preventDuplicates: true,
                };

                toastr.error(
                    `Oops! Something went wrong.`,
                );
            },
            success: function (data) {
                $("#add_submodule_content").html(data);
            }
        });
    }

    function add_submodule() {
        var mod_id = $('#mod_id').val();
        var sub_mod_name = $('#sub_mod_name').val();

        if (sub_mod_name === "") {
            toastr.options = {
                    progressBar: true,
                    positionClass: "toast-top-left",
                    timeOut: 5000,
                    extendedTimeOut: 2000,
                    preventDuplicates: true,
                };

                toastr.info(
                    `Sub module name is required.`,
                );
            return;
        }
        Swal.fire({
            title: 'Are you sure?',
            text: 'To add this sub module?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, add it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_url("insert_submodule"); ?>',
                    type: 'POST',
                    data: { mod_id: mod_id, sub_mod_name: sub_mod_name },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        });
                    },
                    success: function (data) {
                        toastr.options = {
                            progressBar: true,
                            positionClass: "toast-top-left",
                            timeOut: 5000,
                            extendedTimeOut: 2000,
                            preventDuplicates: true,
                        };

                        toastr.success(
                            `Sub module was successfully added.`,
                        );
                        var table = $('#submodule_list').DataTable();
                        var currentPage = table.page();

                        table.ajax.reload(function () {
                            table.page(currentPage).draw(false);
                        }, false);
                        view_submodule(mod_id);
                        $('#submodule').modal('show');
                        $('#add_submodule').modal('hide');

                    }
                });
            }
        });
    }
    function edit_module(mod_id, requested_to_co, requested_to_bu, requested_to_dep, bu_name, date_request, belong_team) {

        $.ajax({
            url: '<?= base_url('edit_module') ?>',
            type: 'POST',
            data: { 
                mod_id: mod_id,
                business_unit: bu_name,
                date_request: date_request,
                team: belong_team,
                co: requested_to_co,
                bcode: requested_to_bu,
                dep: requested_to_dep
             },
            error: function () {
                toastr.options = {
                    progressBar: true,
                    positionClass: "toast-top-left",
                    timeOut: 5000,
                    extendedTimeOut: 2000,
                    preventDuplicates: true,
                };

                toastr.error(
                    `Oops! Something went wrong.`,
                );
            },
            success: function (data) {
                $("#edit_module_content").html(data);
            }
        });
    }
    function submiteditedmodule() {
        var mod_id          = $('#edit_mod_id').val();
        var mod_name        = $('#edit_mod_name').val();
        var mod_abbr        = $('#edit_mod_abbr').val();
        var bcode           = $('#edit_business_unit').val() || '';

        var co              = $('#edit_co').val() || '';
        var bcode           = $('#edit_bu').val() || '';
        var dep             = $('#edit_dept').val() || '';

        var company         = $('#edit_co option:selected').text().trim();
        var business_unit   = $('#edit_bu option:selected').text().trim();
        var department      = $('#edit_dept option:selected').text().trim();
        var date_request    = $('#edit_date_request').val();
        var date_implem     = $('#edit_date_implem').val();
        var team            = $('#edit_team_').val();
        var other_details   = $('#edit_other_details').val();


        if (bcode === "") {
            business_unit = '';
        }

        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to edit this module name!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, update it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_url("update_module"); ?>',
                    type: 'POST',
                    data: { 
                        mod_id: mod_id, 
                        mod_name: mod_name, 
                        mod_abbr: mod_abbr,
                        co: co,
                        bcode: bcode,
                        dep: dep,

                        company: company,
                        business_unit: business_unit,
                        department: department,

                        date_request: date_request,
                        date_implem: date_implem,
                        team: team,
                        other_details: other_details
                    },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        });
                    },
                    success: function (data) {
                        toastr.options = {
                            progressBar: true,
                            positionClass: "toast-top-left",
                            timeOut: 5000,
                            extendedTimeOut: 2000,
                            preventDuplicates: true,
                        };

                        toastr.success(
                            `Module was successfully updated`,
                        );
                        $('#edit_module').modal('hide');

                        var table = $('#module_list').DataTable();
                        var currentPage = table.page();

                        table.ajax.reload(function () {
                            table.page(currentPage).draw(false);
                        }, false);
                    }
                });
            }
        });
    }

    function edit_submodule_modal(sub_mod_id) {
        $.ajax({
            url: '<?= base_url('edit_submodule_content') ?>',
            type: 'POST',
            data: { sub_mod_id: sub_mod_id },
            cache: false, 
            error: function () {
                toastr.options = {
                    progressBar: true,
                    positionClass: "toast-top-left",
                    timeOut: 5000,
                    extendedTimeOut: 2000,
                    preventDuplicates: true,
                };

                toastr.error(
                    `Oops! Something went wrong.`,
                );
            },
            success: function (data) {
                $("#edit_submodule_content").html(data);
            }
        });
    }

    function submiteditedsubmodule(sub_mod_id) {
        var sub_mod_name = $('#sub_mod_name').val();

        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to edit this sub module name!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, update it!',
            cancelButtonText: 'No, cancel!',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: '<?php echo base_url("update_submodule"); ?>',
                        type: 'POST',
                        data: { sub_mod_id: sub_mod_id, sub_mod_name: sub_mod_name },
                        error: function () {
                            toastr.options = {
                                progressBar: true,
                                positionClass: "toast-top-left",
                                timeOut: 5000,
                                extendedTimeOut: 2000,
                                preventDuplicates: true,
                            };

                            toastr.error(
                                `Oops! Something went wrong.`,
                            );
                        },
                        success: function (data) {
                            toastr.options = {
                                progressBar: true,
                                positionClass: "toast-top-left",
                                timeOut: 5000,
                                extendedTimeOut: 2000,
                                preventDuplicates: true,
                            };

                            toastr.success(
                                `Sub Module was successfully updated`,
                            );
                            $('#edit_submodule').modal('hide');
                            $('#submodule').modal('show');
                            $('#submodule_list').DataTable().ajax.reload();
                        }
                    });
                }
            });
    }
    

    function approve_new_module(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to approve this new System?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, approve it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_url('approve_new_module'); ?>',
                    type: 'POST',
                    data: {
                        id: id,
                    },
                    success: function () {
                        toastr.options = {
                            progressBar: true,
                            positionClass: "toast-top-left",
                            timeOut: 5000,
                            extendedTimeOut: 2000,
                            preventDuplicates: true,
                        };

                        toastr.success(
                            `New system | module successfully approve`,
                        );
                        var table = $('#module_list').DataTable();
                        var currentPage = table.page();

                        table.ajax.reload(function () {
                            table.page(currentPage).draw(false);
                        }, false);
                    },
                });
            }
        });
    }
    function recall_new_module(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You want to recall to pending this new System?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, recall it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_url('recall_new_module'); ?>',
                    type: 'POST',
                    data: {
                        id: id,
                    },
                    success: function () {
                        toastr.options = {
                            progressBar: true,
                            positionClass: "toast-top-left",
                            timeOut: 5000,
                            extendedTimeOut: 2000,
                            preventDuplicates: true,
                        };

                        toastr.success(
                            `New system | module was successfully recalled`,
                        );
                        var table = $('#module_list').DataTable();
                        var currentPage = table.page();

                        table.ajax.reload(function () {
                            table.page(currentPage).draw(false);
                        }, false);
                    },
                });
            }
        });
    }

    function delete_module(mod_id) {
        Swal.fire({
            title: 'Warning?',
            text: 'Module will be deleted as well as its sub module!!!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_url('delete_module'); ?>',
                    type: 'POST',
                    data: {
                        mod_id: mod_id,
                    },
                    success: function () {
                        toastr.options = {
                            progressBar: true,
                            positionClass: "toast-top-left",
                            timeOut: 5000,
                            extendedTimeOut: 2000,
                            preventDuplicates: true,
                        };

                        toastr.success(
                            `Module was successfully deleted`,
                        );
                        var table = $('#module_list').DataTable();
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

<script>
    $(document).ready(function() {
        $('.generate').click(function() {
            window.open('<?php echo site_url("admin/generate_pdf"); ?>', '_blank');
        });
    });
</script>