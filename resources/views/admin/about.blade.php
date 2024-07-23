<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
   <?php ?>
   @include('admin.include_admin.header')
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
            <h4 class="mb-sm-0">About</h4>
            <div class="page-title-right">
            </div>
         </div>
      </div>
   </div>
   <!-- end page title -->
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-border-top nav-border-top-primary mb-3" role="tablist">
               <li class="nav-item" role="presentation">
                  <a class="nav-link active" data-bs-toggle="tab" href="#nav-border-top-institute" role="tab" aria-selected="true">
                  Institute
                  </a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#nav-border-top-director" role="tab" aria-selected="false" tabindex="-1">
                  Director
                  </a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#nav-border-top-chairman" role="tab" aria-selected="false" tabindex="-1">
                  Chairman
                  </a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#nav-border-top-team" role="tab" aria-selected="false" tabindex="-1">
                  Team
                  </a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#nav-border-top-faculty" role="tab" aria-selected="false" tabindex="-1">
                  Faculty
                  </a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#nav-border-top-career" role="tab" aria-selected="false" tabindex="-1">
                  Career
                  </a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#nav-border-top-authorization" role="tab" aria-selected="false" tabindex="-1">
                  Authorization
                  </a>
               </li>
               <li class="nav-item" role="presentation">
                  <a class="nav-link" data-bs-toggle="tab" href="#nav-border-top-partner" role="tab" aria-selected="false" tabindex="-1">
                  Partner
                  </a>
               </li>
            </ul>
            <div class="tab-content text-muted">
               <div class="tab-pane active show" id="nav-border-top-institute" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-header">
                              <div class="row g-4">
                                 <div class="col-sm-auto m-0">
                                    <h4 class="card-title mb-0">Institute</h4>
                                 </div>
                                 <div class="col-sm m-0">
                                    <div class="d-flex justify-content-sm-end">
                                       <div class="col-sm-auto">
                                          <div>
                                             <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#addinstitute"><i class="ri-add-line align-bottom me-1"></i> Add About</button>
                                             <button class="btn btn-soft-danger" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i> Delete All</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card header -->
                           <div class="card-body">
                              <div class="listjs-table" id="customerList">
                                 <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                       <div>
                                          <label class="d-flex g-10"style="gap:6px; align-items:center">
                                             Show 
                                             <select name="scroll-horizontal_length" aria-controls="scroll-horizontal" class="form-select form-select-sm w-auto">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                             </select>
                                             entries
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-sm-end">
                                          <div class="search-box ms-2">
                                             <input type="text" class="form-control search" placeholder="Search...">
                                             <i class="ri-search-line search-icon"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                       <thead class="table-light">
                                          <tr>
                                             <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                             </th>
                                             <th class="sort" data-sort="customer_name">S.N</th>
                                             <th class="sort" data-sort="email"> About Name</th>
                                             <th class="sort" data-sort="phone">Name</th>
                                             <th class="sort" data-sort="date">Image</th>
                                             <th class="sort" data-sort="date">Sort Description</th>
                                             <th class="sort" data-sort="date">Long Description</th>
                                             <th class="sort" data-sort="status"> Status</th>
                                             <th class="sort" data-sort="action">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody class="list form-check-all">
                                          <tr class="table-active">
                                             <th scope="row">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                </div>
                                             </th>
                                             <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                             <td class="customer_name">01</td>
                                             <td class="email">Webcodian</td>
                                             <td class="phone">Computer Institute</td>
                                             <td class="phone"><img src="https://leverageedublog.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2019/09/23164635/Software-Courses.jpg" style="height: 60px;"> </td>
                                             <td class="phone">Sort Description</td>
                                             <td class="phone">Long Description</td>
                                             <td class="status">
                                                <div class="form-check form-switch form-switch-secondary">
                                                   <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck2" checked>
                                                   <label class="form-check-label" for="SwitchCheck2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="dropdown d-inline-block">
                                                   <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                   <i class="ri-more-fill align-middle"></i>
                                                   </button>
                                                   <ul class="dropdown-menu dropdown-menu-end" style="">
                                                      <li><a data-bs-toggle="modal" id="create-btn" data-bs-target="#addinstitute" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                      <li>
                                                         <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">
                                                         <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <!-- Bordered Tables -->
                                    <div class="noresult" style="display: none">
                                       <div class="text-center">
                                          <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                          </lord-icon>
                                          <h5 class="mt-2">Sorry! No Result Found</h5>
                                          <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                             orders for you search.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row g-4 my-1">
                                    <div class="col-sm-12 col-md-5">
                                       <div class="dataTables_info" id="model-datatables_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-end">
                                          <div class="pagination-wrap hstack gap-2">
                                             <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                             Previous
                                             </a>
                                             <ul class="pagination listjs-pagination mb-0">
                                                <li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li>
                                             </ul>
                                             <a class="page-item pagination-next" href="javascript:void(0);">
                                             Next
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card -->
                        </div>
                        <!-- end col -->
                     </div>
                     <!-- end col -->
                  </div>
               </div>
               <div class="tab-pane " id="nav-border-top-director" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-header">
                              <div class="row g-4">
                                 <div class="col-sm-auto m-0">
                                    <h4 class="card-title mb-0">Director</h4>
                                 </div>
                                 <div class="col-sm m-0">
                                    <div class="d-flex justify-content-sm-end">
                                       <div class="col-sm-auto">
                                          <div>
                                             <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#adddirector"><i class="ri-add-line align-bottom me-1"></i> Add Details</button>
                                             <button class="btn btn-soft-danger" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i> Delete All</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card header -->
                           <div class="card-body">
                              <div class="listjs-table" id="customerList">
                                 <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                       <div>
                                          <label class="d-flex g-10"style="gap:6px; align-items:center">
                                             Show 
                                             <select name="scroll-horizontal_length" aria-controls="scroll-horizontal" class="form-select form-select-sm w-auto">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                             </select>
                                             entries
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-sm-end">
                                          <div class="search-box ms-2">
                                             <input type="text" class="form-control search" placeholder="Search...">
                                             <i class="ri-search-line search-icon"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                       <thead class="table-light">
                                          <tr>
                                             <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                             </th>
                                             <th class="sort" data-sort="customer_name">S.N</th>
                                             <th class="sort" data-sort="email"> About Name</th>
                                             <th class="sort" data-sort="phone">Name</th>
                                             <th class="sort" data-sort="date">Image</th>
                                             <th class="sort" data-sort="date">Sort Description</th>
                                             <th class="sort" data-sort="date">Long Description</th>
                                             <th class="sort" data-sort="status"> Status</th>
                                             <th class="sort" data-sort="action">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody class="list form-check-all">
                                          <tr class="table-active">
                                             <th scope="row">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                </div>
                                             </th>
                                             <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                             <td class="customer_name">01</td>
                                             <td class="email">Webcodian</td>
                                             <td class="phone">Computer Institute</td>
                                             <td class="phone"><img src="https://leverageedublog.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2019/09/23164635/Software-Courses.jpg" style="height: 60px;"> </td>
                                             <td class="phone">Sort Description</td>
                                             <td class="phone">Long Description</td>
                                             <td class="status">
                                                <div class="form-check form-switch form-switch-secondary">
                                                   <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck2" checked>
                                                   <label class="form-check-label" for="SwitchCheck2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="dropdown d-inline-block">
                                                   <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                   <i class="ri-more-fill align-middle"></i>
                                                   </button>
                                                   <ul class="dropdown-menu dropdown-menu-end" style="">
                                                      <li><a data-bs-toggle="modal" id="create-btn" data-bs-target="#adddirector" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                      <li>
                                                         <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">
                                                         <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <!-- Bordered Tables -->
                                    <div class="noresult" style="display: none">
                                       <div class="text-center">
                                          <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                          </lord-icon>
                                          <h5 class="mt-2">Sorry! No Result Found</h5>
                                          <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                             orders for you search.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row g-4 my-1">
                                    <div class="col-sm-12 col-md-5">
                                       <div class="dataTables_info" id="model-datatables_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-end">
                                          <div class="pagination-wrap hstack gap-2">
                                             <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                             Previous
                                             </a>
                                             <ul class="pagination listjs-pagination mb-0">
                                                <li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li>
                                             </ul>
                                             <a class="page-item pagination-next" href="javascript:void(0);">
                                             Next
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card -->
                        </div>
                        <!-- end col -->
                     </div>
                     <!-- end col -->
                  </div>
               </div>
               <div class="tab-pane " id="nav-border-top-chairman" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-header">
                              <div class="row g-4">
                                 <div class="col-sm-auto m-0">
                                    <h4 class="card-title mb-0">Chairman</h4>
                                 </div>
                                 <div class="col-sm m-0">
                                    <div class="d-flex justify-content-sm-end">
                                       <div class="col-sm-auto">
                                          <div>
                                             <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#addchairman"><i class="ri-add-line align-bottom me-1"></i> Add Details</button>
                                             <button class="btn btn-soft-danger" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i> Delete All</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card header -->
                           <div class="card-body">
                              <div class="listjs-table" id="customerList">
                                 <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                       <div>
                                          <label class="d-flex g-10"style="gap:6px; align-items:center">
                                             Show 
                                             <select name="scroll-horizontal_length" aria-controls="scroll-horizontal" class="form-select form-select-sm w-auto">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                             </select>
                                             entries
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-sm-end">
                                          <div class="search-box ms-2">
                                             <input type="text" class="form-control search" placeholder="Search...">
                                             <i class="ri-search-line search-icon"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                       <thead class="table-light">
                                          <tr>
                                             <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                             </th>
                                             <th class="sort" data-sort="customer_name">S.N</th>
                                             <th class="sort" data-sort="email"> About Name</th>
                                             <th class="sort" data-sort="phone">Name</th>
                                             <th class="sort" data-sort="date">Image</th>
                                             <th class="sort" data-sort="date">Sort Description</th>
                                             <th class="sort" data-sort="date">Long Description</th>
                                             <th class="sort" data-sort="status"> Status</th>
                                             <th class="sort" data-sort="action">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody class="list form-check-all">
                                          <tr class="table-active">
                                             <th scope="row">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                </div>
                                             </th>
                                             <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                             <td class="customer_name">01</td>
                                             <td class="email">Webcodian</td>
                                             <td class="phone">Computer Institute</td>
                                             <td class="phone"><img src="https://leverageedublog.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2019/09/23164635/Software-Courses.jpg" style="height: 60px;"> </td>
                                             <td class="phone">Sort Description</td>
                                             <td class="phone">Long Description</td>
                                             <td class="status">
                                                <div class="form-check form-switch form-switch-secondary">
                                                   <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck2" checked>
                                                   <label class="form-check-label" for="SwitchCheck2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="dropdown d-inline-block">
                                                   <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                   <i class="ri-more-fill align-middle"></i>
                                                   </button>
                                                   <ul class="dropdown-menu dropdown-menu-end" style="">
                                                      <li><a data-bs-toggle="modal" id="create-btn" data-bs-target="#addchairman" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                      <li>
                                                         <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">
                                                         <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <!-- Bordered Tables -->
                                    <div class="noresult" style="display: none">
                                       <div class="text-center">
                                          <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                          </lord-icon>
                                          <h5 class="mt-2">Sorry! No Result Found</h5>
                                          <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                             orders for you search.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row g-4 my-1">
                                    <div class="col-sm-12 col-md-5">
                                       <div class="dataTables_info" id="model-datatables_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-end">
                                          <div class="pagination-wrap hstack gap-2">
                                             <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                             Previous
                                             </a>
                                             <ul class="pagination listjs-pagination mb-0">
                                                <li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li>
                                             </ul>
                                             <a class="page-item pagination-next" href="javascript:void(0);">
                                             Next
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card -->
                        </div>
                        <!-- end col -->
                     </div>
                     <!-- end col -->
                  </div>
               </div>
               <div class="tab-pane" id="nav-border-top-team" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-header">
                              <div class="row g-4">
                                 <div class="col-sm-auto m-0">
                                    <h4 class="card-title mb-0">Team</h4>
                                 </div>
                                 <div class="col-sm m-0">
                                    <div class="d-flex justify-content-sm-end">
                                       <div class="col-sm-auto">
                                          <div>
                                             <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#addteam"><i class="ri-add-line align-bottom me-1"></i> Add Team</button>
                                             <button class="btn btn-soft-danger" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i> Delete All</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card header -->
                           <div class="card-body">
                              <div class="listjs-table" id="customerList">
                                 <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                       <div>
                                          <label class="d-flex " style="gap:6px;align-items:center">
                                             Show 
                                             <select name="scroll-horizontal_length" aria-controls="scroll-horizontal" class="form-select form-select-sm w-auto">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                             </select>
                                             entries
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-sm-end">
                                          <div class="search-box ms-2">
                                             <input type="text" class="form-control search" placeholder="Search...">
                                             <i class="ri-search-line search-icon"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                       <thead class="table-light">
                                          <tr>
                                             <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                             </th>
                                             <th class="sort" data-sort="customer_name">SR No.</th>
                                             <th class="sort" data-sort="email">Name</th>
                                             <th class="sort" data-sort="date">Designation</th>

                                             <th class="sort" data-sort="date">Images</th>
                                             <th class="sort" data-sort="date">Twitter</th>
                                             <th class="sort" data-sort="date">Facebook</th>
                                             <th class="sort" data-sort="date">Instagram</th>
                                             <th class="sort" data-sort="date">Linkedin</th>
                                             <th class="sort" data-sort="date">Status</th>
                                             <th class="sort" data-sort="action">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody class="list form-check-all">
                                          <tr class="table-active">
                                             <th scope="row">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                </div>
                                             </th>
                                             <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                             <td class="customer_name">01</td>
                                             <td class="email">Payal</td>
                                             <td class="date">Team</td>
                                             <td class="phone"><img src="https://leverageedublog.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2019/09/23164635/Software-Courses.jpg" style="height: 60px;"> </td>
                                             <td class="date">twiter</td>
                                             <td class="date">twiter</td>
                                             <td class="date">twiter</td>
                                             <td class="date">twiter</td>
                                             <td class="status">
                                                <div class="form-check form-switch form-switch-secondary">
                                                   <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck2" checked>
                                                   <label class="form-check-label" for="SwitchCheck2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="dropdown d-inline-block">
                                                   <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                   <i class="ri-more-fill align-middle"></i>
                                                   </button>
                                                   <ul class="dropdown-menu dropdown-menu-end" style="">
                                                      <li><a data-bs-toggle="modal" id="create-btn" data-bs-target="#addteam" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                      <li>
                                                         <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">
                                                         <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                       <div class="text-center">
                                          <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                          </lord-icon>
                                          <h5 class="mt-2">Sorry! No Result Found</h5>
                                          <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                             orders for you search.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row g-4 mb-3">
                                    <div class="col-sm-12 col-md-5">
                                       <div class="dataTables_info" id="model-datatables_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-end">
                                          <div class="pagination-wrap hstack gap-2">
                                             <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                             Previous
                                             </a>
                                             <ul class="pagination listjs-pagination mb-0">
                                                <li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li>
                                             </ul>
                                             <a class="page-item pagination-next" href="javascript:void(0);">
                                             Next
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- end card -->
                              </div>
                              <!-- end col -->
                           </div>
                           <!-- end col -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="nav-border-top-faculty" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-header">
                              <div class="row g-4">
                                 <div class="col-sm-auto m-0">
                                    <h4 class="card-title mb-0">Faculty</h4>
                                 </div>
                                 <div class="col-sm m-0">
                                    <div class="d-flex justify-content-sm-end">
                                       <div class="col-sm-auto">
                                          <div>
                                             <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#addfaculty"><i class="ri-add-line align-bottom me-1"></i> Add Faculty</button>
                                             <button class="btn btn-soft-danger" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i> Delete All</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card header -->
                           <div class="card-body">
                              <div class="listjs-table" id="customerList">
                                 <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                       <div>
                                          <label class="d-flex " style="gap:6px;align-items:center">
                                             Show 
                                             <select name="scroll-horizontal_length" aria-controls="scroll-horizontal" class="form-select form-select-sm w-auto">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                             </select>
                                             entries
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-sm-end">
                                          <div class="search-box ms-2">
                                             <input type="text" class="form-control search" placeholder="Search...">
                                             <i class="ri-search-line search-icon"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                       <thead class="table-light">
                                          <tr>
                                             <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                             </th>
                                             <th class="sort" data-sort="customer_name">SR No.</th>
                                             <th class="sort" data-sort="email">Name</th>
                                            

                                             <th class="sort" data-sort="date">Images</th>
                                             <th class="sort" data-sort="date">Joining Date</th>
                                             <th class="sort" data-sort="date">End Date</th>
                                             <th class="sort" data-sort="date">Salary</th>
                                             <th class="sort" data-sort="date">About</th>
                                             <th class="sort" data-sort="date">Designation</th>
                                             <th class="sort" data-sort="date">Email</th>
                                             <th class="sort" data-sort="date">Contact No</th>
                                             <th class="sort" data-sort="date">Whattsapp No</th>
                                             <th class="sort" data-sort="date">Facebook</th>
                                             <th class="sort" data-sort="date">Linkedin</th>
                                             <th class="sort" data-sort="date">Status</th>
                                             <th class="sort" data-sort="action">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody class="list form-check-all">
                                          <tr class="table-active">
                                             <th scope="row">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                </div>
                                             </th>
                                             <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                             <td class="customer_name">01</td>
                                             <td class="email">Payal</td>
                                             <td class="phone"><img src="https://leverageedublog.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2019/09/23164635/Software-Courses.jpg" style="height: 60px;"> </td>
                                             <td class="date">20 March 2024</td>
                                             
                                             <td class="date">20 March 2025</td>
                                             <td class="date">12000 </td>
                                             <td class="date">About Faculty</td>
                                             <td class="date">HOD</td>
                                             <td class="date">faculty@gmail.com</td>
                                             <td class="date">9847836643</td>
                                             <td class="date">9847836643</td>
                                             <td class="date">Facebook</td>
                                             <td class="date">Linkesin</td>
                                             <td class="status">
                                                <div class="form-check form-switch form-switch-secondary">
                                                   <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck2" checked>
                                                   <label class="form-check-label" for="SwitchCheck2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="dropdown d-inline-block">
                                                   <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                   <i class="ri-more-fill align-middle"></i>
                                                   </button>
                                                   <ul class="dropdown-menu dropdown-menu-end" style="">
                                                      <li><a data-bs-toggle="modal" id="create-btn" data-bs-target="#addfaculty" class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                      <li>
                                                         <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">
                                                         <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                         </a>
                                                      </li>
                                                   </ul>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                       <div class="text-center">
                                          <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                          </lord-icon>
                                          <h5 class="mt-2">Sorry! No Result Found</h5>
                                          <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                             orders for you search.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row g-4 mb-3">
                                    <div class="col-sm-12 col-md-5">
                                       <div class="dataTables_info" id="model-datatables_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-end">
                                          <div class="pagination-wrap hstack gap-2">
                                             <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                             Previous
                                             </a>
                                             <ul class="pagination listjs-pagination mb-0">
                                                <li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li>
                                             </ul>
                                             <a class="page-item pagination-next" href="javascript:void(0);">
                                             Next
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- end card -->
                              </div>
                              <!-- end col -->
                           </div>
                           <!-- end col -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane" id="nav-border-top-career" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-header">
                              <div class="row g-4">
                                 <div class="col-sm-auto m-0">
                                    <h4 class="card-title mb-0">Job Category</h4>
                                 </div>
                                 <div class="col-sm m-0">
                                    <div class="d-flex justify-content-sm-end">
                                       <div class="col-sm-auto">
                                          <div>
                                             <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#addcareer"><i class="ri-add-line align-bottom me-1"></i> Add Job Category</button>
                                             <button class="btn btn-soft-danger" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i> Delete All</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card header -->
                           <div class="card-body">
                              <div class="listjs-table" id="customerList">
                                 <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                       <div>
                                          <label class="d-flex g-10"style="gap:6px; align-items:center">
                                             Show 
                                             <select name="scroll-horizontal_length" aria-controls="scroll-horizontal" class="form-select form-select-sm w-auto">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                             </select>
                                             entries
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-sm-end">
                                          <div class="search-box ms-2">
                                             <input type="text" class="form-control search" placeholder="Search...">
                                             <i class="ri-search-line search-icon"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                       <thead class="table-light">
                                          <tr>
                                             <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                             </th>
                                             <th class="sort" data-sort="customer_name">S.N</th>
                                             <th class="sort" data-sort="email">Category Name</th>
                                             <th class="sort" data-sort="phone">Total Job Post</th>
                                             
                                             
                                             <th class="sort" data-sort="status"> Status</th>
                                             <th class="sort" data-sort="action">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody class="list form-check-all">
                                          <tr class="table-active">
                                             <th scope="row">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                </div>
                                             </th>
                                             <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                             <td class="customer_name">01</td>
                                             <td class="email">It Consultancy</td>
                                             <td>
                                                                    <div class="hstack gap-3 flex-wrap">
                                                                        <a href="job.php" class="link-success fs-15"><i class="ri-edit-2-line"></i>(1)</a>
                                                                       
                                                                    </div>
                                                                </td>
                                             
                                            
                                             <td class="status">
                                                <div class="form-check form-switch form-switch-secondary">
                                                   <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck2" checked>
                                                   <label class="form-check-label" for="SwitchCheck2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <div class="edit">
                                                      <button  class="btn btn-sm btn-success edit-item-btn"data-bs-toggle="modal" id="create-btn" data-bs-target="#addcareer">Edit</button>
                                                   </div>
                                                   <div class="remove">
                                                      <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                       <div class="text-center">
                                          <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                          </lord-icon>
                                          <h5 class="mt-2">Sorry! No Result Found</h5>
                                          <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                             orders for you search.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row g-4 my-1">
                                    <div class="col-sm-12 col-md-5">
                                       <div class="dataTables_info" id="model-datatables_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-end">
                                          <div class="pagination-wrap hstack gap-2">
                                             <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                             Previous
                                             </a>
                                             <ul class="pagination listjs-pagination mb-0">
                                                <li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li>
                                             </ul>
                                             <a class="page-item pagination-next" href="javascript:void(0);">
                                             Next
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card -->
                        </div>
                        <!-- end col -->
                     </div>
                     <!-- end col -->
                  </div>
               </div>
               <div class="tab-pane" id="nav-border-top-authorization" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-header">
                              <div class="row g-4">
                                 <div class="col-sm-auto m-0">
                                    <h4 class="card-title mb-0">Authorization</h4>
                                 </div>
                                 <div class="col-sm m-0">
                                    <div class="d-flex justify-content-sm-end">
                                       <div class="col-sm-auto">
                                          <div>
                                             <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#addauthorized"><i class="ri-add-line align-bottom me-1"></i> Add Authorization</button>
                                             <button class="btn btn-soft-danger" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i> Delete All</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card header -->
                           <div class="card-body">
                              <div class="listjs-table" id="customerList">
                                 <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                       <div>
                                          <label class="d-flex " style="gap:6px;align-items:center">
                                             Show 
                                             <select name="scroll-horizontal_length" aria-controls="scroll-horizontal" class="form-select form-select-sm w-auto">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                             </select>
                                             entries
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-sm-end">
                                          <div class="search-box ms-2">
                                             <input type="text" class="form-control search" placeholder="Search...">
                                             <i class="ri-search-line search-icon"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                       <thead class="table-light">
                                          <tr>
                                             <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                             </th>
                                             <th class="sort" data-sort="customer_name">SR No.</th>
                                             <th class="sort" data-sort="email">  Name</th>
                                             
                                             <th class="sort" data-sort="email">Image</th>
                                            
                                             <th class="sort" data-sort="date">Status</th>
                                             <th class="sort" data-sort="action">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody class="list form-check-all">
                                          <tr class="table-active">
                                             <th scope="row">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                </div>
                                             </th>
                                             <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                             <td class="customer_name">01</td>
                                             <td class="email">Gopal Dubey</td>
                                             
                                             <td class="phone"><img src="https://leverageedublog.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2019/09/23164635/Software-Courses.jpg" style="height: 60px;"> </td>
                                           
                                             <td class="status">
                                                <div class="form-check form-switch form-switch-secondary">
                                                   <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck2" checked>
                                                   <label class="form-check-label" for="SwitchCheck2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <div class="edit">
                                                      <button class="btn btn-sm btn-success edit-item-btn"data-bs-toggle="modal" id="create-btn" data-bs-target="#addauthorized">Edit</button>
                                                   </div>
                                                   <div class="remove">
                                                      <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                       <div class="text-center">
                                          <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                          </lord-icon>
                                          <h5 class="mt-2">Sorry! No Result Found</h5>
                                          <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                             orders for you search.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row g-4 mb-3">
                                    <div class="col-sm-12 col-md-5">
                                       <div class="dataTables_info" id="model-datatables_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-end">
                                          <div class="pagination-wrap hstack gap-2">
                                             <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                             Previous
                                             </a>
                                             <ul class="pagination listjs-pagination mb-0">
                                                <li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li>
                                             </ul>
                                             <a class="page-item pagination-next" href="javascript:void(0);">
                                             Next
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- end card -->
                              </div>
                              <!-- end col -->
                           </div>
                           <!-- end col -->
                        </div>
                     </div>
                  </div>
               </div>

               <div class="tab-pane" id="nav-border-top-partner" role="tabpanel">
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="card">
                           <div class="card-header">
                              <div class="row g-4">
                                 <div class="col-sm-auto m-0">
                                    <h4 class="card-title mb-0">Partner</h4>
                                 </div>
                                 <div class="col-sm m-0">
                                    <div class="d-flex justify-content-sm-end">
                                       <div class="col-sm-auto">
                                          <div>
                                             <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#addpartener"><i class="ri-add-line align-bottom me-1"></i> Add Partner</button>
                                             <button class="btn btn-soft-danger" onclick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i> Delete All</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- end card header -->
                           <div class="card-body">
                              <div class="listjs-table" id="customerList">
                                 <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                       <div>
                                          <label class="d-flex " style="gap:6px;align-items:center">
                                             Show 
                                             <select name="scroll-horizontal_length" aria-controls="scroll-horizontal" class="form-select form-select-sm w-auto">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                             </select>
                                             entries
                                          </label>
                                       </div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-sm-end">
                                          <div class="search-box ms-2">
                                             <input type="text" class="form-control search" placeholder="Search...">
                                             <i class="ri-search-line search-icon"></i>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="table-responsive table-card mt-3 mb-1">
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                       <thead class="table-light">
                                          <tr>
                                             <th scope="col" style="width: 50px;">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                </div>
                                             </th>
                                             <th class="sort" data-sort="customer_name">SR No.</th>
                                       
                                             
                                             <th class="sort" data-sort="email">Image</th>
                                            
                                             <th class="sort" data-sort="date">Status</th>
                                             <th class="sort" data-sort="action">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody class="list form-check-all">
                                          <tr class="table-active">
                                             <th scope="row">
                                                <div class="form-check">
                                                   <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                </div>
                                             </th>
                                             <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                             <td class="customer_name">01</td>
                                          
                                             
                                             <td class="phone"><img src="https://leverageedublog.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2019/09/23164635/Software-Courses.jpg" style="height: 60px;"> </td>
                                           
                                             <td class="status">
                                                <div class="form-check form-switch form-switch-secondary">
                                                   <input class="form-check-input" type="checkbox" role="switch" id="SwitchCheck2" checked>
                                                   <label class="form-check-label" for="SwitchCheck2"></label>
                                                </div>
                                             </td>
                                             <td>
                                                <div class="d-flex gap-2">
                                                   <div class="edit">
                                                      <button class="btn btn-sm btn-success edit-item-btn"data-bs-toggle="modal" id="create-btn" data-bs-target="#addpartener">Edit</button>
                                                   </div>
                                                   <div class="remove">
                                                      <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
                                                   </div>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <div class="noresult" style="display: none">
                                       <div class="text-center">
                                          <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                          </lord-icon>
                                          <h5 class="mt-2">Sorry! No Result Found</h5>
                                          <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                             orders for you search.
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row g-4 mb-3">
                                    <div class="col-sm-12 col-md-5">
                                       <div class="dataTables_info" id="model-datatables_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                    </div>
                                    <div class="col-sm">
                                       <div class="d-flex justify-content-end">
                                          <div class="pagination-wrap hstack gap-2">
                                             <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                             Previous
                                             </a>
                                             <ul class="pagination listjs-pagination mb-0">
                                                <li class="active"><a class="page" href="#" data-i="1" data-page="8">1</a></li>
                                             </ul>
                                             <a class="page-item pagination-next" href="javascript:void(0);">
                                             Next
                                             </a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- end card -->
                              </div>
                              <!-- end col -->
                           </div>
                           <!-- end col -->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end card-body -->
            </div>
         </div>
      </div>
      <!-- container-fluid -->
   </div>
   <!-- End Page-content -->
   <!-- model-->
   <div class="modal fade" id="addinstitute" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header bg-light p-3">
               <h5 class="modal-title" id="exampleModalLabel">Institute About</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
               <div class="modal-body">
                  <div class="mb-3" id="modal-id" style="display: none;">
                     <label for="id-field" class="form-label">ID</label>
                     <input type="text" id="id-field" class="form-control" placeholder="ID" readonly="">
                  </div>
                  <div class="mb-3">
                     <label for="customername-field" class="form-label"> Title</label>
                     <input type="text" id="customername-field" class="form-control" placeholder="Enter Title" required="">
                     <div class="invalid-feedback">Please enter Title.</div>
                  </div>
                  <div class="mb-3">
                     <label for="phone-field" class="form-label">Upload Image</label>
                     <input type="file" id="email-field" class="form-control" placeholder="Enter Email" required="">
                     <div class="invalid-feedback">Please Upload Image.</div>
                  </div>
                  <div class="col-md-12 mb-3">
                     <div class="card-body">
                        <p class="text-muted mx-3 mt-3"> Sort Description</p>
                        <div class="ckeditor-classic" style="display: none;">
                        </div>
                     </div>
                     <div class="col-md-12 mb-3">
                        <div class="card-body">
                           <p class="text-muted mx-3 mt-3"> Long Description</p>
                           <div class="ckeditor-classicc" style="display: none;">
                           </div>
                        </div>
                        <div>
                           <label for="status-field" class="form-label">Status</label>
                           <select class="form-control" data-trigger="" name="status-field" id="status-field" required="">
                              <option value="">Status</option>
                              <option value="Active">Active</option>
                              <option value="Block">Block</option>
                           </select>
                        </div>
                     </div>
                     <div class="modal-footer" style="display: block;">
                        <div class="hstack gap-2 justify-content-end">
                           <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-success" id="add-btn">Submit</button>
                           <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                        </div>
                     </div>
            </form>
            </div>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="adddirector" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header bg-light p-3">
               <h5 class="modal-title" id="exampleModalLabel">Ditector Details</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
               <div class="modal-body">
                  <div class="mb-3" id="modal-id" style="display: none;">
                     <label for="id-field" class="form-label">ID</label>
                     <input type="text" id="id-field" class="form-control" placeholder="ID" readonly="">
                  </div>
                  <div class="mb-3">
                     <label for="customername-field" class="form-label"> Title</label>
                     <input type="text" id="customername-field" class="form-control" placeholder="Enter Title" required="">
                     <div class="invalid-feedback">Please enter Title.</div>
                  </div>
                  <div class="mb-3">
                     <label for="phone-field" class="form-label">Upload Image</label>
                     <input type="file" id="email-field" class="form-control" placeholder="Enter Email" required="">
                     <div class="invalid-feedback">Please Upload Image.</div>
                  </div>
                  <div class="col-md-12 mb-3">
                     <div class="card-body">
                        <p class="text-muted mx-3 mt-3"> Sort Description</p>
                        <div class="ckeditor-classic1" style="display: none;">
                        </div>
                     </div>
                     <div class="col-md-12 mb-3">
                        <div class="card-body">
                           <p class="text-muted mx-3 mt-3"> Long Description</p>
                           <div class="ckeditor-classicc2" style="display: none;">
                           </div>
                        </div>
                        <div>
                           <label for="status-field" class="form-label">Status</label>
                           <select class="form-control" data-trigger="" name="status-field" id="status-field" required="">
                              <option value="">Status</option>
                              <option value="Active">Active</option>
                              <option value="Block">Block</option>
                           </select>
                        </div>
                     </div>
                     <div class="modal-footer" style="display: block;">
                        <div class="hstack gap-2 justify-content-end">
                           <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-success" id="add-btn">Submit</button>
                           <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                        </div>
                     </div>
            </form>
            </div>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="addchairman" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header bg-light p-3">
               <h5 class="modal-title" id="exampleModalLabel">Chairman Details</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
               <div class="modal-body">
                  <div class="mb-3" id="modal-id" style="display: none;">
                     <label for="id-field" class="form-label">ID</label>
                     <input type="text" id="id-field" class="form-control" placeholder="ID" readonly="">
                  </div>
                  <div class="mb-3">
                     <label for="customername-field" class="form-label"> Title</label>
                     <input type="text" id="customername-field" class="form-control" placeholder="Enter Title" required="">
                     <div class="invalid-feedback">Please enter Title.</div>
                  </div>
                  <div class="mb-3">
                     <label for="phone-field" class="form-label">Upload Image</label>
                     <input type="file" id="email-field" class="form-control" placeholder="Enter Email" required="">
                     <div class="invalid-feedback">Please Upload Image.</div>
                  </div>
                  <div class="col-md-12 mb-3">
                     <div class="card-body">
                        <p class="text-muted mx-3 mt-3"> Sort Description</p>
                        <div class="ckeditor-classic2" style="display: none;">
                        </div>
                     </div>
                     <div class="col-md-12 mb-3">
                        <div class="card-body">
                           <p class="text-muted mx-3 mt-3"> Long Description</p>
                           <div class="ckeditor-classicc3" style="display: none;">
                           </div>
                        </div>
                        <div>
                           <label for="status-field" class="form-label">Status</label>
                           <select class="form-control" data-trigger="" name="status-field" id="status-field" required="">
                              <option value="">Status</option>
                              <option value="Active">Active</option>
                              <option value="Block">Block</option>
                           </select>
                        </div>
                     </div>
                     <div class="modal-footer" style="display: block;">
                        <div class="hstack gap-2 justify-content-end">
                           <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-success" id="add-btn">Submit</button>
                           <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                        </div>
                     </div>
            </form>
            </div>
            </div>
         </div>
      </div>
   </div>
   <div class="modal fade" id="addteam" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header bg-light p-3">
               <h5 class="modal-title" id="exampleModalLabel">Add Team</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
               <div class="modal-body">
                  <div class="mb-3" id="modal-id" style="display: none;">
                     <label for="id-field" class="form-label">ID</label>
                     <input type="text" id="id-field" class="form-control" placeholder="ID" readonly="">
                  </div>
                  <div class="mb-3">
                     <label for="customername-field" class="form-label">Name</label>
                     <input type="text" id="customername-field" class="form-control" placeholder="Enter Name" required="">
                     <div class="invalid-feedback">Please enter Name.</div>
                  </div>
                  <div class="mb-3">
                     <label for="email-field" class="form-label">Designation</label>
                     <input type="text" id="email-field" class="form-control" placeholder="Enter Designation" required="">
                     <div class="invalid-feedback">Please enter Designation.</div>
                  </div>

                  <div class="mb-3">
                     <label for="email-field" class="form-label">Twitter Link</label>
                     <input type="text" id="email-field" class="form-control" placeholder="Enter Twitter Link" required="">
                     <div class="invalid-feedback">Please enter Twitter Link.</div>
                  </div>

                  <div class="mb-3">
                     <label for="email-field" class="form-label">Facebook Link</label>
                     <input type="text" id="email-field" class="form-control" placeholder="Enter Facebook Link" required="">
                     <div class="invalid-feedback">Please enter Facebook Link.</div>
                  </div>

                  <div class="mb-3">
                     <label for="email-field" class="form-label">Instagram Link</label>
                     <input type="text" id="email-field" class="form-control" placeholder="Enter Instagram Link" required="">
                     <div class="invalid-feedback">Please enter Instagram Link.</div>
                  </div>

                  <div class="mb-3">
                     <label for="email-field" class="form-label">Linkedin Link</label>
                     <input type="text" id="email-field" class="form-control" placeholder="Enter Linkedin Link" required="">
                     <div class="invalid-feedback">Please enter Linkedin Link.</div>
                  </div>

                  <div class="mb-3">
                     <label for="phone-field" class="form-label">Upload Image</label>
                     <input type="file" id="email-field" class="form-control" placeholder="Enter Email" required="">
                     <div class="invalid-feedback">Please Upload Image.</div>
                  </div>

                  <div>
                     <label for="status-field" class="form-label">Status</label>
                     <select class="form-control" data-trigger="" name="status-field" id="status-field" required="">
                        <option value="">Status</option>
                        <option value="Active">Active</option>
                        <option value="Block">Block</option>
                     </select>
                  </div>
               </div>
               <div class="modal-footer" style="display: block;">
                  <div class="hstack gap-2 justify-content-end">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-success" id="add-btn">Submit</button>
                     <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="modal fade" id="addfaculty" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header bg-light p-3">
               <h5 class="modal-title" id="exampleModalLabel">Faculty Details</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
               <div class="modal-body">
                  <div class="mb-3" id="modal-id" style="display: none;">
                     <label for="id-field" class="form-label">ID</label>
                     <input type="text" id="id-field" class="form-control" placeholder="ID" readonly="">
                  </div>
                  <div class="mb-3">
                     <label for="customername-field" class="form-label">Faculty Name</label>
                     <input type="text" id="customername-field" class="form-control" placeholder="Enter Faculty Name" required="">
                     <div class="invalid-feedback">Please enter Name.</div>
                  </div>
                  <div class="mb-3">
                     <label for="email-field" class="form-label">Joining Date</label>
                     <input type="date" id="email-field" class="form-control" placeholder="Enter Course" required="">
                     <div class="invalid-feedback">Please enter Course.</div>
                  </div>

                  <div class="mb-3">
                     <label for="email-field" class="form-label">Ending Date</label>
                     <input type="date" id="email-field" class="form-control" placeholder="Enter Course" required="">
                     <div class="invalid-feedback">Please enter Course.</div>
                  </div>


                  <div class="mb-3">
                     <label for="email-field" class="form-label">Salary</label>
                     <input type="number" id="email-field" class="form-control" placeholder="Enter salary" required="">
                     <div class="invalid-feedback">Please enter salary.</div>
                  </div>

                  <div class="mb-3">
                     <label for="email-field" class="form-label">Designation</label>
                     <input type="text" id="email-field" class="form-control" placeholder="Enter Designation" required="">
                     <div class="invalid-feedback">Please enter Designation.</div>
                  </div>

                  <div class="mb-3">
                     <label for="email-field" class="form-label">About Faculty</label>
                     <input type="text" id="email-field" class="form-control" placeholder="Enter About Faculty" required="">
                     <div class="invalid-feedback">Please enter About Faculty.</div>
                  </div>

                  <div class="mb-3">
                     <label for="email-field" class="form-label">Email ID</label>
                     <input type="email" id="email-field" class="form-control" placeholder="Enter Email" required="">
                     <div class="invalid-feedback">Please enter Email.</div>
                  </div>

                  <div class="mb-3">
                     <label for="email-field" class="form-label">Contact</label>
                     <input type="number" id="email-field" class="form-control" placeholder="Enter Contact No" required="">
                     <div class="invalid-feedback">Please enter Contact.</div>
                  </div>
                  
                  <div class="mb-3">
                     <label for="email-field" class="form-label">Whattsapp </label>
                     <input type="number" id="email-field" class="form-control" placeholder="Enter Whattsapp No" required="">
                     <div class="invalid-feedback">Please enter Whattsapp.</div>
                  </div>

                  <div class="mb-3">
                     <label for="email-field" class="form-label">Facebook Link </label>
                     <input type="number" id="email-field" class="form-control" placeholder="Enter Facebook Link " required="">
                     <div class="invalid-feedback">Please enter Facebook Link .</div>
                  </div>

                  <div class="mb-3">
                     <label for="email-field" class="form-label">Linkedin Link </label>
                     <input type="number" id="email-field" class="form-control" placeholder="Enter Linkedin Link " required="">
                     <div class="invalid-feedback">Please enter Linkedin Link .</div>
                  </div>

                  <div class="mb-3">
                     <label for="phone-field" class="form-label">Upload student Image</label>
                     <input type="file" id="email-field" class="form-control" placeholder="Enter Email" required="">
                     <div class="invalid-feedback">Please Upload student Image.</div>
                  </div>
                  <div>
                     <label for="status-field" class="form-label">Status</label>
                     <select class="form-control" data-trigger="" name="status-field" id="status-field" required="">
                        <option value="">Status</option>
                        <option value="Active">Active</option>
                        <option value="Block">Block</option>
                     </select>
                  </div>
               </div>
               <div class="modal-footer" style="display: block;">
                  <div class="hstack gap-2 justify-content-end">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-success" id="add-btn">Submit</button>
                     <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="modal fade" id="addcareer" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header bg-light p-3">
               <h5 class="modal-title" id="exampleModalLabel">Add Job Category</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
               <div class="modal-body">
                  <div class="mb-3" id="modal-id" style="display: none;">
                     <label for="id-field" class="form-label">ID</label>
                     <input type="text" id="id-field" class="form-control" placeholder="ID" readonly="">
                  </div>
                  <div class="mb-3">
                     <label for="customername-field" class="form-label">Category Name</label>
                     <input type="text" id="customername-field" class="form-control" placeholder="Enter Name" required="">
                     <div class="invalid-feedback">Please enter Name.</div>
                  </div>
                 
                  
                  
                  <div>
                     <label for="status-field" class="form-label">Status</label>
                     <select class="form-control" data-trigger="" name="status-field" id="status-field" required="">
                        <option value="">Status</option>
                        <option value="Active">Active</option>
                        <option value="Block">Block</option>
                     </select>
                  </div>
               </div>
               <div class="modal-footer" style="display: block;">
                  <div class="hstack gap-2 justify-content-end">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-success" id="add-btn">Submit</button>
                     <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <div class="modal fade" id="addauthorized" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header bg-light p-3">
               <h5 class="modal-title" id="exampleModalLabel">Add Authorization</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
               <div class="modal-body">
                  <div class="mb-3" id="modal-id" style="display: none;">
                     <label for="id-field" class="form-label">ID</label>
                     <input type="text" id="id-field" class="form-control" placeholder="ID" readonly="">
                  </div>
                  <div class="mb-3">
                     <label for="customername-field" class="form-label">Title</label>
                     <input type="text" id="customername-field" class="form-control" placeholder="Enter Title" required="">
                     <div class="invalid-feedback">Please enter Title.</div>
                  </div>
                 
                  <div class="mb-3">
                     <label for="phone-field" class="form-label">Upload Image</label>
                     <input type="file" id="email-field" class="form-control" placeholder="Enter Email" required="">
                     <div class="invalid-feedback">Please Upload Image.</div>
                  </div>
                  
                  
                  <div>
                     <label for="status-field" class="form-label">Status</label>
                     <select class="form-control" data-trigger="" name="status-field" id="status-field" required="">
                        <option value="">Status</option>
                        <option value="Active">Active</option>
                        <option value="Block">Block</option>
                     </select>
                  </div>
               </div>
               <div class="modal-footer" style="display: block;">
                  <div class="hstack gap-2 justify-content-end">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-success" id="add-btn">Submit</button>
                     <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>

   <div class="modal fade" id="addpartener" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header bg-light p-3">
               <h5 class="modal-title" id="exampleModalLabel">Add Partener</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
               <div class="modal-body">
                  <div class="mb-3" id="modal-id" style="display: none;">
                     <label for="id-field" class="form-label">ID</label>
                     <input type="text" id="id-field" class="form-control" placeholder="ID" readonly="">
                  </div>
                 
                 
                  <div class="mb-3">
                     <label for="phone-field" class="form-label">Upload Image</label>
                     <input type="file" id="email-field" class="form-control" placeholder="Enter Email" required="">
                     <div class="invalid-feedback">Please Upload Image.</div>
                  </div>
                  
                  
                  <div>
                     <label for="status-field" class="form-label">Status</label>
                     <select class="form-control" data-trigger="" name="status-field" id="status-field" required="">
                        <option value="">Status</option>
                        <option value="Active">Active</option>
                        <option value="Block">Block</option>
                     </select>
                  </div>
               </div>
               <div class="modal-footer" style="display: block;">
                  <div class="hstack gap-2 justify-content-end">
                     <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-success" id="add-btn">Submit</button>
                     <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                  </div>
               </div>
            </form>
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
   <!-- model End-->
   <script>
      function deleteMultiple() {
          // Perform delete operation here
          
          // Show an alert
          confirm("Are you sure you want to delete this?!");
      }
   </script>
   <script>
      function toggleActive() {
          var activeBtn = document.getElementById("activeBtn");
          var deactivateBtn = document.getElementById("deactivateBtn");
      
          // Toggle button visibility
          activeBtn.style.display = activeBtn.style.display === "none" ? "inline-block" : "none";
          deactivateBtn.style.display = deactivateBtn.style.display === "none" ? "inline-block" : "none";
      }
   </script>
   <script>
      ClassicEditor
            .create(document.querySelector('.ckeditor-classic'))
            .catch(error => {
               console.error(error);
            });
      
           
   </script>
   <script>
      ClassicEditor
            .create(document.querySelector('.ckeditor-classicc'))
            .catch(error => {
               console.error(error);
            });
      
           
   </script>

<script>
      ClassicEditor
            .create(document.querySelector('.ckeditor-classic1'))
            .catch(error => {
               console.error(error);
            });
      
           
   </script>
   <script>
      ClassicEditor
            .create(document.querySelector('.ckeditor-classicc2'))
            .catch(error => {
               console.error(error);
            });
      
           
   </script>

<script>
      ClassicEditor
            .create(document.querySelector('.ckeditor-classic2'))
            .catch(error => {
               console.error(error);
            });
      
           
   </script>
   <script>
      ClassicEditor
            .create(document.querySelector('.ckeditor-classicc3'))
            .catch(error => {
               console.error(error);
            });
      
           
   </script>
  
   @include('admin.include_admin.footer')
   <!-- Mirrored from themesbrand.com/velzon/html/material/apps-job-statistics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 05:27:34 GMT -->
</html>