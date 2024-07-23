
<?php $__env->startSection('title'); ?>
<?php echo app('translator')->get('translation.orders'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('build/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?>
Gallery
<?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?>
Gallery
<?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<div class="row">
    <div class="col-lg-12">
        <div class="card" id="orderList">
            <div class="card-header border-0">
                <div class="row align-items-center gy-3">
                    <div class="col-sm">
                        <h5 class="card-title mb-0">Gallery</h5>
                    </div>
                    <div class="col-sm-auto">
                        <div class="d-flex gap-1 flex-wrap">
                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Create gallery</button>
                            <button type="button" class="btn btn-info"><i class="ri-file-download-line align-bottom me-1"></i> Import</button>
                            <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body border border-dashed border-end-0 border-start-0">
              
            </div>
            <div class="card-body pt-0">
                <div>
                   
                    <div class="table-responsive table-card mb-1">
                        <table class="table table-nowrap align-middle" id="orderTable">
                            <thead class="text-muted table-light">
                                <tr class="text-uppercase">
                                    
                                    <th class="sort" data-sort="id">S.No</th>
                                    <th class="sort" data-sort="customer_name">Location</th>
                                    <th class="sort" data-sort="date">Photo</th>
                                    <th class="sort" data-sort="city">Action</th>
                                </tr>
                            </thead>
                            <?php
                            $photo = DB::table('galleries')->where('gallery_type','photo')->get();
                            ?>
                            <tbody class="list form-check-all">
                                <?php $__currentLoopData = $photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $temp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                 
                                    <td class="id"><?php echo e(++$key); ?></td>
                                    <td class="gallery_location_id"><?php echo e($temp->gallery_location_id); ?></td>
                                    <td class="gallery_photo">
    <?php if($temp->gallery_photo): ?>
    <img src="<?php echo e(asset('gallery_images/' . $temp->gallery_photo)); ?>" alt="Gallery Photo" style="height: 100px; width: 100px;">

    <?php else: ?>
        No Image Available
    <?php endif; ?>
</td>

                                    </td>
                                    <td>
                                        <ul class="list-inline hstack gap-2 mb-0">
                                           
                                            <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                <a href="#showModalEdit" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                    <i class="ri-pencil-fill fs-16"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item" data-bs-toggle="tooltip" title="Remove">
        <a class="text-danger d-inline-block remove-item-btn delete-record" data-blog-id="<?php echo e($temp->id); ?>" href="#">
            <i class="ri-delete-bin-5-fill fs-16"></i>
        </a>
    </li>
                                        </ul>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="noresult" style="display: none">
                            <div class="text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:75px;height:75px">
                                </lord-icon>
                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                <p class="text-muted">We've searched more than 150+ Orders We did
                                    not find any
                                    orders for you search.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="pagination-wrap hstack gap-2">
                            <a class="page-item pagination-prev disabled" href="#">
                                Previous
                            </a>
                            <ul class="pagination listjs-pagination mb-0"></ul>
                            <a class="page-item pagination-next" href="#">
                                Next
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-light p-3">
                                <h5 class="modal-title" id="exampleModalLabel">&nbsp;</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                            </div>
                            <!-- Your HTML form -->
                            <form id="gallery-form" class="tablelist-form" autocomplete="off">
    <div class="modal-body">
        <div class="mb-3">
            <label for="title-field" class="form-label">Location</label>
            <input type="text" id="title-field" name="gallery_location" class="form-control" required />
        </div>
        <div class="mb-3">
            <label for="gallery_type" class="form-label">Gallery Type</label>
            <select id="gallery_type" name="gallery_type" class="form-select" required>
                <option value="photo">Photo</option>
                <option value="video">Video</option>
            </select>
        </div>
        <div class="mb-3" id="image-field">
    <label for="gallery_image" class="form-label">Image</label>
    <input type="file" id="gallery_image" name="gallery_image" class="form-control" />
    <img id="image-preview" src="#" alt="Preview" style="display: none; max-width: 100%; height: auto;">
</div>

        <div class="mb-3" id="video-field" style="display: none;">
            <label for="gallery_video" class="form-label">Video</label>
            <input type="file" id="gallery_video" class="form-control" name="gallery_video"  />
        </div>
    </div>
    <div class="modal-footer">
        <div class="hstack gap-2 justify-content-end">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success" id="add-btn">Add Gallery</button>
        </div>
    </div>
</form>



                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <!-- Edit model for gallery -->
                <div class="modal fade" id="showModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel">&nbsp;</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <!-- Your HTML form -->
            <form id="gallery-form" class="tablelist-form" autocomplete="off">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="location-field" class="form-label">Location</label>
                        <input type="text" id="edit_location-field" name="gallery_location" class="form-control" required />
                    </div>
                    <div class="mb-3">
                        <label for="edit_gallery-type" class="form-label">Gallery Type</label>
                        <select id="edit_gallery-type" name="gallery_type" class="form-select" required>
                            <option value="photo">Photo</option>
                            <option value="video">Video</option>
                        </select>
                    </div>
                    <div class="mb-3" id="image-field">
                        <label for="edit_gallery-image" class="form-label">Image</label>
                        <input type="file" id="edit_gallery-image" name="gallery_image" class="form-control" />
                        <img id="image-preview" src="#" alt="Preview" style="display: none; max-width: 100%; height: auto;">
                    </div>

                    <div class="mb-3" id="video-field" style="display: none;">
                        <label for="gallery-video" class="form-label">Video</label>
                        <input type="file" id="edit_gallery-video" class="form-control" name="gallery_video" />
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="edit-btn">Update Gallery</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

                <!--  -->
      <!-- Modal HTML -->
<div class="modal fade" id="deleteRecordModal" tabindex="-1" aria-labelledby="deleteRecordModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteRecordModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this Gallery date_isodate_set?
            </div>
            <div class="modal-footer">
                <button class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                <button class="btn btn-danger" id="deleteRecordConfirm">Yes, Delete It</button>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>

    </div>
    <!--end col-->
</div>
<!--end row-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('build/libs/list.js/list.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/libs/list.pagination.js/list.pagination.min.js')); ?>"></script>

<!--ecommerce-customer init js -->
<script src="<?php echo e(URL::asset('build/js/pages/ecommerce-order.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>

<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<script src="<?php echo e(URL::asset('build/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/quill/quill.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/pages/form-editor.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
  // image preview
        const input = document.getElementById('gallery_image');
        const preview = document.getElementById('image-preview');

        input.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                preview.src = '#';
                preview.style.display = 'none';
            }
        });
    });
</script>

<!-- on change gallery type drop down show image and video field -->
<script>
document.getElementById("gallery_type").addEventListener("change", function() {
    var selectedValue = this.value;
    if (selectedValue === "photo") {
        document.getElementById("image-field").style.display = "block";
        document.getElementById("video-field").style.display = "none";
    } else if (selectedValue === "video") {
        document.getElementById("image-field").style.display = "none";
        document.getElementById("video-field").style.display = "block";
    }
});
</script>
<!-- Add gallery and populate data in table new row -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('gallery-form');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(form);

            $.ajax({
                url: '/gallery-add', // Assuming your route for storing blogs is /blogs
                method: 'POST',
                data: formData,
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                processData: false,
                contentType: false,
                success: function(data) {
                    // Handle success response
                    console.log(data);
                    form.reset(); // Clears the form fields
                    $('#myModal').modal('hide'); 
                    if (data.message === 'Gallery added successfully') {
                        // Create a new table row
                    
                        const newRow = `
                            <tr>
                                <td class="id">${data.gallery.id}</td>
                                <td class="gallery_location_id">${data.gallery.gallery_location_id}</td>
                                <td class="gallery_photo">
                                    <img src="<?php echo e(asset('gallery_images/')); ?>/${data.gallery.gallery_photo}" alt="Gallery Photo" style="height: 100px; width: 100px;">
                                </td>
                                <td>
                                    <ul class="list-inline hstack gap-2 mb-0">
                                        <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                            <a href="#showModal" data-bs-toggle="modal" class="text-primary d-inline-block edit-item-btn">
                                                <i class="ri-pencil-fill fs-16"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item" data-bs-toggle="tooltip" title="Remove">
                                            <a class="text-danger d-inline-block remove-item-btn delete-record" data-blog-id="${data.gallery.id}" href="#">
                                                <i class="ri-delete-bin-5-fill fs-16"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        `;
                        // Append the new row to the table body
                        $('.list').append(newRow);
                    }
                    // Show success alert
                    alert('Form submitted successfully!');
                    // Optionally, you can redirect the user or show a success message here

                    // Clear and close modal after 3 seconds
                   // Assuming you are using Bootstrap modal, close it using jQuery
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error('There was a problem with the AJAX request:', error);
                    // Optionally, you can display an error message to the user
                }
            });
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-record');

        deleteButtons.forEach(function(deleteButton) {
            deleteButton.addEventListener('click', function(event) {
                event.preventDefault();
                // Show a confirmation alert
                if (confirm('Are you sure you want to delete this Gallery data ?')) {
                    // If user confirms, perform deletion process
                    const blogId = this.getAttribute('data-blog-id');
                    deleteBlog(blogId);
                }
            });
        });

        function deleteBlog(blogId) {
            // Send a request to delete the blog post
            fetch(`/galleryDelete/${blogId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                // Handle success response
                alert('gallery  deleted successfully!');
                location.reload(); // Reload the page after successful deletion
            })
            .catch(error => {
                // Handle error
                console.error('There was a problem with the fetch operation:', error);
                // Optionally, you can display an error message to the user
            });
        }
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tours-travels\resources\views/admin/Gallery/index.blade.php ENDPATH**/ ?>