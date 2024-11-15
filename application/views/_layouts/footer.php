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
            <img src="<?php echo base_url(); ?>assets/images/cube.gif" alt="Loading..." class="avatar-sm" lazy="loading" style="height: 150px; width: 150px">
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
     <script src="<?php echo base_url(); ?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
     <!-- apexcharts -->
     <!-- <script src="<?php echo base_url(); ?>assets/libs/apexcharts/apexcharts.min.js"></script> -->
     <script type="text/javascript" src="<?php echo base_url(); ?>assets/libs/flatpickr/flatpickr.min.js"></script>

     <!-- App js -->
     <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/select2.js"></script>
    <script src="<?php echo base_url(); ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/pages/sweetalerts.init.js"></script>

         <!-- dropzone min -->
    <script src="<?php echo base_url(); ?>assets/js/dropzone.js"></script>
     <!-- filepond js -->
    <script src="<?php echo base_url(); ?>assets/js/filepond.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/filepond-plugin-image-preview.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/filepond-plugin-file-validate-size.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/filepond-plugin-image-exif-orientation.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/filepond-plugin-file-encode.min.js"></script>

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
 </body>

 </html>