<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
@include('admin.include_admin.header')
  
  
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
                    <form action="" method="" id="addDriverForm" > 
                        @csrf
                     <div class="row">
                        
                       
                        <div class="col-md-4 mb-3">
                           <label class="active">Name *</label>
                           <input name="driver_name" type="text" class="form-control " required="" value="" id="driver_name" placeholder="Enter Your Name">
                                                   </div>
                      
                                                   <div class="col-md-4 mb-3">
                           <label class="active">Contact No *</label>
                           <input name="driver_contact" type="number" class="form-control " required="" id="driver_contact"  value="" placeholder="Enter Your Contact">
                                                   </div>

                                                   <div class="col-md-4 mb-3">
                           <label class="active">Email ID *</label>
                           <input name="driver_email" type="email" class="form-control " required=""  id="driver_email" value="" placeholder="Enter Your email">
                                                   </div>
                        
                        
                       
                        <div class="col-md-4 mb-3">
                           <label class="active">Address *</label>
                           <input name="driver_address" type="text" class="form-control " required="" id="driver_address" value="" placeholder="Enter Your Address">
                                                   </div>
                        <div class="col-md-4 mb-3">
                           <label class="active">Zip Code *</label>
                           <input name="driver_zip" type="text" class="form-control " required="" id="driver_zip" value="" placeholder="Enter Zip Code">
                                                   </div>
                        <div class="col-md-4 mb-3">
                           <label class="active">State  *</label>
                           <select class="form-select form-select-md" name="driver_state" id="stateSelect"  onchange="fetchDistricts()">
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
                           <select class="form-select form-select-md" name="driver_district" id="districtSelect">
                              <option>-- select one -- </option>
                           </select>
                                                   </div>

                                                   <div class="col-md-4 mb-3">
                           <label class="active">Joining Date*</label>
                           <input name="joining_date" type="date" class="form-control" id="joining_date" required="" value="" >
                                                   </div>

                                                   <div class="col-md-4 mb-3">
                           <label class="active">Salary/ Month *</label>
                           <input name="driver_salary" type="text" class="form-control" id="driver_salary" required="" value="" placeholder="Rs 1700 ">
                                                   </div>
                       
                      
                       
                      
                                                   <div class="col-md-4 mb-3">
                           <label class="active">Drivery Licence *</label>
                           <input name="driver_licence" type="file" class="form-control " id="driver_licence" required="" value="">
                                                   </div>
                     
                        <div class="col-md-4 mb-3">
                           <label class="active">Id Proof *</label>
                           <input name="driver_id" type="file" class="form-control " id="driver_id" required="" value="">
                                                   </div>
                        <div class="col-md-4 mb-3">
                           <label class="active">Photo *</label>
                           <input name="driver_photo" type="file" class="form-control " id="driver_photo" required="" value="">
                                                   </div>
                        
                
                         </div>

                         <div class="col-lg-12">
                          <div class="text-start">
                             <button type="submit" class="btn btn-primary" id="add_driver_btn"><i class="ri-check-double-line label-icon align-middle fs-16 me-2"></i>  Submit</button>
                          </div>
                       </div>
                     </div>

                </form>
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
  <!-- add driver script -->
  <script>
        $(document).ready(function(){
            $('#addDriverForm').submit(function(e){
                e.preventDefault(); // Prevent the default form submission

                // Validate the form
                var isValid = validateForm();
                if (!isValid) {
                    return false; // If form is not valid, stop further processing
                }

                // Serialize form data
                var formData = $(this).serialize();

                // Submit form data via Ajax
                $.ajax({
                    type: "POST",
                    url: "add-driver",
                    data: formData,
                    success: function(response) {
                        // Handle success response
                        console.log(response);
                        alert('Form submitted successfully!');
                        // You can redirect or do any further processing here
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error(xhr.responseText);
                        alert('An error occurred while submitting the form.');
                    }
                });
            });
        });

        function validateForm() {
            var name = document.getElementById("driver_name").value;
            var contact = document.getElementById("driver_contact").value;
            var email = document.getElementById("driver_email").value;
            var address = document.getElementById("driver_address").value;
            var zip = document.getElementById("driver_zip").value;
            var state = document.getElementById("stateSelect").value;
            var district = document.getElementById("districtSelect").value;
            var joiningDate = document.getElementById("joining_date").value;
            var salary = document.getElementById("driver_salary").value;
            var licence = document.getElementById("driver_licence").value;
            var idProof = document.getElementById("driver_id").value;
            var photo = document.getElementById("driver_photo").value;

            if (name === '' || contact === '' || email === '' || address === '' || zip === '' || state === 'SelectState' || district === '-- select one --' || joiningDate === '' || salary === '' || licence === '' || idProof === '' || photo === '') {
                alert("All fields are required");
                return false;
            }
            // You can add more complex validation logic here if needed
            return true;
        }
    </script>

@include('admin.include_admin.footer')
  
   <!-- Mirrored from themesbrand.com/velzon/html/material/apps-job-statistics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 05:27:34 GMT -->
</html>