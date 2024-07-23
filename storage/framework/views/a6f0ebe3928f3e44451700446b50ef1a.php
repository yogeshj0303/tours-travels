<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

   <?php echo $__env->make('admin.include_admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
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
            <h4 class="mb-sm-0">Driver Details</h4>
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
                        <h5 class="card-title mb-0">Driver Details</h5>
                       
                     </div>
                     
                  </div>
                  <a href="cab.php" class="btn btn-info btn-sm back-btn"><i class="ri-arrow-left-s-line"></i> Back</a>
               </div>
               <div class="card-body">
               <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body p-4">
                                    <div>
                                        <div class="flex-shrink-0 avatar-md mx-auto">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="<?php echo e(asset('assets/images/companies/img-2.png')); ?>" alt="" height="50">
                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h5 class="mb-1">Wbcodian Tour And Travel</h5>
                                            <p class="text-muted">Since 2017</p>
                                        </div>
                                        <div class="table-responsive ">
                                            <table class="table mb-0 table-bordered">
                                                <tbody>

                                                <tr>
                                                        <th><span class="fw-high"> Name</span></th>
                                                        <td>Ramesh Singh</td>
                                                    </tr>

                                                    <tr>
                                                        <th><span class="fw-high"> Contact No</span></th>
                                                        <td>9893429622</td>
                                                    </tr>

                                                    
                                                    <tr>
                                                        <th><span class="fw-high">Email ID</span></th>
                                                        <td>shivam@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-high">Address</span></th>
                                                        <td>Babatpur</td>
                                                    </tr>

                                                    <tr>
                                                        <th><span class="fw-high">Pin Code</span></th>
                                                        <td>7837644</td>
                                                    </tr>

                                                    <tr>
                                                        <th><span class="fw-high">District</span></th>
                                                        <td>Varanasi</td>
                                                    </tr>

                                                    <tr>
                                                        <th><span class="fw-high">State</span></th>
                                                        <td>Uttar Pradesh</td>
                                                    </tr>

                                                    <tr>
                                                        <th><span class="fw-high">Salary</span></th>
                                                        <td>Rs 1700 / Month</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-high">Joining Date</span></th>
                                                        <td>12 Jan 2022</td>
                                                    </tr>
                                                   

                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--end card-body-->
                              
                                <!--end card-body-->
                          
                                <div class="card-body p-4 border-top border-top-dashed">
                                    <h6 class="text-muted text-uppercase fw-semibold mb-4"> Document</h6>
                                    <div class="card">
                                <div class="card-body">
                                  
                                    <div class="vstack gap-2">
                                        <div class="border rounded border-dashed p-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-light text-secondary rounded fs-24">
                                                            <i class="ri-folder-zip-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="fs-13 mb-1"><a href="javascript:void(0);" class="text-body text-truncate d-block">Photo*</a></h5>
                                                    <div>2.2MB</div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="d-flex gap-1">
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                    <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                                        <i class="ri-eye-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li <a href="javascript:void(0);"><i class="ri-download-2-line fs-17 lh-1 align-middle"></i></a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                    <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="border rounded border-dashed p-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-light text-secondary rounded fs-24 shadow">
                                                            <i class="ri-file-ppt-2-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="fs-13 mb-1"><a href="javascript:void(0);" class="text-body text-truncate d-block">Drivery Licence</a></h5>
                                                    <div>2.4MB</div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="d-flex gap-1">
                                                    
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                    <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                                        <i class="ri-eye-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li <a href="javascript:void(0);"><i class="ri-download-2-line fs-17 lh-1 align-middle"></i></a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                    <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        

                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="border rounded border-dashed p-2">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-sm">
                                                        <div class="avatar-title bg-light text-secondary rounded fs-24 shadow">
                                                            <i class="ri-folder-zip-line"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="fs-13 mb-1"><a href="javascript:void(0);" class="text-body text-truncate d-block">Id Proof</a></h5>
                                                    <div>1.2MB</div>
                                                </div>
                                                <div class="flex-shrink-0 ms-2">
                                                    <div class="d-flex gap-1">
                                                    <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="View">
                                                                    <a href="apps-ecommerce-order-details.html" class="text-primary d-inline-block">
                                                                        <i class="ri-eye-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li <a href="javascript:void(0);"><i class="ri-download-2-line fs-17 lh-1 align-middle"></i></a>
                                                                </li>
                                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                                    <a class="text-danger d-inline-block remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    
                                       
                                    </div>
                                </div>
                            </div>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
            </div>
            <div class="modal-body">
               <div class="mt-2 text-center">
                  <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                  <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                     <h4>Are you Sure ?</h4>
                     <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                  </div>
               </div>
               <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                  <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php echo $__env->make('admin.include_admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- Mirrored from themesbrand.com/velzon/html/material/apps-job-statistics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 05:27:34 GMT -->
</html><?php /**PATH C:\xampp\htdocs\tours-travels\resources\views/admin/driver/driver_details.blade.php ENDPATH**/ ?>