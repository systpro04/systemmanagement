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
         <!-- end main content-->

     </div>
     <!-- END layout-wrapper -->





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
            positionClass: "toast-top-center",
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
            $greeting = 'GOOD MORNING, ';
        } elseif ($hour >= 12 && $hour < 17) {
            $greeting = 'GOOD AFTERNOON, ';
        } else {
            $greeting = 'GOOD EVENING, ';
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
                    $('.topbar-badge, .count').text(response.count).show();
                } else {
                    $('.topbar-badge, .count').text('0').show();
                }
            },
        });
    }

    updateNotificationCount();

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