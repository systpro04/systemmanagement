
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">FS | PROCESS | RMS | SYSDEV GALLERY</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Pages </a></li>
                        <li class="breadcrumb-item active">Gallery </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center">
                                <ul class="list-inline categories-filter animation-nav" id="filter"></ul>
                            </div>
                            <div class="row gallery-wrapper" style="clear: both" id="gallery"></div>
                        </div>
                        <div id="pagination-controls" class="pagination mb-2"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 


<script>
    $(document).ready(function () {
        $.ajax({
            url: '<?php echo base_url(); ?>get_images_directory',
            method: 'GET',
            dataType: 'json',
            cache: true,
            success: function (folders) {
                updateCategoriesFilter(folders);
            },
        });
    });

    function updateCategoriesFilter(folders) {
        const filterContainer = $('#filter');
        const galleryWrapper = $('.gallery-wrapper');
        const itemsPerPage = 18;
        let currentPage = 1;
        let currentCategory = null;

        filterContainer.empty();
        galleryWrapper.empty();

        folders.forEach((folder, index) => {
            const category = folder.name.toLowerCase().replace(/\s+/g, '-');
            const activeClass = index === 0 ? 'active' : '';
            filterContainer.append(`
                <li class="list-inline-item">
                    <a class="categories ${activeClass}" data-filter="${category}" href="#">${folder.name}</a>
                </li>
            `);
        });

        filterContainer.on('click', '.categories', function (e) {
            e.preventDefault();
            $('.categories').removeClass('active');
            $(this).addClass('active');

            currentCategory = $(this).data('filter');
            currentPage = 1;
            displayImages(currentCategory, currentPage);
        });

        function displayImages(category, page) {
            galleryWrapper.empty();

            const selectedFolder = folders.find(folder => folder.name.toLowerCase().replace(/\s+/g, '-') === category);
            if (selectedFolder) {
                const images = selectedFolder.images;
                const startIndex = (page - 1) * itemsPerPage;
                const endIndex = Math.min(startIndex + itemsPerPage, images.length);

                const folderItems = images.slice(startIndex, endIndex).map(image => {
                    const imageName = image.split('/').pop();
                    return `
                        <div class="element-item col-xxl-2 col-xl-4 col-sm-6 ${category}" data-category="${category}">
                            <div class="gallery-box card">
                                <div class="gallery-container">
                                    <a class="image-popup" href="${image}" title="">
                                        <img class="gallery-img img-fluid mx-auto" src="${image}" alt="${imageName}" loading="lazy"/>
                                        <div class="gallery-overlay">
                                            <h5 class="overlay-caption">${imageName}</h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>`;
                });

                galleryWrapper.append(folderItems.join(''));
                updatePaginationControls(images.length, page);
            }

            let lightbox = GLightbox({
                selector: '.image-popup',
            });
        }

        function updatePaginationControls(totalItems, currentPage) {
            const totalPages = Math.ceil(totalItems / itemsPerPage);
            const paginationContainer = $('#pagination-controls');
            paginationContainer.empty();

            if (totalPages > 1) {
                paginationContainer.append(`
                    <button class="btn btn-sm btn-primary" id="prev-page" ${currentPage === 1 ? 'disabled' : ''}>Previous</button>
                    <span class="mx-2">Page ${currentPage} of ${totalPages}</span>
                    <button class="btn btn-sm btn-primary" id="next-page" ${currentPage === totalPages ? 'disabled' : ''}>Next</button>
                `);

                $('#prev-page').on('click', function () {
                    if (currentPage > 1) {
                        currentPage--;
                        displayImages(currentCategory, currentPage);
                    }
                });

                $('#next-page').on('click', function () {
                    if (currentPage < totalPages) {
                        currentPage++;
                        displayImages(currentCategory, currentPage);
                    }
                });
            }
        }

        initializeFilters();
        currentCategory = folders[0]?.name.toLowerCase().replace(/\s+/g, '-');
        displayImages(currentCategory, currentPage);
    }

    function initializeFilters() {
        $('.gallery-wrapper').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows',
        });
    }

    $(document).on('click', '.image-popup', function (e) {
        e.preventDefault();
    });


</script>
<style>
    .gallery-wrapper {
        clear: both;
        margin-bottom: 150px;
    }
    .gallery-img {
        width: 400px; 
        height: 150px;
        object-fit: cover;
        display: block;
        margin: auto;
    }
    .pagination{
        margin-top: 400px;
        display: flex;
        justify-content: center;
    }
</style>