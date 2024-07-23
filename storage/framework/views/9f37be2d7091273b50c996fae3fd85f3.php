<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<?php echo $__env->make('admin.include_admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
  
   <!-- ============================================================== -->
   <!-- Start right Content here -->
   <!-- ============================================================== -->
   <div class="main-content">
   <div class="page-content">
   <div class="container-fluid">
   <!-- start page title -->
   <div class="row">
      <div class="col-12">
         <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Add vehical</h4>
            <div class="page-title-right">
               
            </div>
         </div>
      </div>
   </div>
   <!-- end page title -->


   <div class="row">
         <div class="col-lg-12">
            <div class="card">
            <div class="card-header">
                  <div class="row">
                     <div class="col-md-9 col-6">
                        <h5 class="card-title mb-0">Add vehical</h5>
                       
                     </div>
                     
                  </div>
                  <a href="cab.php" class="btn btn-info btn-sm back-btn"><i class="ri-arrow-left-s-line"></i> Back</a>
               </div>
               <div class="card-body">
                  <form action="javascript:void(0);">
                     <div class="row">

                     
                        
                        <div class="col-lg-4">
                                                <h6 class="fw-semibold">Owner*</h6>
                                                <select class="form-select " aria-label=".form-select-lg example">
                                                    <option selected="">Myself</option>
                                                    <option value="1">Ramesh singh</option>
                                                    <option value="2">Arun Gupta</option>
                                                    <option value="3">Utkarsh Jain</option>
                                                </select>
                                            </div>

                                            <div class="col-lg-4">
                                                <h6 class="fw-semibold">Driver*</h6>
                                                <select class="form-select " aria-label=".form-select-lg example">
                                                    
                                                    <option value="1">Ramesh singh</option>
                                                    <option value="2">Arun Gupta</option>
                                                    <option value="3">Utkarsh Jain</option>
                                                </select>
                                            </div>

                        <div class="col-md-4 mb-3">
                            <label class="active">Vehical Company *</label>
                            <input name="name" type="text" class="form-control " required="" value="" placeholder="Enter vehical Name">
                                                     </div>

                                                     <div class="col-md-4 mb-3">
                            <label class="active">vehical Model  *</label>
                            <input name="name" type="text" class="form-control " required="" value="" placeholder="Enter vehical Model Name">
                                                     </div>
                       
                        <div class="col-md-4 mb-3">
                            <label class="active"> vehical Number *</label>
                            <input name="name" type="text" class="form-control " required="" value="" placeholder="Enter vehical Number">
                                                     </div>
                       
                        <div class="col-md-4 mb-3">
                            <label class="active"> vehical Seats *</label>
                            <input name="name" type="number" class="form-control " required="" value="" placeholder="Enter Seats">
                                                     </div>

                                                     <div class="col-md-4 mb-3">
                            <label class="active"> vehical Rent *</label>
                            <input name="name" type="number" class="form-control " required="" value="" placeholder="Rs 11 /KM">
                                                     </div>

                                                     <div class="col-md-4 mb-3">
                            <label class="active"> vehical Join Date *</label>
                            <input name="name" type="date" class="form-control " required="" value="" >
                                                     </div>
                       
                      
                       
                       
                       

                       

                        <div class=" col-md-4 mb-3">
                           <label for="customername-field" class="form-label"> Vehicle Registration Certificate (RC)</label>
                           <input type="file" id="customername-field" class="form-control" placeholder="Enter Name" required="">
                           <div class="invalid-feedback">Please enter a  name.</div>
                        </div>

                        <div class=" col-md-4 mb-3">
                           <label for="customername-field" class="form-label"> Commercial Vehicle Insurance: </label>
                           <input type="file" id="customername-field" class="form-control" placeholder="Enter Name" required="">
                           <div class="invalid-feedback">Please enter a  name.</div>
                        </div>

                        <div class=" col-md-4 mb-3">
                           <label for="customername-field" class="form-label"> Fitness Certificate: </label>
                           <input type="file" id="customername-field" class="form-control" placeholder="Enter Name" required="">
                           <div class="invalid-feedback">Please enter a  name.</div>
                        </div>

                        
                        <div class=" col-md-4 mb-3">
                           <label for="customername-field" class="form-label"> Permit and License: </label>
                           <input type="file" id="customername-field" class="form-control" placeholder="Enter Name" required="">
                           <div class="invalid-feedback">Please enter a  name.</div>
                        </div>

                        <div class="row" id="imageUploadContainer">
      <div class="col-md-4 mb-3 image-input">
        <label for="customername-field" class="form-label">Image</label>
        <input type="file" class="form-control" accept="image/*" required>
        <div class="invalid-feedback">Please select an image.</div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="input-step step-primary gapbtn">
          <button type="button" class="minus shadow">–</button>
          <button type="button" class="plus shadow">+</button>
        </div>
      </div>
    </div>

                                          
                                            


                                            

                       
                        <div class="col-md-12 mb-3">
                            <div class="card-body">
                                <p class="text-black fw-high">Description</p>
                                <div class="ckeditor-classic"></div>
                           </div>

                        </div>
                        
                        <div class="col-lg-12">
                            <div class="text-start">
                               <button type="submit" class="btn btn-primary"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i>  Submit</button>
                            </div>
                         </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

     
      <script>
                     ClassicEditor
                           .create(document.querySelector('.ckeditor-classic'))
                           .catch(error => {
                              console.error(error);
                           });
                  </script>

<script>
    const addButton = document.querySelector('.plus');
    const removeButton = document.querySelector('.minus');
    const imageUploadContainer = document.getElementById('imageUploadContainer');

    addButton.addEventListener('click', addImageInput);
    removeButton.addEventListener('click', removeImageInput);

    function addImageInput() {
      const newRow = document.createElement('div');
      newRow.classList.add('row', 'mb-3', 'image-row');
      newRow.innerHTML = `
        <div class="col-md-4">
          <label for="customername-field" class="form-label">Image</label>
          <input type="file" class="form-control" accept="image/*" required>
          <div class="invalid-feedback">Please select an image.</div>
        </div>
      `;
      imageUploadContainer.appendChild(newRow);
    }

    function removeImageInput() {
      const imageRows = document.querySelectorAll('.image-row');
      if (imageRows.length > 1) {
        const lastRow = imageRows[imageRows.length - 1];
        lastRow.remove();
      }
    }
  </script>

<?php echo $__env->make('admin.include_admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
   <!-- Mirrored from themesbrand.com/velzon/html/material/apps-job-statistics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 05:27:34 GMT -->
</html><?php /**PATH C:\xampp\htdocs\tours-travels\resources\views/admin/cab/add_cab.blade.php ENDPATH**/ ?>