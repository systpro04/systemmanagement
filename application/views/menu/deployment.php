<div class="modal fade" id="upload_remaining_files" tabindex="-1" aria-labelledby="upload_remaining_files"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" style="width: 655px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">LIST OF REMAINING DIRECTORIES NOT YET UPLOADED</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
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
            <div class="modal-header">
                <h5 class="modal-title" id="upload_to"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
            <div class="modal-body">
                <form id="uploadForm" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <label for="fileUpload">Upload a File</label>
                            <input type="file" id="fileUpload" class="filepond filepond-input-multiple" name="file[]" multiple data-allow-reorder="true" data-max-file-size="500MB" data-max-files="5" />
                            <input type="hidden" hidden id="team_id" class="hidden">
                            <input type="hidden" hidden id="mod_id" class="hidden">
                            <input type="hidden" hidden id="sub_mod_id" class="hidden">
                            <input type="hidden" hidden id="typeofsystem" class="hidden">
                            <input type="hidden" hidden id="directory" class="hidden">
                            
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
                    <div class="table-responsive">
                        <table class="table table-striped table-hover no-wrap" id="for_implementation">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th>Tean Name</th>
                                    <th>Module</th>
                                    <th>Date Requested</th>
                                    <th>Business Unit</th>
                                    <th>Status</th>
                                    <th>Type</th>
                                    <th>Already Uploaded</th>
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
    var table = $('#for_implementation').DataTable({
        "processing": true,
        "serverSide": true,
        "destroy": true,
        "stateSave": true,
        "ajax": {
            "url": "<?php echo base_url('for_implementation_list'); ?>",
            "type": "POST",
        },
        "columns": [
            { "data": "team_name" },
            { "data": "module" },
            { "data": "date_request" },
            { "data": "bu_name" },
            { "data": "implem_type" },
            { "data": "typeofsystem" },
            { "data": "uploaded_to" },
            { "data": "action" }
        ],
        columnDefs: [
            { "className": "text-center", "targets": ['_all'] }
        ],
    });
    function upload_remaining_files(mod_id) {
        $('#remaining_files_table').DataTable({
            "processing": true,
            "serverSide": true,
            "destroy": true,
            "stateSave": true,
            "ajax": {
                "url": "<?php echo base_url('remaining_files_list'); ?>",
                "type": "POST",
                "data": {
                    mod_id: mod_id
                }
            },
            "columns": [
                { "data": "directory" },
                { "data": "action" }
            ],
            columnDefs: [
                { "className": "text-center", "targets": ['_all'] }
            ],
        });
        $('#remaining_files_modal').modal('show');
    }
</script>

<script src="<?php echo base_url(); ?>assets/js/filepond.js"></script>
<script src="<?php echo base_url(); ?>assets/js/filepond-plugin-image-preview.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/filepond-plugin-file-validate-size.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/filepond-plugin-image-exif-orientation.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/filepond-plugin-file-encode.min.js"></script>

<script>
    function upload_to_directory(mod_id, directory, sub_mod_id, team_id, typeofsystem) {
        $('#upload_to_directory').modal('show');
        $('#upload_remaining_files').modal('hide');

        $('#mod_id').val(mod_id);
        $('#directory').val(directory);
        $('#sub_mod_id').val(sub_mod_id);
        $('#team_id').val(team_id);
        $('#typeofsystem').val(typeofsystem);

        $('#upload_to').text('Upload Files to ' + directory + ' Directory');
    }

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

            const directory = document.querySelector('#directory').value;
            const team = document.querySelector('#team_id').value;
            const module = document.querySelector('#mod_id').value;
            const sub_module = document.querySelector('#sub_mod_id').value;
            const typeofsyste = document.querySelector('#typeofsystem').value;

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
                    formData.append('typofsystem', typeofsystem);

                    const pond = FilePond.find(document.querySelector(".filepond-input-multiple"));
                    const files = pond.getFiles();

                    if (files.length === 0) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'No files selected.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
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
                                Swal.fire({
                                    title: 'Success!',
                                    text: response.message,
                                    icon: 'success',
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 1500,
                                    timerProgressBar: true,
                                });
                                $('#upload_to_directory').modal('hide');
                                $('#remaining_files_table').DataTable().ajax.reload();
                                $('#for_implementation').DataTable().ajax.reload();
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
                                                            Swal.fire({
                                                                text: overrideResponse.message,
                                                                icon: 'success',
                                                                toast: true,
                                                                position: 'top-end',
                                                                showConfirmButton: false,
                                                                timer: 1500,
                                                                timerProgressBar: true,
                                                            });
                                                            $('#upload_to_directory').modal('hide');
                                                            $('#remaining_files_table').DataTable().ajax.reload();
                                                            $('#for_implementation').DataTable().ajax.reload();
                                                        } else {
                                                            Swal.fire({
                                                                title: 'Error!',
                                                                text: overrideResponse.message,
                                                                icon: 'error',
                                                                confirmButtonText: 'OK'
                                                            });
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


