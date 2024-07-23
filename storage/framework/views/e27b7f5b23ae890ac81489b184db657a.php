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
            <h4 class="mb-sm-0">Add driver</h4>
            <div class="page-title-right">
               
            </div>
         </div>
      </div>
   </div>
   <!-- end page title -->

   <div class="row" data-select2-id="select2-data-19-3r7y">
        <div class="col-lg-12" data-select2-id="select2-data-18-vftm">
           
     </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                       <div class="col-md-9 col-6">
                          <h5 class="card-title mb-0">driver Information</h5>
                       </div>
                       
                    </div>
                    <a href="cab.php" class="btn btn-info btn-sm back-btn"><i class="ri-arrow-left-s-line"></i> Back</a>
                 </div>
               <div class="card-body">
              
                     <div class="row">
                       
                        <div class="col-md-4 mb-3">
                           <label class="active">Name *</label>
                           <input name="name" type="text" class="form-control " required="" value="" placeholder="Enter Your Name">
                                                   </div>
                      
                                                   <div class="col-md-4 mb-3">
                           <label class="active">Contact No *</label>
                           <input name="name" type="number" class="form-control " required="" value="" placeholder="Enter Your Contact">
                                                   </div>

                                                   <div class="col-md-4 mb-3">
                           <label class="active">Email ID *</label>
                           <input name="name" type="email" class="form-control " required="" value="" placeholder="Enter Your email">
                                                   </div>
                        
                        
                       
                        <div class="col-md-4 mb-3">
                           <label class="active">Address *</label>
                           <input name="name" type="text" class="form-control " required="" value="" placeholder="Enter Your Address">
                                                   </div>
                        <div class="col-md-4 mb-3">
                           <label class="active">Zip Code *</label>
                           <input name="name" type="text" class="form-control " required="" value="" placeholder="Enter Zip Code">
                                                   </div>
                        <div class="col-md-4 mb-3">
                           <label class="active">State  *</label>
                           <select class="form-select form-select-md" name="state" id="stateSelect" onchange="fetchDistricts()">
                              <option value="SelectState">Select State</option>
                              <option value="Andra Pradesh">Andra Pradesh</option>
                              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                              <option value="Assam">Assam</option>
                              <option value="Bihar">Bihar</option>
                              <option value="Chhattisgarh">Chhattisgarh</option>
                              <option value="Goa">Goa</option>
                              <option value="Gujarat">Gujarat</option>
                              <option value="Haryana">Haryana</option>
                              <option value="Himachal Pradesh">Himachal Pradesh</option>
                              <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                              <option value="Jharkhand">Jharkhand</option>
                              <option value="Karnataka">Karnataka</option>
                              <option value="Kerala">Kerala</option>
                              <option value="Madya Pradesh">Madya Pradesh</option>
                              <option value="Maharashtra">Maharashtra</option>
                              <option value="Manipur">Manipur</option>
                              <option value="Meghalaya">Meghalaya</option>
                              <option value="Mizoram">Mizoram</option>
                              <option value="Nagaland">Nagaland</option>
                              <option value="Orissa">Orissa</option>
                              <option value="Punjab">Punjab</option>
                              <option value="Rajasthan">Rajasthan</option>
                              <option value="Sikkim">Sikkim</option>
                              <option value="Tamil Nadu">Tamil Nadu</option>
                              <option value="Telangana">Telangana</option>
                              <option value="Tripura">Tripura</option>
                              <option value="Uttarakhand">Uttarakhand</option>
                              <option value="Uttar Pradesh">Uttar Pradesh</option>
                              <option value="West Bengal">West Bengal</option>
                              <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                              <option value="Chandigarh">Chandigarh</option>
                              <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                              <option value="Daman and Diu">Daman and Diu</option>
                              <option value="Delhi">Delhi</option>
                              <option value="Lakshadeep">Lakshadeep</option>
                              <option value="Pondicherry">Pondicherry</option>
                           </select>
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="active">Select City  *</label>
                           <select class="form-select form-select-md" name="district" id="districtSelect">
                              <option>-- select one -- </option>
                           </select>
                                                   </div>

                                                   <div class="col-md-4 mb-3">
                           <label class="active">Joining Date*</label>
                           <input name="name" type="date" class="form-control " required="" value="" >
                                                   </div>

                                                   <div class="col-md-4 mb-3">
                           <label class="active">Salary/ Month *</label>
                           <input name="name" type="text" class="form-control " required="" value="" placeholder="Rs 1700 ">
                                                   </div>
                       
                      
                       
                      
                                                   <div class="col-md-4 mb-3">
                           <label class="active">Drivery Licence *</label>
                           <input name="center_logo" type="file" class="form-control " required="" value="">
                                                   </div>
                     
                        <div class="col-md-4 mb-3">
                           <label class="active">Id Proof *</label>
                           <input name="center_logo" type="file" class="form-control " required="" value="">
                                                   </div>
                        <div class="col-md-4 mb-3">
                           <label class="active">Photo *</label>
                           <input name="center_logo" type="file" class="form-control " required="" value="">
                                                   </div>
                        
                
                         </div>

                         <div class="col-lg-12">
                          <div class="text-start">
                             <button type="submit" class="btn btn-primary"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i>  Submit</button>
                          </div>
                       </div>
                     </div>
                  
               </div>
            </div>
         </div>
      </div>

                </div>

                <script>
    const stateDistrictMapping = {
    
  "Andhra Pradesh": ["Anantapur", "Chittoor", "East Godavari", "Guntur", "Krishna", "Kurnool", "Nellore", "Prakasam", "Srikakulam", "Visakhapatnam", "Vizianagaram", "West Godavari", "YSR Kadapa"],
  "Arunachal Pradesh": ["Tawang", "West Kameng", "East Kameng", "Papum Pare", "Kurung Kumey", "Kra Daadi", "Lower Subansiri", "Upper Subansiri", "West Siang", "East Siang", "Siang", "Upper Siang", "Lower Siang", "Lower Dibang Valley", "Dibang Valley", "Anjaw", "Lohit", "Namsai", "Changlang", "Tirap", "Longding"],
  "Assam": ["Baksa", "Barpeta", "Biswanath", "Bongaigaon", "Cachar", "Charaideo", "Chirang", "Darrang", "Dhemaji", "Dhubri", "Dibrugarh", "Goalpara", "Golaghat", "Hailakandi", "Hojai", "Jorhat", "Kamrup", "Kamrup Metropolitan", "Karbi Anglong", "Karimganj", "Kokrajhar", "Lakhimpur", "Majuli", "Morigaon", "Nagaon", "Nalbari", "Dima Hasao", "Sivasagar", "Sonitpur", "South Salmara-Mankachar", "Tinsukia", "Udalguri", "West Karbi Anglong"],
  // Add more states and districts as needed

    };

    function fetchDistricts() {
      const stateSelect = document.getElementById('stateSelect');
      const selectedState = stateSelect.value;
      const districtSelect = document.getElementById('districtSelect');

      // Clear previous district options
      districtSelect.innerHTML = '<option value="">Select District</option>';

      // Populate districts based on selected state
      if (selectedState && stateDistrictMapping[selectedState]) {
        const districts = stateDistrictMapping[selectedState];
        districts.forEach(district => {
          const option = document.createElement('option');
          option.value = district;
          option.textContent = district;
          districtSelect.appendChild(option);
        });
      }
    }
  </script>
<?php echo $__env->make('admin.include_admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
   <!-- Mirrored from themesbrand.com/velzon/html/material/apps-job-statistics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 05:27:34 GMT -->
</html><?php /**PATH C:\xampp\htdocs\tours-travels\resources\views/admin/driver/add_driver.blade.php ENDPATH**/ ?>