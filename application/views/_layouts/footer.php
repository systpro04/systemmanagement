</div>
             <footer class="footer">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-sm-6">
                             <script>document.write(new Date().getFullYear())</script> © System Management.
                         </div>
                         <div class="col-sm-6">
                             <div class="text-sm-end d-none d-sm-block">
                                Design by IT - Sysdev't
                             </div>
                         </div>
                     </div>
                 </div>
             </footer>
         </div>
     </div>
     <!--preloader-->
     <div id="preloader">
        <div id="status">
            <img src="<?php echo base_url(); ?>assets/images/Hourglass.gif" alt="Loading..." class="avatar-sm" lazy="loading" style="height: 70px; width: 70px">
        </div>
    </div>

         <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
         <i class="ri-arrow-up-line"></i>
     </button>

    <div class="customizer-setting d-none d-md-block">
         <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings">
             <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
         </div>
     </div>

     <!-- Theme Settings -->
     <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings">
         <div class="d-flex align-items-center bg-primary p-3 offcanvas-header">
             <h5 class="m-0 me-2 text-white">Customize your theme here</h5>
             <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body p-0">
             <div data-simplebar="" class="h-100">
                 <div class="p-4">
                     <h6 class="mb-0 fw-semibold text-uppercase fs-12">Layout </h6>
                     <p class="text-muted">Choose your layout </p>

                     <div class="row gy-3">
                         <div class="col-4">
                             <div class="form-check card-radio">
                                 <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input" />
                                 <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="customizer-layout01">
                                     <span class="d-flex gap-1 h-100">
                                         <span class="flex-shrink-0">
                                             <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                 <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                             </span>
                                         </span>
                                         <span class="flex-grow-1">
                                             <span class="d-flex h-100 flex-column">
                                                 <span class="bg-light d-block p-1"></span>
                                                 <span class="bg-light d-block p-1 mt-auto"></span>
                                             </span>
                                         </span>
                                     </span>
                                 </label>
                             </div>
                             <h5 class="fs-13 text-center mt-2">Vertical </h5>
                         </div>
                         <div class="col-4">
                             <div class="form-check card-radio">
                                 <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input" />
                                 <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="customizer-layout02">
                                     <span class="d-flex h-100 flex-column gap-1">
                                         <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                             <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                             <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                             <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                         </span>
                                         <span class="bg-light d-block p-1"></span>
                                         <span class="bg-light d-block p-1 mt-auto"></span>
                                     </span>
                                 </label>
                             </div>
                             <h5 class="fs-13 text-center mt-2">Horizontal </h5>
                         </div>

                         <div class="col-4">
                             <div class="form-check card-radio">
                                 <input id="customizer-layout04" name="data-layout" type="radio" value="semibox" class="form-check-input" />
                                 <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="customizer-layout04">
                                     <span class="d-flex gap-1 h-100">
                                         <span class="flex-shrink-0 p-1">
                                             <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                 <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                             </span>
                                         </span>
                                         <span class="flex-grow-1">
                                             <span class="d-flex h-100 flex-column pt-1 pe-2">
                                                 <span class="bg-light d-block p-1"></span>
                                                 <span class="bg-light d-block p-1 mt-auto"></span>
                                             </span>
                                         </span>
                                     </span>
                                 </label>
                             </div>
                             <h5 class="fs-13 text-center mt-2">Semi Box </h5>
                         </div>
                         <!-- end col -->
                     </div>

                     <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Color Scheme </h6>
                     <p class="text-muted">Choose Light or Dark Theme. </p>

                     <div class="colorscheme-cardradio">
                         <div class="row">
                             <div class="col-4">
                                 <div class="form-check card-radio">
                                     <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light" value="light" />
                                     <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="layout-mode-light">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-shrink-0">
                                                 <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                     <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Light </h5>
                             </div>

                             <div class="col-4">
                                 <div class="form-check card-radio dark">
                                     <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark" value="dark" />
                                     <label class="form-check-label p-0 avatar-md w-100 shadow-sm bg-dark" for="layout-mode-dark">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-shrink-0">
                                                 <span class="bg-white bg-opacity-10 d-flex h-100 flex-column gap-1 p-1">
                                                     <span class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column">
                                                     <span class="bg-white bg-opacity-10 d-block p-1"></span>
                                                     <span class="bg-white bg-opacity-10 d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Dark </h5>
                             </div>
                         </div>
                     </div>

                     <div id="sidebar-visibility">
                         <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Sidebar Visibility </h6>
                         <p class="text-muted">Choose show or Hidden Sidebar. </p>
                
                         <div class="row">
                             <div class="col-4">
                                 <div class="form-check card-radio">
                                     <input class="form-check-input" type="radio" name="data-sidebar-visibility" id="sidebar-visibility-show" value="show" />
                                     <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-visibility-show">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-shrink-0 p-1">
                                                 <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                     <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column pt-1 pe-2">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Show </h5>
                             </div>
                             <div class="col-4">
                                 <div class="form-check card-radio">
                                     <input class="form-check-input" type="radio" name="data-sidebar-visibility" id="sidebar-visibility-hidden" value="hidden" />
                                     <label class="form-check-label p-0 avatar-md w-100 px-2 shadow-sm" for="sidebar-visibility-hidden">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column pt-1 px-2">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Hidden </h5>
                             </div>
                         </div>
                     </div>

                     <div id="layout-width">
                         <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Layout Width </h6>
                         <p class="text-muted">Choose Fluid or Boxed Layout. </p>

                         <div class="row">
                             <div class="col-4">
                                 <div class="form-check card-radio">
                                     <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid" />
                                     <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="layout-width-fluid">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-shrink-0">
                                                 <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                     <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Fluid </h5>
                             </div>
                             <div class="col-4">
                                 <div class="form-check card-radio">
                                     <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed" />
                                     <label class="form-check-label p-0 avatar-md w-100 shadow-sm px-2" for="layout-width-boxed">
                                         <span class="d-flex gap-1 h-100 border-start border-end">
                                             <span class="flex-shrink-0">
                                                 <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                     <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Boxed </h5>
                             </div>
                         </div>
                     </div>

                     <div id="layout-position">
                         <!-- <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Layout Position </h6>
                         <p class="text-muted">Choose Fixed or Scrollable ______ Position. </p>

                         <div class="btn-group radio" role="group">
                             <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed" />
                             <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed </label>

                             <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable" />
                             <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable </label>
                         </div> -->
                     </div>
                     <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Topbar Color </h6>
                     <p class="text-muted">Choose Light or Dark Topbar Color. </p>

                     <div class="row">
                         <div class="col-4">
                             <div class="form-check card-radio">
                                 <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light" />
                                 <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="topbar-color-light">
                                     <span class="d-flex gap-1 h-100">
                                         <span class="flex-shrink-0">
                                             <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                 <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                             </span>
                                         </span>
                                         <span class="flex-grow-1">
                                             <span class="d-flex h-100 flex-column">
                                                 <span class="bg-light d-block p-1"></span>
                                                 <span class="bg-light d-block p-1 mt-auto"></span>
                                             </span>
                                         </span>
                                     </span>
                                 </label>
                             </div>
                             <h5 class="fs-13 text-center mt-2">Light </h5>
                         </div>
                         <div class="col-4">
                             <div class="form-check card-radio">
                                 <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark" />
                                 <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="topbar-color-dark">
                                     <span class="d-flex gap-1 h-100">
                                         <span class="flex-shrink-0">
                                             <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                 <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                             </span>
                                         </span>
                                         <span class="flex-grow-1">
                                             <span class="d-flex h-100 flex-column">
                                                 <span class="bg-dark d-block p-1"></span>
                                                 <span class="bg-light d-block p-1 mt-auto"></span>
                                             </span>
                                         </span>
                                     </span>
                                 </label>
                             </div>
                             <h5 class="fs-13 text-center mt-2">Dark </h5>
                         </div>
                     </div>

                     <div id="sidebar-size">
                         <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Sidebar Size </h6>
                         <p class="text-muted">Choose a size of sidebar. </p>

                         <div class="row">
                             <div class="col-4">
                                 <div class="form-check sidebar-setting card-radio">
                                     <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg" />
                                     <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-size-default">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-shrink-0">
                                                 <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                     <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Default </h5>
                             </div>

                             <div class="col-4">
                                 <div class="form-check sidebar-setting card-radio">
                                     <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md" />
                                     <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-size-compact">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-shrink-0">
                                                 <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                     <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                     <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Compact </h5>
                             </div>

                             <div class="col-4">
                                 <div class="form-check sidebar-setting card-radio">
                                     <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm" />
                                     <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-size-small">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-shrink-0">
                                                 <span class="bg-light d-flex h-100 flex-column gap-1">
                                                     <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                     <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Small (Icon View) </h5>
                             </div>

                             <div class="col-4">
                                 <div class="form-check sidebar-setting card-radio">
                                     <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover" />
                                     <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-size-small-hover">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-shrink-0">
                                                 <span class="bg-light d-flex h-100 flex-column gap-1">
                                                     <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                     <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Small Hover View </h5>
                             </div>
                         </div>
                     </div>

                     <div id="sidebar-view">
                         <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Sidebar View </h6>
                         <p class="text-muted">Choose Default or Detached sidebar view. </p>

                         <div class="row">
                             <div class="col-4">
                                 <div class="form-check sidebar-setting card-radio">
                                     <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default" />
                                     <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-view-default">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-shrink-0">
                                                 <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                     <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Default </h5>
                             </div>
                             <div class="col-4">
                                 <div class="form-check sidebar-setting card-radio">
                                     <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached" />
                                     <label class="form-check-label p-0 avatar-md w-100 shadow-sm" for="sidebar-view-detached">
                                         <span class="d-flex h-100 flex-column">
                                             <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                 <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                 <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                 <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                             </span>
                                             <span class="d-flex gap-1 h-100 p-1 px-2">
                                                 <span class="flex-shrink-0">
                                                     <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                         <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                         <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                         <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     </span>
                                                 </span>
                                             </span>
                                             <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Detached </h5>
                             </div>
                         </div>
                     </div>
                     <div id="sidebar-color">
                         <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Sidebar Color </h6>
                         <p class="text-muted">Choose a color for sidebar. </p>

                         <div class="row">
                             <div class="col-4">
                                 <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                     <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light" />
                                     <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-shrink-0">
                                                 <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                     <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Light </h5>
                             </div>
                             <div class="col-4">
                                 <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                     <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark" />
                                     <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-shrink-0">
                                                 <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                     <span class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Dark </h5>
                             </div>
                             <div class="col-4">
                                 <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                     <span class="d-flex gap-1 h-100">
                                         <span class="flex-shrink-0">
                                             <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                 <span class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                 <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                             </span>
                                         </span>
                                         <span class="flex-grow-1">
                                             <span class="d-flex h-100 flex-column">
                                                 <span class="bg-light d-block p-1"></span>
                                                 <span class="bg-light d-block p-1 mt-auto"></span>
                                             </span>
                                         </span>
                                     </span>
                                 </button>
                                 <h5 class="fs-13 text-center mt-2">Gradient </h5>
                             </div>
                         </div>
                         <!-- end row -->

                         <div class="collapse" id="collapseBgGradient">
                             <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                 <div class="form-check sidebar-setting card-radio">
                                     <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient" />
                                     <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                         <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                     </label>
                                 </div>
                                 <div class="form-check sidebar-setting card-radio">
                                     <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2" />
                                     <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                         <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                     </label>
                                 </div>
                                 <div class="form-check sidebar-setting card-radio">
                                     <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3" />
                                     <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                         <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                     </label>
                                 </div>
                                 <div class="form-check sidebar-setting card-radio">
                                     <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4" />
                                     <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                         <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                     </label>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div id="sidebar-img">
                         <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Sidebar Images </h6>
                         <p class="text-muted">Choose a image background. </p>

                         <div class="d-flex gap-2 flex-wrap img-switch">
                             <div class="form-check sidebar-setting card-radio">
                                 <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none" />
                                 <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                     <span class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                         <i class="ri-close-fill fs-20"></i>
                                     </span>
                                 </label>
                             </div>

                             <div class="form-check sidebar-setting card-radio">
                                 <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1" />
                                 <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                     <img src="assets/images/sidebar/img-1.jpg" alt="" class="avatar-md w-auto object-fit-cover" />
                                 </label>
                             </div>	

                             <div class="form-check sidebar-setting card-radio">
                                 <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2" />
                                 <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                     <img src="assets/images/sidebar/img-2.jpg" alt="" class="avatar-md w-auto object-fit-cover" />
                                 </label>
                             </div>
                             <div class="form-check sidebar-setting card-radio">
                                 <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3" />
                                 <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                     <img src="assets/images/sidebar/img-3.jpg" alt="" class="avatar-md w-auto object-fit-cover" />
                                 </label>
                             </div>
                             <div class="form-check sidebar-setting card-radio">
                                 <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4" />
                                 <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                     <img src="assets/images/sidebar/img-4.jpg" alt="" class="avatar-md w-auto object-fit-cover" />
                                 </label>
                             </div>
                         </div>
                     </div>

                     <div id="preloader-menu">
                         <h6 class="mt-4 mb-0 fw-semibold text-uppercase fs-12">Preloader </h6>
                         <p class="text-muted">Choose a preloader. </p>
                    
                         <div class="row">
                             <div class="col-4">
                                 <div class="form-check sidebar-setting card-radio">
                                     <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom" value="enable" />
                                     <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-custom">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-shrink-0">
                                                 <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                     <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                         <!-- <div id="preloader"> -->
                                         <div id="status" class="d-flex align-items-center justify-content-center">
                                             <div class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                                 <span class="visually-hidden">Loading... </span>
                                             </div>
                                         </div>
                                         <!-- </div> -->
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Enable </h5>
                             </div>
                             <div class="col-4">
                                 <div class="form-check sidebar-setting card-radio">
                                     <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none" value="disable" />
                                     <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-none">
                                         <span class="d-flex gap-1 h-100">
                                             <span class="flex-shrink-0">
                                                 <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                     <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                     <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                 </span>
                                             </span>
                                             <span class="flex-grow-1">
                                                 <span class="d-flex h-100 flex-column">
                                                     <span class="bg-light d-block p-1"></span>
                                                     <span class="bg-light d-block p-1 mt-auto"></span>
                                                 </span>
                                             </span>
                                         </span>
                                     </label>
                                 </div>
                                 <h5 class="fs-13 text-center mt-2">Disable </h5>
                             </div>
                         </div>
                    
                     </div>
                 </div>
             </div>

         </div>
         <div class="offcanvas-footer border-top p-3 text-center">
             <div class="row">
                 <div class="col-12">
                     <button type="button" class="btn btn-primary w-100" id="reset-layout">Reset All Changes</button>
                 </div>
             </div>
         </div>
     </div>


     <!--end back-to-top-->
     <!-- JAVASCRIPT -->
     <script src="<?php echo base_url(); ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/libs/simplebar/simplebar.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/libs/node-waves/waves.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/libs/feather-icons/feather.min.js"></script>
     
     <!-- App js -->
     <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/select2.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>
         <!-- dropzone min -->
    <script src="<?php echo base_url(); ?>assets/js/dropzone.js"></script>
     <!-- filepond js -->
    <script src="<?php echo base_url(); ?>assets/js/filepond.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/filepond-plugin-image-preview.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/filepond-plugin-file-validate-size.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/filepond-plugin-file-encode.min.js"></script>


    <script>
        Array.from(document.querySelectorAll("form .auth-pass-inputgroup")).forEach(
            function (e) {
                Array.from(e.querySelectorAll(".password-addon")).forEach(function (r) {
                    r.addEventListener("click", function (r) {
                        var o = e.querySelector(".password-input");
                        "password" === o.type ? (o.type = "text") : (o.type = "password");
                    });
                });
            }
        );
    </script>
    <script>
        var previewTemplate,
            dropzone,
            dropzonePreviewNode = document.querySelector("#dropzone-preview-list");

        if (dropzonePreviewNode) {
            previewTemplate = dropzonePreviewNode.parentNode.innerHTML;
            dropzonePreviewNode.parentNode.removeChild(dropzonePreviewNode);
            dropzone = new Dropzone(".dropzone", {
                url: "https://httpbin.org/post",
                method: "post",
                previewTemplate: previewTemplate,
                previewsContainer: "#dropzone-preview",
            });
        }


            // FilePond initialization
        FilePond.registerPlugin(
            FilePondPluginFileEncode,
            FilePondPluginFileValidateSize,
            FilePondPluginImageExifOrientation,
            FilePondPluginImagePreview
        );

        // Initialize FilePond on file input elements
        document.querySelectorAll("input.filepond-input-multiple").forEach(function (inputElement) {
            FilePond.create(inputElement);
        });
        document.addEventListener('DOMContentLoaded', function() {
        // Initialize FilePond with custom options for a specific input
        FilePond.create(document.querySelector(".filepond-input-circle"), {
            labelIdle: 'Drag & Drop your picture or <span class="filepond--label-action">Browse</span>',
            imagePreviewHeight: 50,
            imageCropAspectRatio: "1:1",
            imageResizeTargetWidth: 100,
            imageResizeTargetHeight: 100,
            stylePanelLayout: "compact circle",
            styleLoadIndicatorPosition: "center bottom",
            styleProgressIndicatorPosition: "right bottom",
            styleButtonRemoveItemPosition: "left bottom",
            styleButtonProcessItemPosition: "right bottom",
        });
    });
        
    </script>

<script type="text/javascript">
    function swal_message1(msg_type, msg) {
        toastr.options = {
            progressBar: true,
            positionClass: "toast-top-left",
            timeOut: 5000,
            extendedTimeOut: 2000,
            preventDuplicates: true,
        };

        toastr.success(
            `${msg}`,
        );
    }

    <?php
    if ($this->session->flashdata('SUCCESSMSG')) {
        date_default_timezone_set('Asia/Manila');
        $hour = date("H");
        $name = $this->session->userdata('name');

        if ($hour >= 5 && $hour < 12) {
            $greeting = 'Good Morning, ';
        } elseif ($hour >= 12 && $hour < 17) {
            $greeting = 'Good Afternoon, ';
        } else {
            $greeting = 'Good Evening, ';
        }

        $greeting = addslashes($greeting);
        $name = addslashes($name);

        echo "swal_message1('success', '{$greeting} {$name}');";
    }
    ?>
</script>

<script>
    $(document).ready(function () {
        $('#page-header-notifications-dropdown').on('click', function () {
            $.ajax({
                url: '<?php echo base_url('fetch_notifications'); ?>',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    let notificationsHtml = '';

                    if (data.length > 0) {
                        data.forEach(notification => {
                            // Format the date_uploaded into a human-readable format
                            const dateUploaded = new Date(notification.date_uploaded);
                            const formattedDate = dateUploaded.toLocaleString('en-US', {
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric',
                                hour: 'numeric',
                                minute: '2-digit',
                                hour12: true
                            });

                            notificationsHtml += 
                                `
                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3 flex-shrink-0">
                                            <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                                <i class="bx bx-badge-check"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 mb-2 lh-base">Team <b>${notification.team_name} </b> added a new request  
                                                    <span class="text-secondary">for </span> Approval! 
                                                    <span><b>( ${notification.uploaded_to} | ${notification.mod_name} | ${notification.typeofsystem} )</b></span>
                                                </h6>
                                            </a>
                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> ${formattedDate} </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>`;
                        });
                    } else {
                        notificationsHtml = '<p class="text-center text-muted py-2">No new notifications</p>';
                    }
                    $('#all-noti-tab .pe-2').html(notificationsHtml);
                },
            });
        });
    });


    function updateNotificationCount() {
        $.ajax({
            url: '<?php echo base_url('get_notification_count') ?>',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                if (response.count > 0) {
                    $('.rcount').text(response.count).show();
                } else {
                    $('.rcount').text('0').show();
                }
            },
        });
    }

    updateNotificationCount();

    $('#messages').on('click', function () {
            $.ajax({
                url: '<?php echo base_url('fetch_messages'); ?>',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    let messagesHtml = '';

                    if (data.length > 0) {
                        data.forEach(messages => {
                            const dateUploaded = new Date(messages.date_send);
                            const formattedDate = dateUploaded.toLocaleString('en-US', {
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric',
                                hour: 'numeric',
                                minute: '2-digit',
                                hour12: true
                            });

                            messagesHtml += 
                                `
                                <div class="text-reset notification-item d-block dropdown-item position-relative">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3 flex-shrink-0">
                                            <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                              <iconify-icon icon="cryptocurrency-color:chat" width="32" height="32"></iconify-icon>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <a href="#!" class="stretched-link">
                                                <h6 class="mt-0 mb-2 lh-base"><b>${messages.name} </b> sent you a new message
                                                </h6>
                                            </a>
                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                <span><i class="mdi mdi-clock-outline"></i> ${formattedDate} </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>`;
                        });
                    } else {
                        messagesHtml = '<p class="text-center text-muted py-2">No new messagess</p>';
                    }
                    $('#all-mes-tab .pe-2').html(messagesHtml);
                },
            });
        });
    function updateMessages() {
        $.ajax({
            url: '<?php echo base_url('get_messages_count') ?>',
            type: 'GET',
            dataType: 'json',
            success: function (response) {
                if (response.count > 0) {
                    $('.m-count').text(response.count).show();
                } else {
                    $('.m-count').text('0').show();
                }
            },
        });
    }
    updateMessages();

</script>

<script>
    $(document).ready(function () {

    function updateMarquee(todayBirthdays) {
        const marqueeContainer = $('#birthday-marquee');

        if (todayBirthdays.length > 0) {
            const marqueeContent = `<iconify-icon icon="noto:confetti-ball"></iconify-icon> Happy Birthday to ${todayBirthdays.join('   and   ')} <iconify-icon icon="emojione-v1:birthday-cake"></iconify-icon>`;
            marqueeContainer.html(`
                <marquee behavior="scroll" direction="left" scrollamount="10">
                    ${marqueeContent}
                </marquee>
            `);
        }
    }
    fetchAndUpdateMarquee();
    function fetchAndUpdateMarquee() {
    $.ajax({
        url: "<?php echo base_url('get_birthdays'); ?>",
        type: "GET",
        data: {
            month: new Date().getMonth() + 1,
            year: new Date().getFullYear(),
        },
        dataType: "json",
        success: function (response) {
            if (response.status === 'success' && response.data.length > 0) {
                const today = new Date();
                const todayBirthdays = response.data
                    .filter(birthday => {
                        const birthDate = new Date(birthday.birthdate);
                        return (
                            birthDate.getDate() === today.getDate() &&
                            birthDate.getMonth() === today.getMonth()
                        );
                    })
                    .map(person => {
                        // Capitalize the first letter of each name and last name
                        const fullName = `${person.firstname} ${person.lastname}`;
                        return capitalizeName(fullName);
                    });
                updateMarquee(todayBirthdays);
            }
        },
    });
}


function capitalizeName(name) {
    return name.split(' ').map(word => {
        return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
    }).join(' ');
}


});

</script>
<style>
    .header-marquee {
    /* background-color: #f7f7f7; */
    /* color: #333 !important; */
    color: #f7f7f7 !important;
    /* font-weight: bold; */
    color: black;
    width: 800px;



}

marquee {
    display: block;
    font-size: 30px;
    font-family: 'BirthdayFont', the-richland; 

}
@font-face {
    font-family: 'BirthdayFont';
    src: url('<?php echo base_url("assets/fonts/chicken.otf"); ?>') format('opentype');
    font-weight: normal;
    font-style: normal;
}




</style>



 </body>

 </html>