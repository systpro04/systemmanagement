<!doctype html>
 <html lang="en" data-preloader="enable">
 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

     <meta charset="utf-8" />
     <title>Login</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" />
     <script src="<?php echo base_url(); ?>assets/js/layout.js"></script>
     <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url(); ?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />

 </head>

 <body>
     <div class="auth-page-wrapper pt-5">
         <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
             <div class="bg-overlay"></div>
             <div class="shape">
                 <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewbox="0 0 1440 120">
                     <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
                 </svg>
             </div>
         </div>
         <div class="auth-page-content">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <div class="text-center mt-sm-5 mb-4 text-white-50">
                             <div>
                                 <a href="#" class="d-inline-block auth-logo">
                                     <img src="<?php echo base_url(); ?>assets/images/logo-light.png" alt="" height="40" />
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row justify-content-center">
                     <div class="col-md-8 col-lg-6 col-xl-5">
                         <div class="card mt-4">
                             <div class="card-body p-4">
                                 <div class="text-center mt-2">
                                     <h5 class="text-primary">Welcome Back ! </h5>
                                     <p class="text-muted">Sign in to continue. </p>
                                 </div>
                                 <div class="p-2 mt-4">
                                     <form action="<?php echo base_url('login') ?>">
                                         <div class="mb-3">
                                             <label for="username" class="form-label">Username </label>
                                             <input type="text" class="form-control" id="username" placeholder="Enter username" />
                                         </div>
                                         <div class="mb-3">
                                             <label class="form-label" for="password-input">Password </label>
                                             <div class="position-relative auth-pass-inputgroup mb-3">
                                                 <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" />
                                                 <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                             </div>
                                         </div>
                                         <div class="form-check">
                                             <input class="form-check-input" type="checkbox" value="" id="auth-remember-check" />
                                             <label class="form-check-label" for="auth-remember-check">Remember me </label>
                                         </div>
                                         <div class="mt-4">
                                             <button class="btn btn-success w-100" type="submit">Log In </button>
                                         </div>
                                     </form>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- JAVASCRIPT -->
     <script src="<?php echo base_url(); ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/libs/simplebar/simplebar.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/libs/node-waves/waves.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/libs/feather-icons/feather.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
     <script src="<?php echo base_url(); ?>assets/libs/particles.js/particles.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/pages/particles.app.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/pages/password-addon.init.js"></script>

     <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
 </body>

 </html>