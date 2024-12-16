<div class="modal fade" id="upload_remaining_files" tabindex="-1" aria-labelledby="upload_remaining_files"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" style="width: 655px">
        <div class="modal-content">
            <div class="modal-header bg-info-subtle">
                <h5 class="modal-title">LIST OF REMAINING DIRECTORIES NOT YET UPLOADED</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table id="remaining_files_table" class="table table-striped table-bordered">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>Directory Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="upload_to_directory" tabindex="-1" aria-labelledby="upload_to_directory" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-info-subtle">
                <h5 class="modal-title" id="upload_to"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="uploadForm" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="title" class="col-form-label">Business Unit <span class="text-danger"><small>( Optional for no business_unit file directory )*</small></span></label>
                            <select id="business_unitFilter" class="form-select" aria-label="Team">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label for="title" class="col-form-label">Department <span class="text-danger"><small>( Optional for no department file directory )*</small></span></label>
                            <select id="departmentFilter" class="form-select" aria-label="Team">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="col-lg-12" id="dateImplem" style="display: none;">
                            <label class="col-form-label">Date Implementation | Parallel:</label>
                            <div class="input-group">
                                <input type="date" id="date_implem" class="form-control" readonly="" placeholder="Select Date Implemented" data-provider="flatpickr" />
                                <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <label for="fileUpload"  class="col-form-label">Upload a File</label>
                            <input type="file" id="fileUpload" class="filepond filepond-input-multiple" name="file[]" multiple data-allow-reorder="true" data-max-file-size="500MB" data-max-files="50" />
                            <input type="hidden" hidden id="team_id" class="hidden">
                            <input type="hidden" hidden id="mod_id" class="hidden">
                            <input type="hidden" hidden id="sub_mod_id" class="hidden">
                            <input type="hidden" hidden id="typeofsystem" class="hidden">
                            <input type="hidden" hidden id="directory" class="hidden">
                            <input type="hidden" hidden id="file_mod_name" class="hidden">
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-lg btn-primary" id="uploadBtn">Upload</button>
                        <button type="button" class="btn btn-lg btn-dark" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">DEPLOYMENT | SYSTEM</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Deoloyment </a></li>
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
                        <h5 class="card-title mb-0 flex-grow-1 fw-bold">List of System | For Implementation</h5>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills arrow-navtabs nav-primary bg-light mb-4" role="tablist">
                        <li class="nav-item">
                            <a id="current" aria-expanded="false" class="nav-link  typeofsystem" data-bs-toggle="tab" >
                                <span class="d-block d-sm-none"><iconify-icon icon="ri:list-settings-line" class="fs-25"></iconify-icon></span>
                                <span class="d-none d-sm-block">Current Module | System</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a id="new" aria-expanded="true" class="nav-link active typeofsystem" data-bs-toggle="tab" >
                                <span class="d-block d-sm-none"><iconify-icon icon="ri:chat-new-fill" class="fs-25"></iconify-icon></span>
                                <span class="d-none d-sm-block">New Module | System</span>
                            </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown">
                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="columnDropdown" data-bs-toggle="dropdown" aria-expanded="false"> Column Visibility</button>
                        <ul class="dropdown-menu" aria-labelledby="columnDropdown" id="columnSelectorDropdown" data-simplebar style="max-height: 300px;">
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="0" checked> Team</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="1" checked> Module</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="2" checked> Requested</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="3" checked> Business Unit</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="4" checked> Status</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="5" checked> Date of Implementation</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="6" checked> Type</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="7" checked> Uploaded Directories</label></li>
                            <li><label class="dropdown-item"><input type="checkbox" class="column-toggle" value="8" checked> Action</label></li>
                        </ul>
                        <button id="generate_report" class="btn btn-danger btn-sm ms-1">Generate Report</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover no-wrap" id="for_implementation">
                            <thead class="table-info text-center text-uppercase">
                                <tr>
                                    <th>Team</th>
                                    <th>Module</th>
                                    <th>Requested</th>
                                    <th>Business Unit</th>
                                    <th>Status</th>
                                    <th>Date of Implementation</th>
                                    <th>Type</th>
                                    <th>Uploaded Directories</th>
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
<script>

    var typeofsystem = "new";
    var table = null;
    var printWindow = null; 

    loadsystem(typeofsystem);

    $("a.typeofsystem").click(function () {
        $("a.btn-primary").removeClass('btn-primary').addClass('btn-secondary');
        $(this).addClass('btn-primary');
        let typeofsystem = this.id;
        loadsystem(typeofsystem);
    });
    function loadsystem(typeofsystem) {
        if (table) {
            table.destroy();
        }

        table = $('#for_implementation').DataTable({
            "processing": true,
            "serverSide": true,
            "destroy": true,
            // "stateSave": true,
            "scrollY": "400px",
            "scrollX": true,
            "scrollCollapse": true,
            "lengthMenu": [[10, 25, 50, 100, 10000], [10, 25, 50, 100, "Max"]],
            "pageLength": 10,
            "ajax": {
                "url": "<?php echo base_url('for_implementation_list'); ?>",
                "type": "POST",
                "data": {
                    "typeofsystem": typeofsystem
                }
            },
            "columns": [
                { "data": "team_name" },
                { "data": "module" },
                { "data": 'date_request',
                    "render": function(data, type, row) {
                        if (data) {
                            var date = new Date(data);
                            return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric'
                            });
                        }else {
                            return '<span class="badge bg-info"> N/A </span>';
                        }
                    }
                },
                { "data": "bu_name" },
                { "data": "implem_type" },
                { "data": 'date_implem',
                    "render": function(data, type, row) {
                        if (data) {
                            var date = new Date(data);
                            return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric'
                            });
                        }else {
                            return '<span class="badge bg-info"> N/A </span>';
                        }
                    }
                },
                { "data": "typeofsystem" },
                { "data": "uploaded_to" },
                { "data": "action" }
            ],
            "columnDefs": [
                { "className": "text-center", "targets": ['_all'] }
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
            <div style="text-align: center; margin-bottom: 20px;"><h4>LIST OF SYSTEM FOR DEPLOYMENT</h4></div>
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
            printWindow.document.title = 'LIST OF SYSTEM FOR DEPLOYMENT - PDF Export';
            printWindow.document.write(printContent);
            printWindow.document.close();
            printWindow.print();
        });
    }
    function upload_remaining_files(mod_id, mod_name) {
        $('#remaining_files_table').DataTable({
            "processing": true,
            "serverSide": true,
            "destroy": true,
            "stateSave": true,
            "ajax": {
                "url": "<?php echo base_url('remaining_files_list'); ?>",
                "type": "POST",
                "data": {
                    mod_id: mod_id,
                    mod_name: mod_name
                }
            },
            "columns": [
                { "data": "directory" },
                { "data": "action" }
            ],
            "columnDefs": [
                { "className": "text-center", "targets": ['_all'] }
            ],
        });
    }
</script>

<script src="<?php echo base_url(); ?>assets/js/filepond.js"></script>
<script src="<?php echo base_url(); ?>assets/js/filepond-plugin-image-preview.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/filepond-plugin-file-validate-size.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/filepond-plugin-image-exif-orientation.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/filepond-plugin-file-encode.min.js"></script>

<script>
    $(document).ready(function () {
        $('#business_unitFilter, #buFilter').select2({ placeholder: 'Select Business Unit', allowClear: true, minimumResultsForSearch: Infinity });
        $('#departmentFilter, #deptFilter').select2({ placeholder: 'Select Department', allowClear: true, minimumResultsForSearch: Infinity });
    });

    $.ajax({
        url: '<?php echo base_url('business_unit_current') ?>',
        type: 'POST',
        success: function (response) {
            buData = JSON.parse(response);
            $('#business_unitFilter, #buFilter').empty().append('<option value="">Select Business Unit</option>');
            buData.forEach(function (bu) {
                $('#business_unitFilter, #buFilter').append('<option value="' + bu.bcode + '">' + bu.business_unit + '</option>');
            });
            $('#deptFilter').prop('disabled', true);
        }
    });

    $('#business_unitFilter, #buFilter').change(function () {
        $('#deptFilter, #departmentFilter').empty().append('<option value="">Select Department</option>');
        $('#deptFilter, #departmentFilter').prop('disabled', true);
        var selectedBusinessUnit = $(this).val();
        if (selectedBusinessUnit) {
            $.ajax({
                url: '<?php echo base_url('department_current') ?>',
                type: 'POST',
                data: {
                    business_unit: selectedBusinessUnit
                },
                success: function (response) {
                    deptData = JSON.parse(response);
                    $('#deptFilter, #departmentFilter').empty().append('<option value="">Select Department</option>');
                    deptData.forEach(function (dept) {
                        $('#deptFilter, #departmentFilter').append('<option value="' + dept.dcode + '">' + dept.dept_name + '</option>');
                    });
                    $('#deptFilter, #departmentFilter').prop('disabled', false);
                }
            });
        }
    });
    function upload_to_directory(mod_id, directory, sub_mod_id, team_id, typeofsystem, mod_name) {
        $('#upload_to_directory').modal('show');
        $('#upload_remaining_files').modal('hide');

        $('#mod_id').val(mod_id);
        $('#directory').val(directory);
        $('#sub_mod_id').val(sub_mod_id);
        $('#team_id').val(team_id);
        $('#typeofsystem').val(typeofsystem);
        $('#file_mod_name').val(mod_name);

        $('#upload_to').text('' + directory + ' | ' + mod_name +'');
        if(directory == 'LIVE_TESTING') {
            $('#dateImplem').show();
        }else {
            $('#dateImplem').hide();
        }

    }
    $('#upload_to_directory').on('hidden.bs.modal', function () {
        const pond = FilePond.find(document.querySelector(".filepond-input-multiple"));
        if (pond) {
            pond.removeFiles();
        }
        document.getElementById('uploadForm').reset(); 
        $('#business_unitFilter').val('').trigger('change');
        $('#departmentFilter').val('').trigger('change');
    });

    document.addEventListener('DOMContentLoaded', function () {
        FilePond.registerPlugin(
            FilePondPluginFileEncode,
            FilePondPluginFileValidateSize,
            FilePondPluginImageExifOrientation,
            FilePondPluginImagePreview
        );

        document.querySelectorAll("input.filepond-input-multiple").forEach(function (inputElement) {
            FilePond.create(inputElement);
        });

        document.querySelector('#uploadForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const directory         = document.querySelector('#directory').value;
            const team              = document.querySelector('#team_id').value;
            const module            = document.querySelector('#mod_id').value;
            const sub_module        = document.querySelector('#sub_mod_id').value;
            const typeofsystem      = document.querySelector('#typeofsystem').value;
            const moduleName        = document.querySelector('#file_mod_name').value;
            const business_unit     = document.querySelector('#business_unitFilter').value;
            const department        = document.querySelector('#departmentFilter').value;
            const date_implem       = document.querySelector('#date_implem').value

            Swal.fire({
                title: 'Are you sure?',
                text: `You are about to upload this file to the "${directory}" directory.`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, upload it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    const formData = new FormData();
                    formData.append('directory', directory);
                    formData.append('team_id', team);
                    formData.append('mod_id', module);
                    formData.append('sub_mod_id', sub_module);
                    formData.append('typeofsystem', typeofsystem);
                    formData.append('file_mod_name', moduleName);
                    formData.append('business_unit', business_unit);
                    formData.append('department', department);
                    formData.append('date_implem', date_implem);

                    const pond = FilePond.find(document.querySelector(".filepond-input-multiple"));
                    const files = pond.getFiles();

                    if (files.length === 0) {
                        Toastify({
                            text: `No files selected.`,
                            duration: 5000,
                            gravity: "top",
                            position: "left",
                            stopOnFocus: true,
                            close: true,
                            style: {
                                background: "linear-gradient(to right, #ff5f6d, #ffc371)",
                            },
                        }).showToast();
                        return;
                    }

                    files.forEach(fileItem => {
                        formData.append('file[]', fileItem.file);
                    });

                    const uploadButton = document.querySelector('#uploadBtn');
                    uploadButton.innerHTML = `
                    <span class="d-flex align-items-center">
                        <span class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </span>
                        <span class="flex-grow-1 ms-2">Loading...</span>
                    </span>
                `;
                    uploadButton.disabled = true;

                    $.ajax({
                        url: '<?php echo base_url('submit_to_directory'); ?>',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            response = JSON.parse(response);

                            if (response.success) {
                                Toastify({
                                    text: response.message,
                                    duration: 5000,
                                    gravity: "top",
                                    position: "left",
                                    stopOnFocus: true,
                                    close: true,
                                    style: {
                                        background: "linear-gradient(to right, #ff5f6d, #ffc371)",
                                    },
                                }).showToast();
                                $('#upload_to_directory').modal('hide');
                                $('#remaining_files_table').DataTable().ajax.reload();
                                $('#for_implementation').DataTable().ajax.reload();
                                const pond = FilePond.find(document.querySelector(".filepond-input-multiple"));
                                if (pond) {
                                    pond.removeFiles();
                                }
                                document.getElementById('uploadForm').reset(); 
                                $('#business_unitFilter').val('').trigger('change');
                                $('#departmentFilter').val('').trigger('change');
                            } else {
                                Swal.fire({
                                    title: 'Notice!',
                                    text: response.message,
                                    icon: 'info',
                                    confirmButtonText: 'Proceed with Manager\'s Key',
                                    cancelButtonText: 'Cancel',
                                    showCancelButton: true,
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        $('#upload_to_directory').modal('hide');
                                        Swal.fire({
                                            title: 'Enter Manager\'s Key',
                                            input: 'password',
                                            icon: 'info',
                                            inputAttributes: {
                                                autocapitalize: 'off',
                                                autocomplete: 'off',
                                                placeholder: 'Enter manager\'s key'
                                            },
                                            showCancelButton: true,
                                            confirmButtonText: 'Submit',
                                            cancelButtonText: 'Cancel',
                                            allowOutsideClick: false,
                                            allowEscapeKey: false,
                                            preConfirm: (key) => {
                                                if (!key) {
                                                    Swal.showValidationMessage('Manager\'s key is required');
                                                } else {
                                                    return key;
                                                }
                                            }
                                        }).then((keyResult) => {
                                            if (keyResult.isConfirmed && keyResult.value) {
                                                formData.append('manager_key', keyResult.value);
                                                $.ajax({
                                                    url: '<?php echo base_url('submit_to_directory'); ?>',
                                                    type: 'POST',
                                                    data: formData,
                                                    contentType: false,
                                                    processData: false,
                                                    success: function (overrideResponse) {
                                                        overrideResponse = JSON.parse(overrideResponse);
                                                        if (overrideResponse.success) {
                                                            Toastify({
                                                                text: overrideResponse.message,
                                                                duration: 5000,
                                                                gravity: "top",
                                                                position: "left",
                                                                stopOnFocus: true,
                                                                close: true,
                                                                style: {
                                                                    background: "linear-gradient(to right, #ff5f6d, #ffc371)",
                                                                },
                                                            }).showToast();
                                                            $('#upload_to_directory').modal('hide');
                                                            $('#remaining_files_table').DataTable().ajax.reload();
                                                            $('#for_implementation').DataTable().ajax.reload();
                                                            const pond = FilePond.find(document.querySelector(".filepond-input-multiple"));
                                                            if (pond) {
                                                                pond.removeFiles();
                                                            }
                                                            document.getElementById('uploadForm').reset(); 
                                                            $('#business_unitFilter').val('').trigger('change');
                                                            $('#departmentFilter').val('').trigger('change');
                                                        } else {
                                                            Toastify({
                                                                text: overrideResponse.message,
                                                                duration: 5000,
                                                                gravity: "top",
                                                                position: "left",
                                                                stopOnFocus: true,
                                                                close: true,
                                                                style: {
                                                                    background: "linear-gradient(to right, #ff5f6d, #ffc371)",
                                                                },
                                                            }).showToast();
                                                        }
                                                    }
                                                });
                                            }
                                        });
                                    }
                                });
                            }

                            uploadButton.innerHTML = 'Upload Files';
                            uploadButton.disabled = false;
                        },
                    });
                } else {
                    return;
                }
            });
        });
    });
</script>


