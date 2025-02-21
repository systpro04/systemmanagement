<!doctype html>
<html lang="en" data-preloader="enable">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <meta charset="utf-8" />
        <title>Authentication</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" /> -->
        <script src="<?php echo base_url(); ?>assets/js/layout.js"></script>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet"
            type="text/css" />
        <!-- Toastr CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/toastr.css">
        <!-- Toastr JS -->
    </head>

    <body>
        <div class="auth-page-wrapper pt-5">
            <div class="auth-one-bg-position" id="auth-particles" style="background-color: black">
                <div class="bg-overlay"></div>
                <div class="shape">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewbox="0 0 1440 120">
                        <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="auth-page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center mt-5">
                                <div>
                                    <a href="#" class="d-inline-block auth-logo">
                                        <img src="<?php echo base_url(); ?>assets/images/logo-light.png" alt="" height="90" width="300" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4 col-xl-4">
                            <div class="card mt-4" style="border-radius: 20px">
                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Welcome Back ! </h5>
                                        <p class="text-muted">Sign in to continue. </p>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <form action="<?php echo base_url('login_data') ?>" method="post">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username </label>
                                                <input type="text" class="form-control rounded-pill" id="username" name="username" placeholder="Enter username" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="password-input">Password </label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" class="form-control pe-5 password-input rounded-pill" placeholder="Enter password" id="password" name="password" />
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                            </div>
                                            <button class="button ">
                                                <span class="button_lg rounded-pill">
                                                    <span class="button_sl"></span>
                                                    <span class="button_text">login</span>
                                                </span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class='box'>
                    <div class='box-form'>
                        <div class='box-login-tab'></div>
                        <div class='box-login-title'>
                            <div class='i i-login'></div>
                            <h2 class="fw-bold">LOGIN</h2>
                        </div>
                        <div class='box-login'>
                            <div class='fieldset-body' id='login_form'>
                                <form action="<?php echo base_url('login_data') ?>" method="post">
                                <div class='line-wh'></div>
                                    <p class='field mt-3'>
                                        <label for='user'>Username</label>
                                        <input type='text' class="form-control pe-5 rounded-pill" id='username' name='username' title='Username' />
                                    </p>
                                    <p class='field'>
                                        <label for="password-input">Password </label>
                                        <div class="position-relative auth-pass-inputgroup mb-3" style="width: 88%; margin-left: 6%;">
                                            <input type="password" class="form-control pe-5 password-input rounded-pill" id="password" name="password" autocomplete="on"/>
                                            <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted shadow-none password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                        </div>
                                    </p>
                                    <input type='submit' value='LOGIN' title='Get Started' />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class='box-info'>
                        <p><a class='b b-info i i-left' title='Back to Sign In'></a>
                        </p>
                        <div class='line-wh'></div>
                        <a onclick="" class='b-support' title='Forgot Password?'></a>
                        <a onclick="" class='b-support' title='Contact Support'></a>
                        <div class='line-wh'></div>
                        <div class='line-wh'></div>
                        <div class='line-wh'></div>
                        <div class='line-wh'></div>
                        <div class='line-wh'></div>
                        <div class='line-wh'></div>
                        <div class='line-wh'></div>
                        <div class='line-wh'></div>
                        <div class='line-wh'></div>
                        <div class='line-wh'></div>
                        <div class='line-wh'></div>
                        <a onclick="" class='b-cta' title='Sign up now!'></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- <style>
            .button {
                -moz-appearance: none;
                -webkit-appearance: none;
                appearance: none;
                border: none;
                background: none;
                color: #0f1923;
                cursor: pointer;
                position: relative;
                padding: 6px;
                margin-bottom: 20px;
                text-transform: uppercase;
                font-weight: bold;
                font-size: 14px;
                transition: all .15s ease;
            }


            .button_lg {
                position: relative;
                display: block;
                padding: 10px 118px;
                color: #fff;
                background-color: #0f1923;
                overflow: hidden;
                box-shadow: inset 0px 0px 0px 1px transparent;
            }

            .button_lg::before {
                content: '';
                display: block;
                position: absolute;
                top: 0;
                left: 0;
                width: 2px;
                height: 2px;
                background-color: #0f1923;
            }

            .button_lg::after {
                content: '';
                display: block;
                position: absolute;
                right: 0;
                bottom: 0;
                width: 4px;
                height: 4px;
                background-color: #0f1923;
                transition: all .2s ease;
            }

            .button_sl {
                display: block;
                position: absolute;
                top: 0;
                bottom: -1px;
                left: -8px;
                width: 0;
                background-color: rgb(0, 81, 255);
                transform: skew(-15deg);
                transition: all .2s ease;
            }

            .button_text {
                position: relative;
            }

            .button:hover {
                color: #0f1923;
            }

            .button:hover .button_sl {
                width: calc(100% + 15px);
            }

            .button:hover .button_lg::after {
                background-color: #fff;
            }
        </style> -->
        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url(); ?>assets/js/jquery3.6.0.js"></script>

        <script src="<?php echo base_url(); ?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs/node-waves/waves.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs/feather-icons/feather.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/password-addon.init.js"></script>
        <script src="<?php echo base_url(); ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/toastr.js"></script>
        <script type="text/javascript">
            <?php if ($this->session->flashdata('message')): ?>

                    $(document).ready(function() {
                        var message = "<?php echo $this->session->flashdata('message'); ?>";
                        var messageType = "<?php echo $this->session->flashdata('message_type'); ?>";

                        toastr.options = {
                            progressBar: true,
                            positionClass: "toast-top-right",
                            timeOut: 5000,
                            extendedTimeOut: 2000,
                            preventDuplicates: true,
                        };

                        if (messageType === "success") {
                            toastr.success(message);
                        } else if (messageType === "error") {
                            toastr.error(message);
                        } else if (messageType === "warning") {
                            toastr.warning(message);
                        } else if (messageType === "info") {
                            toastr.info(message);
                        }
                    });

            <?php endif; ?>

        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const form = document.querySelector('form');
                const username = document.getElementById('username');
                const password = document.getElementById('password');

                form.addEventListener('submit', function (e) {
                    let isValid = true;
                    username.classList.remove('is-invalid');
                    password.classList.remove('is-invalid');
                    if (username.value.trim() === '') {
                        username.classList.add('is-invalid');
                        isValid = false;
                    }

                    if (password.value.trim() === '') {
                        password.classList.add('is-invalid');
                        isValid = false;
                    }
                    if (!isValid) {
                        e.preventDefault();
                    }
                });
            });
        </script>

    </body>

</html>

<style>
    h2,
    h3 {
        font-size: 16px;
        letter-spacing: -1px;
        line-height: 20px;
    }

    h2 {
        color: #747474;
        text-align: center;
    }

    h3 {
        color: #032942;
        text-align: right;
    }

    /*--------------------
Icons
---------------------*/
    .i {
        width: 20px;
        height: 20px;
    }

    .box {
        width: 330px;
        position: absolute;
        top: 170%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .box-form {
        width: 320px;
        position: relative;
        z-index: 1;
    }

    .box-login-tab {
        width: 60%;
        height: 39px;
        background: #fdfdfd;
        position: relative;
        float: left;
        z-index: 1;

        -webkit-border-radius: 6px 6px 0 0;
        -moz-border-radius: 6px 6px 0 0;
        border-radius: 6px 6px 0 0;

        -webkit-transform: perspective(5px) rotateX(0.93deg) translateZ(-1px);
        transform: perspective(5px) rotateX(0.93deg) translateZ(-1px);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;

        -webkit-box-shadow: 15px -15px 30px rgba(0, 0, 0, 0.32);
        -moz-box-shadow: 15px -15px 30px rgba(0, 0, 0, 0.32);
        box-shadow: 15px -15px 30px rgba(0, 0, 0, 0.32);
    }

    .box-login-title {
        width: 53%;
        height: 40px;
        position: absolute;
        float: left;
        z-index: 2;
    }

    .box-login {
        position: relative;
        top: -4px;
        width: 320px;
        background: #fdfdfd;
        text-align: center;
        overflow: hidden;
        z-index: 2;
        border-top-right-radius: 6px;
        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
        box-shadow: 5px 20px 25px rgba(0, 0, 0, 0.32);
    }

    .box-info {
        width: 260px;
        top: 60px;
        position: absolute;
        right: -5px;
        padding: 15px 15px 15px 30px;
        background-color: rgba(255, 255, 255, 0.6);
        border: 1px solid rgba(255, 255, 255, 0.2);
        z-index: 0;
        border-radius: 6px;
        box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.32);
    }

    .line-wh {
        width: 100%;
        height: 1px;
        top: 0px;
        margin: 12px auto;
        position: relative;
    }


    a {
        text-decoration: none;
    }

    button:focus {
        outline: 0;
    }

    .b {
        height: 24px;
        line-height: 24px;
        background-color: transparent;
        border: none;
        cursor: pointer;
    }

    .b-form {
        opacity: 0.5;
        margin: 10px 20px;
        float: right;
    }

    .b-info {
        opacity: 0.5;
        float: left;
    }

    .b-form:hover,
    .b-info:hover {
        opacity: 1;
    }

    .b-support,
    .b-cta {
        width: 100%;
        padding: 0px 15px;
        font-family: 'Quicksand', sans-serif;
        font-weight: 700;
        letter-spacing: -1px;
        font-size: 16px;
        line-height: 32px;
        cursor: pointer;

        -webkit-border-radius: 16px;
        -moz-border-radius: 16px;
        border-radius: 16px;
    }

    .b-support {
        border: rgb(14, 51, 233) 1px solid;
        background-color: transparent;
        color: rgb(14, 51, 233);
        margin: 6px 0;
    }

    .b-cta {
        border: rgb(14, 51, 233) 1px solid;
        background-color: rgb(14, 51, 233);
        color: #fff;
    }

    .b-support:hover,
    .b-cta:hover {
        color: #fff;
        background-color: rgb(14, 51, 233);
        border: rgb(14, 51, 233) 1px solid;
    }

    .fieldset-body {
        display: table;
    }

    .fieldset-body p {
        width: 100%;
        display: inline-table;
        padding: 5px 20px;
        margin-bottom: 2px;
    }

    label {
        float: left;
        width: 100%;
        top: 0px;
        color: #032942;
        font-size: 13px;
        font-weight: 700;
        text-align: left;
        line-height: 1.5;
    }

    label.checkbox {
        float: left;
        padding: 5px 20px;
        line-height: 1.7;
    }

    input[type=text],
    input[type=password] {
        width: 100%;
        height: 40px;
        padding: 0px 10px;
        background-color: rgba(0, 0, 0, 0.03);
        border: none;
        display: inline;
        color: #303030;
        font-size: 12px;
        font-weight: 400;
        float: left;
        border-radius: 10px;
        -webkit-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        -moz-box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
        box-shadow: inset 1px 1px 0px rgba(0, 0, 0, 0.05), 1px 1px 0px rgba(255, 255, 255, 1);
    }

    input[type=text]:focus,
    input[type=password]:focus {
        background-color: #f8f8c6;
        outline: none;
    }

    input[type=submit] {
        width: 100%;
        height: 48px;
        margin-top: 24px;
        padding: 0px 20px;
        font-family: 'Quicksand', sans-serif;
        font-weight: 700;
        font-size: 18px;
        color: #fff;
        line-height: 40px;
        text-align: center;
        background-color: rgb(14, 51, 233);
        border: 1px rgb(14, 51, 233) solid;
        opacity: 1;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: rgb(14, 51, 233);
        border: 1px rgb(14, 51, 233) solid;
    }

    input[type=submit]:focus {
        outline: none;
    }

    p.field span.i {
        width: 24px;
        height: 24px;
        float: right;
        position: relative;
        margin-top: -26px;
        right: 2px;
        z-index: 2;
        display: none;
    }
    .swal2-container {
  z-index: 999999999 !important; /* Adjust this value as needed */
}

</style>