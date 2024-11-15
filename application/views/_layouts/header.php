<?php
  $page = basename($_SERVER['REQUEST_URI']);
?>
<!doctype html>
 <html lang="en" data-layout="vertical" data-topbar="dark" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="img-2" data-preloader="enable" data-layout-width="fluid" data-layout-position="fixed" data-sidebar-visibility="show">
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta charset="utf-8" />
     <title>Projects</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" />
     <!-- Layout config Js -->
     <script src="<?php echo base_url(); ?>assets/js/layout.js"></script>
     <!-- Bootstrap Css -->
     <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <!-- Icons Css -->
     <link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url(); ?>assets/css/select2.css" rel="stylesheet" type="text/css" />
     <!-- App Css-->
     <link href="<?php echo base_url(); ?>assets/css/datatable.css" rel="stylesheet" type="text/css" />
      
     <link href="<?php echo base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url(); ?>assets/css/responsive.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url(); ?>assets/css/buttons.css" rel="stylesheet" type="text/css" />
     <!-- custom Css-->
     <link href="<?php echo base_url(); ?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />
     <script src="<?php echo base_url(); ?>assets/js/iconify.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/jquery3.6.0.js"></script>
     <!-- <script src="<?php echo base_url(); ?>assets/js/responsive.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/buttons.js"></script> -->

     <script src="<?php echo base_url(); ?>assets/js/datatable2.1.8.js"></script>
     <link href="<?php echo base_url(); ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

          <!-- dropzone css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dropzone.css" type="text/css" />

    <!-- Filepond css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/filepond.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/filepond-image-preview.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flatpickr.css">
    <script src="<?php echo base_url(); ?>assets/js/flatpickr.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/fullcalendar.js"></script>
     
 </head>
 <body>
     <!-- Begin page -->
     <div id="layout-wrapper">
         <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                    <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="#!" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="#" alt="" height="20" />
                                </span>
                                <span class="logo-lg">
                                    <img src="<?php echo base_url(); ?>assets/images/logo-light.png" alt="" height="17" />
                                </span>
                            </a>
                        </div>
                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger shadow-none" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username" />
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle shadow-none" data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>assets/images/users/avatar-1.jpg" alt="Header Avatar" />
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Louei Genita </span>
                                        <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Admin </span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Louei! </h6>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i>  <span class="align-middle">Profile </span></a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>  <span class="align-middle" data-key="t-logout">Logout </span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
         <div class="app-menu navbar-menu">
             <!-- LOGO -->
             <!-- <div class="navbar-brand-box">
                 <a href="<?php echo base_url('dashboard'); ?>" class="logo logo-light">
                     <span class="logo-lg">
                     <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/users/avatar-1.jpg" alt="" style=" height: 80px; margin-top: 35px; color:white;" border="3" />
                        <h5 class="mt-2 text-white"><span>Louei Genita</span></h5>
                        <h6 class="mt-2"><span>Administrator</span></h6>
                     </span>

                     <span class="logo-sm">
                        <img class="rounded-circle" src="<?php echo base_url(); ?>assets/images/users/avatar-1.jpg" alt="" style="height: 50px; color:white" border="3" />
                     </span>
                 </a>
                 <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                     <i class="ri-record-circle-line"></i>
                 </button>
             </div> -->

             <div class="navbar-brand-box">
                 <a href="#" class="logo logo-light">
                     <span class="logo-sm">
                         <img src="#" alt="" height="22" />
                     </span>
                     <span class="logo-lg">
                         <img src="assets/images/logo-light.png" alt="" style=" height: 80px;" />
                     </span>
                 </a>
                 <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                     <i class="ri-record-circle-line"></i>
                 </button>
             </div>


             <div id="scrollbar">
                 <div class="container-fluid">
                     <div id="two-column-menu">
                     </div>
                     <ul class="navbar-nav" id="navbar-nav">
                         <li class="menu-title"><span data-key="t-menu">HOME</span></li>
                         <li class="nav-item">
                             <a class="nav-link menu-link <?php echo ($page == 'dashboard') ? 'active' : ''; ?>" href="<?php echo base_url('dashboard'); ?>">
                                <iconify-icon icon="solar:widget-2-bold-duotone" class="fs-25"></iconify-icon>&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">Dashboard </span>
                             </a>
                         </li>
                         <li class="nav-item">

                            <a class="nav-link menu-link <?php echo in_array($page, ['kpi_view', 'module_view', 'add_user_view']) ? 'active' : ''; ?>"  href="#sidebarLayouts"  data-bs-toggle="collapse"  role="button"  aria-expanded="<?php echo in_array($page, ['profile']) ? 'true' : 'false'; ?>"  aria-controls="sidebarLayouts">
                            <iconify-icon icon="solar:shield-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">Admin Setup </span><span class="badge badge-pill bg-danger" data-key="t-hot">New</span>
                            </a>

                            <div class="collapse menu-dropdown <?php echo in_array($page, ['kpi_view', 'module_view', 'add_user_view']) ? 'show' : ''; ?>" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('kpi_view'); ?>" class="nav-link fs-11 <?php echo ($page == 'kpi_view') ? 'active' : ''; ?>  "> &nbsp;&nbsp;&nbsp;&nbsp;Create KPI</a>
                                        <a href="<?php echo base_url('module_view'); ?>" class="nav-link fs-11 <?php echo ($page == 'module_view') ? 'active' : ''; ?>  "> &nbsp;&nbsp;&nbsp;&nbsp;Add Module | System <span class="badge badge-pill bg-danger" data-key="t-hot">New</span></a>
                                        <a href="<?php echo base_url('add_user_view'); ?>" class="nav-link fs-11 <?php echo ($page == 'add_user_view') ? 'active' : ''; ?>  "> &nbsp;&nbsp;&nbsp;&nbsp;Add User</a>
                                        <a href="#!" class="nav-link fs-11"> &nbsp;&nbsp;&nbsp;&nbsp;Create Rules | Regulations</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                         <li class="nav-item">
                             <a class="nav-link menu-link <?php echo ($page == 'request') ? 'active' : ''; ?> " href="<?php echo base_url('request'); ?>">
                                <iconify-icon icon="solar:shield-check-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">Request </span>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link menu-link" href="#!">
                                <iconify-icon icon="solar:database-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">Logs </span>
                             </a>
                         </li>


                         <li class="menu-title"><span data-key="t-menu">MENU </span></li>

                         <li class="nav-item">
                             <a class="nav-link menu-link <?php echo ($page == 'structure') ? 'active' : ''; ?>" href="<?php echo base_url('structure'); ?>">
                                <iconify-icon icon="solar:layers-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">Organization Structure </span>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link menu-link" href="#!">
                                <iconify-icon icon="solar:shield-warning-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">Rules | Regulations </span>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link menu-link <?php echo ($page == 'kpi') ? 'active' : ''; ?>" href="<?php echo base_url('kpi'); ?>">
                                <iconify-icon icon="solar:notebook-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">Key Personnel Indicator </span>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link menu-link <?php echo ($page == 'it_responsibilities') ? 'active' : ''; ?>" href="<?php echo base_url('it_responsibilities'); ?>">
                                <iconify-icon icon="solar:bug-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">IT Responsibilities </span>
                             </a>
                         </li>

                        <li class="nav-item">

                            <a class="nav-link menu-link <?php echo in_array($page, ['current_system', 'new_system']) ? 'active' : ''; ?>"  href="#sidebarLayouts2"  data-bs-toggle="collapse"  role="button"  aria-expanded="<?php echo in_array($page, ['current_system']) ? 'true' : 'false'; ?>"  aria-controls="sidebarLayouts">
                                <iconify-icon icon="solar:cpu-bolt-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">Current | New System </span>
                            </a>

                            <div class="collapse menu-dropdown <?php echo in_array($page, ['current_system', 'new_system']) ? 'show' : ''; ?>" id="sidebarLayouts2">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('current_system'); ?>" class="nav-link fs-11 <?php echo ($page == 'current_system') ? 'active' : ''; ?>"> &nbsp;&nbsp;&nbsp;&nbsp;Current System | Module</a>
                                        <a href="<?php echo base_url('new_system'); ?>" class="nav-link fs-11 <?php echo ($page == 'new_system') ? 'active' : ''; ?>"> &nbsp;&nbsp;&nbsp;&nbsp;New System | Module</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                         <li class="nav-item">
                             <a class="nav-link menu-link <?php echo ($page == 'gantt_view') ? 'active' : ''; ?>" href="<?php echo base_url('gantt_view'); ?>">
                                <iconify-icon icon="solar:align-bottom-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">Gantt Chart </span>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link menu-link" href="#!">
                                <iconify-icon icon="solar:folder-check-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">Deployment System </span>
                             </a>
                         </li>
                         
                         <li class="nav-item">
                             <a class="nav-link menu-link <?php echo ($page == 'meeting_schedule') ? 'active' : ''; ?>" href="<?php echo base_url('meeting_schedule'); ?>">
                                <iconify-icon icon="solar:checklist-minimalistic-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">Meeting Scheduled </span>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link menu-link" href="#!">
                                <iconify-icon icon="solar:map-point-wave-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">Setup Location </span>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link menu-link" href="#!">
                                <iconify-icon icon="solar:bill-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">IT Daily Task </span>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link menu-link" href="#!">
                                <iconify-icon icon="solar:folder-path-connect-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">Weekly Report </span>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a class="nav-link menu-link" href="#!">
                                <iconify-icon icon="solar:question-square-bold-duotone" class="fs-25"></iconify-icon >&nbsp;&nbsp;&nbsp;&nbsp;  <span class="fs-12">FAQ </span>
                             </a>
                         </li>

                     </ul>
                 </div>
                 <!-- Sidebar -->
             </div>
             <div class="sidebar-background"></div>
         </div>
         <!-- Left Sidebar End -->
         <!-- Vertical Overlay-->
         <div class="vertical-overlay"></div>

         <!-- ============================================================== -->
         <!-- Start right Content here -->
         <!-- ============================================================== -->
         <div class="main-content">
             <div class="page-content">
