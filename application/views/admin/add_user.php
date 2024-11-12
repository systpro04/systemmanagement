<!-- Varying modal content -->
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="create_kpiLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="varyingcontentModalLabel">SETUP USER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="title" class="col-form-label">Team:</label>
                    <input type="hidden" class="hidden" id="emp_id">
                    <select class="form-select mb-3" id="team_id" style="width: 100%; height: 508px">
                        <option value=""></option>
                        <option value="1">LOGIC LEGENDS</option>
                        <option value="2">CODE CONQUERORS</option>
                        <option value="3">QUANTUM QUANTS</option>
                        <option value="4">SERVER SAMURAI</option>
                        <option value="5">CTRL+ ALT ELITE</option>
                        <option value="6">CYBER CENTINELS</option>
                        <option value="7">TECH TACTICIANS</option>
                        <option value="8">ALGORITHM ASSASSIN</option>
                        <option value="9">SYNTAX SOLDIERS</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="type" class="col-form-label">Position:</label>
                    <select class="form-select mb-3" id="type">
                        <option></option>
                        <option value="System Analyst">SYSTEM ANALYST</option>
                        <option value="Programmer">PROGRAMMER</option>
                        <option value="RMS">RMS</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="insertUser()">Submit</button>
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">User </a></li>
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
                            <div class="d-flex gap-3 align-items-start flex-grow-1">
                                <select class="form-select" id="filter_team" style="width: auto; height: auto;">
                                    <option value=""></option>
                                    <option value="1">LOGIC LEGENDS</option>
                                    <option value="2">CODE CONQUERORS</option>
                                    <option value="3">QUANTUM QUANTS</option>
                                    <option value="4">SERVER SAMURAI</option>
                                    <option value="5">CTRL+ ALT ELITE</option>
                                    <option value="6">CYBER CENTINELS</option>
                                    <option value="7">TECH TACTICIANS</option>
                                    <option value="8">ALGORITHM ASSASSIN</option>
                                    <option value="9">SYNTAX SOLDIERS</option>
                                </select>
                                <input type="search" class="form-control" id="search" name="search" style="width: 500px;" placeholder="Search Employee to add...">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped dt-responsive nowrap table-hover" id="user_list">
                            <thead class="table-primary text-center">
                                <tr>
                                    <th>Team Name</th>
                                    <th>Emp ID</th>
                                    <th>Employee Name</th>
                                    <th>Position</th>
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
<link href="<?php echo base_url(); ?>assets/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url(); ?>assets/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/datatable2.1.8.js"></script>
<script>
    $(document).ready(function () {
        $('#team_id, #filter_team').select2({
            placeholder: 'Select Team',
            allowClear: true,
            minimumResultsForSearch: Infinity
        });
        $('#type').select2({
            placeholder: 'Position',
            allowClear: true,
            minimumResultsForSearch: Infinity
        });
    });

    $(document).ready(function () {
        let table =$('#user_list').DataTable({
            processing: true,
            serverSide: true,
            stateSave: true,
            destroy: true,
            scrollCollapse: true,
            lengthmenu: [[10, 25, 50, 100, 10000], [10, 25, 50, 100, "Max"]],
            pageLength: 10,
            scrollY: '50vh',
            stateSave: true,
            ajax: {
                url: '<?php echo base_url('user_list'); ?>',
                type: 'POST',
                data: function (d) {
                    d.filter_team = $('#filter_team').val();
                }
            },
            columns: [
                { data: 'team_name' },
                { data: 'emp_id' },
                { data: 'name' },
                { data: 'position' },
                { data: 'action' }
            ],
            paging: true,
            searching: true,
            ordering: true,
            columnDefs: [
                { "className": "text-center", "targets": ['_all'] }
            ],
        });
        $('#filter_team').change(function () {
            table.ajax.reload(); // Reload DataTable with new filter value
        });
    });


    $("input[name='search']").autocomplete({
        source: function (request, response) {
            $.get("<?php echo base_url('search'); ?>", {
                query: request.term
            }, function (data) {
                data = JSON.parse(data);
                response(data);
            });
        },
    }).data("ui-autocomplete")._renderItem = function (ul, item) {
        var listItem = $("<li>").append(
            $("<div>").css({
                "font-family": "Inter-Regular, sans-serif",
            }).html(`${item.emp_id} - ${item.name}`)
        );

        listItem.click(function() {
            var emp_id = item.emp_id; 
            add_employee_access(emp_id);
        });
        
        return listItem.appendTo(ul);
    }.bind($("input[name='search']"));
    $("div.ui-helper-hidden-accessible[role='status']").hide();
    $("div.ui-menu ui-widget ui-widget-content ui-autocomplete ui-front").hide();

    function add_employee_access(emp_id) {
        $.ajax({
            url: '<?php echo base_url('emp_data') ?>',
            type: 'POST',
            data: { emp_id: emp_id },
            success: function (data) {
                var empData = JSON.parse(data);
                $('#emp_name').text(empData.name);
                $('#emp_id').val(empData.emp_id);
                $('#addUser').modal('show');
            },
        });
    }

    function insertUser() {
        var emp_id = $('#emp_id').val();
        var team_id = $('#team_id').val();
        var position = $('#type').val();

        Swal.fire({
            title: 'Add User',
            text: 'Are you sure you want to add this user?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, add it!',
            cancelButtonText: 'No, cancel!',
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: '<?php echo base_url('add_user') ?>',
                    type: 'POST',
                    data: {
                        emp_id: emp_id,
                        team_id: team_id,
                        position: position
                    },
                    success: function (data) {
                        Swal.fire({
                            toast: true,
                            position: 'top-end',
                            icon: 'success',
                            title: 'Successfully Added.',
                            showConfirmButton: false,
                            timer: 1500,
                            timerProgressBar: true,
                        });
                        $('#addUser').modal('hide');
                        $('#user_list').DataTable().ajax.reload();
                    }
                });
            }
        });
    }

</script>

