<!-- Create Module -->
<div class="modal fade" id="create_module" tabindex="-1" aria-labelledby="create_module" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyingcontentModalLabel">CREATE MODULE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
            <div class="modal-body">
                <div class="mb-2">
                    <label for="title" class="col-form-label">Module | SystemName:</label>
                    <input type="text" class="form-control" id="mod_name">
                </div>

                <div class="mb-2">
                    <label for="title" class="col-form-label">Module Abbreviation:</label>
                    <input type="text" class="form-control" id="mod_abbr">
                </div>

                <div class="mb-2">
                    <label for="title" class="col-form-label">Type of System</label>
                   <select name="type" class="form-select " id="typeofsystem">
                    <option value=""></option>
                    <option value="current">Current System</option>
                    <option value="new">New System</option>
                   </select>
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
            <div class="modal-header">
                <h5 class="modal-title" id="varyingcontentModalLabel">EDIT MODULE NAME</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
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
            <div class="modal-header">
                <h5 class="modal-title" id="varyingcontentModalLabel">SUB MODULES</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
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
            <div class="modal-header">
                <h5 class="modal-title" id="varyingcontentModalLabel">ADD SUBMODULE NAME</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
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
            <div class="modal-header">
                <h5 class="modal-title" id="varyingcontentModalLabel">EDIT SUBMODULE NAME</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
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
    <div class="container-fluid">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header border-1">
                    <div class="d-flex align-items-center">
                        <h5 class="card-title mb-0 flex-grow-1">Module Setup</h5>
                        <div class="flex-shrink-0">
                            <div class="d-flex flex-wrap gap-2">
                                <button class="btn btn-primary waves-effect waves-light add-btn" data-bs-toggle="modal"
                                    data-bs-target="#create_module"><i class="ri-add-line align-bottom me-1"></i> Add
                                    Module </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                <ul class="nav nav-pills arrow-navtabs nav-primary bg-light mb-4" role="tablist">
                        <li class="nav-item">
                            <a id="current" aria-expanded="false" class="nav-link active typeofsystem" data-bs-toggle="tab" >
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
                    <div class="table-responsive">
                        <table class="table table-striped dt-responsive nowrap table-hover" id="module_list">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th>Module Name</th>
                                    <th>Status</th>
                                    <th>Business Unit</th>
                                    <th>Date Requested</th>
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
    $(document).ready(function () {
        $('#typeofsystem').select2({ placeholder: 'Select Type of System', allowClear: true, minimumResultsForSearch: Infinity });
    });


    var typeofsystem = "current";
    loadsystem(typeofsystem);

    $("a.typeofsystem").click(function () {
        $("a.btn-primary").removeClass('btn-primary').addClass('btn-secondary');
        $(this).addClass('btn-primary');
        let typeofsystem = this.id;
        loadsystem(typeofsystem);
    });

    function loadsystem(typeofsystem){
        $('#module_list').DataTable({
            "processing": true,
            "serverSide": true,
            "destroy": true,
            'scrollCollapse': true,
            'scrollY': '50vh',
            'lengthMenu': [[10, 25, 50, 100, 10000], [10, 25, 50, 100, "Max"]],
            'pageLength': 10,
            'stateSave': true,
            "ajax": {
                "url": "<?= base_url('module_list') ?>",
                "dataType": "json",
                "type": "POST",
                "data": {
                    "typeofsystem": typeofsystem
                }
            },
            "columns": [
                { "data": 'mod_name' },
                { "data": 'status' },
                { "data": 'bu_name' },
                { "data": 'date_request',
                    "render": function(data, type, row) {
                        if (data) {
                            var date = new Date(data);
                            return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric'
                            });
                        }else {
                            return '<span class="badge bg-info"> Implemented </span>';
                        }
                    }
                },
                { "data": 'action' }
            ],
            "paging": true,
            "searching": true,
            "ordering": true,
            "columnDefs": [
                { "className": "text-center", "targets": ['_all'] }
            ],
            
        });
    }

    function add_module() {
        var mod_name        = $('#mod_name').val();
        var mod_abbr        = $('#mod_abbr').val();
        var typeofsystem    = $('#typeofsystem').val();

        if (mod_name === "" || mod_abbr === "" || typeofsystem === "") {
            Swal.fire({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                icon: 'error',
                title: 'Please fill up fields!',
            });
            if (mod_name === "") {
                $('#mod_name').addClass('is-invalid');
            }
            if (mod_abbr === "") {
                $('#mod_abbr').addClass('is-invalid');
            }
            return;
        }

        var data = {
            mod_name: mod_name,
            mod_abbr: mod_abbr,
            typeofsystem: typeofsystem
        };

        $.ajax({
            url: '<?php echo base_url("add_module"); ?>',
            type: 'POST',
            data: data,
            success: function () {
                $('#create_module').modal('hide');
                $('#module_list').DataTable().ajax.reload();
                Swal.fire({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 1500,
                    timerProgressBar: true,
                    icon: 'success',
                    title: 'Module added successfully.',
                });
            },
        });
    }
    function view_submodule(mod_id) {
        $.ajax({
            url: '<?= base_url('view_submodule') ?>',
            type: 'POST',
            data: { mod_id: mod_id },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                });
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
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                });
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
            Swal.fire({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                icon: 'error',
                title: 'Sub module name is required!',
            });
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
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            icon: 'success',
                            title: 'Sub module added successfully.',
                        });
                        $('#submodule_list').DataTable().ajax.reload();
                        view_submodule(mod_id);
                        $('#submodule').modal('show');
                        $('#add_submodule').modal('hide');

                    }
                });
            }
        });
    }
    function edit_module(mod_id) {
        $.ajax({
            url: '<?= base_url('edit_module') ?>',
            type: 'POST',
            data: { mod_id: mod_id },
            error: function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                });
            },
            success: function (data) {
                $("#edit_module_content").html(data);
            }
        });
    }
    function submiteditedmodule() {
        var mod_id   = $('#edit_mod_id').val();
        var mod_name = $('#edit_mod_name').val();
        var mod_abbr = $('#edit_mod_abbr').val();

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
                    data: { mod_id: mod_id, mod_name: mod_name, mod_abbr: mod_abbr },
                    error: function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        });
                    },
                    success: function (data) {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            icon: 'success',
                            title: 'Module updated successfully.',
                        });
                        $('#edit_module').modal('hide');
                        $('#module_list').DataTable().ajax.reload();
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
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!'
                });
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
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Something went wrong!',
                            });
                        },
                        success: function (data) {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 1500,
                                timerProgressBar: true,
                                icon: 'success',
                                title: 'Sub module updated successfully.',
                            });
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
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            icon: 'success',
                            title: ' New System approved successfully',
                        });
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
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                            icon: 'success',
                            title: ' New System approved successfully',
                        });
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