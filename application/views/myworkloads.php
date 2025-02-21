<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">My List of Workloads </h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Workload List </a></li>
                        <li class="breadcrumb-item active">Index<i class="mdi mdi-alpha-x-circle:"></i></li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="col-xl-12">
        <ul class="nav nav-pills arrow-navtabs  nav-justified nav-primary" role="tablist">
            <li class="nav-item">
                <a id="MyWorkloads" data-bs-target="#workloads-tab" class="nav-link active" data-bs-toggle="tab">
                    <span class="d-none d-sm-block">My Workloads</span>
                </a>
            </li>
            <li class="nav-item">
                <a id="MyDailyTask" data-bs-target="#tasks-tab" class="nav-link" data-bs-toggle="tab">
                    <span class="d-none d-sm-block">My Daily Task</span>
                </a>
            </li>
        </ul>
        <hr>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="workloads-tab">
                <ul class="nav nav-pills mt-3">
                    <li class="nav-item">
                        <a id="All" data-status="all" class="nav-link active status" data-bs-toggle="tab">
                            <span class="d-none d-sm-block">All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="Pending" data-status="Pending" class="nav-link status" data-bs-toggle="tab">
                            <span class="d-none d-sm-block">Pending</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="Ongoing" data-status="Ongoing" class="nav-link status" data-bs-toggle="tab">
                            <span class="d-none d-sm-block">Ongoing</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="Done" data-status="Done" class="nav-link status" data-bs-toggle="tab">
                            <span class="d-none d-sm-block">Done</span>
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="row">
                    <div id="workload" class="mt-2"></div>
                </div>
            </div>

            <div class="tab-pane fade" id="tasks-tab">
                <ul class="nav nav-pills mt-3">
                    <li class="nav-item">
                        <a id="AllTasks" data-status="AllTasks" class="nav-link active task_stats" data-bs-toggle="tab">
                            <span class="d-none d-sm-block">All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="PendingTasks" data-status="PendingTasks" class="nav-link task_stats"
                            data-bs-toggle="tab">
                            <span class="d-none d-sm-block">Pending</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="OngoingTasks" data-status="OngoingTasks" class="nav-link task_stats"
                            data-bs-toggle="tab">
                            <span class="d-none d-sm-block">Ongoing</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="DoneTasks" data-status="DoneTasks" class="nav-link task_stats" data-bs-toggle="tab">
                            <span class="d-none d-sm-block">Done</span>
                        </a>
                    </li>
                </ul>
                <hr>
                <div class="row">
                    <div id="task" class="mt-2"></div>
                </div>
            </div>
        </div>
    </div>


</div>


<script>
    $(document).ready(function () {
        function loadWorkloads(status, page = 1) {
            $('#workload').html('<div class="text-center text-primary"><iconify-icon icon="svg-spinners:bars-rotate-fade" width="40" height="40"></iconify-icon></div>');
            $.ajax({
                url: '<?php echo base_url("fetch_workloads"); ?>',
                method: 'GET',
                data: { 
                    status: status,
                    page: page 
                },
                success: function (response) {
                    $('#workload').html(response);
                },
            });
        }

        $('.nav-link.status').on('click', function (e) {
            e.preventDefault();
            $('.nav-link.status').removeClass('active');
            $(this).addClass('active');
            const status = $(this).data('status');
            loadWorkloads(status, 1);
        });

        $(document).on('click', '.pagination-link', function (e) {
            e.preventDefault();
            const status = $('.nav-link.status.active').data('status') || 'all';
            const page = $(this).data('page');
            loadWorkloads(status, page);
        });

        loadWorkloads('all');


        function loadTasks(task_stats, page = 1) {
            $('#task').html('<div class="text-center text-primary"><iconify-icon icon="svg-spinners:bars-rotate-fade" width="40" height="40"></iconify-icon></div>');
            $.ajax({
                url: '<?php echo base_url("fetch_tasks"); ?>',
                method: 'GET',
                data: { 
                    task_stats: task_stats, 
                    page: page 
                },
                success: function (response) {
                    $('#task').html(response);
                }
            });
        }
        $('.nav-link.task_stats').on('click', function (e) {
            e.preventDefault();
            $('.nav-link.task_stats').removeClass('active');
            $(this).addClass('active');
            const task_stats = $(this).data('status');
            loadTasks(task_stats, 1);
        });

        $(document).on('click', '.pagination-link', function (e) {
            e.preventDefault();
            const task_stats = $('.nav-link.task_stats.active').data('status') || 'allTasks';
            const page = $(this).data('page');
            loadTasks(task_stats, page);
        });
        loadTasks('AllTasks', 1);
    });
</script>