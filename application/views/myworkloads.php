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

    <div class="container-fluid">
        <div class="col-xl-12">
            <!-- Navigation Pills -->
            <ul class="nav nav-pills arrow-navtabs nav-primary bg-light" role="tablist">
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

            <!-- Tab Content -->
            <div class="tab-content">
                <div class="row">
                    <div id="tab-content-placeholder" class="mt-2 tab-pane active"></div>
                </div>
            </div>
        </div>
    </div>


</div>


<script>
    $(document).ready(function () {
        function loadWorkloads(status) {
            $('#tab-content-placeholder').html('<div class="text-center text-primary "><iconify-icon icon="svg-spinners:bars-rotate-fade" width="60" height="60"></iconify-icon></div>');
            $.ajax({
                url: '<?php echo base_url("fetch_workloads"); ?>',
                method: 'GET',
                data: { status: status },
                success: function (response) {
                    $('#tab-content-placeholder').html(response);
                },
            });
        }

        $('.nav-link.status').on('click', function (e) {
            e.preventDefault();
            $('.nav-link.status').removeClass('active');
            $(this).addClass('active');
            const status = $(this).data('status');
            loadWorkloads(status);
        });

        loadWorkloads('all');
    });


</script>