<!doctype html>
<html lang="en">


<!-- Mirrored from themezhub.net/geotrip-live/geotrip/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 08:21:45 GMT -->

<?php $__env->startSection('content'); ?>
<style>
  /* Modal styles */
.modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.8);
}

.modal-content {
  max-width: 80%;
  max-height: 80%;
  margin: auto;
  display: block;
  margin-top: 70px;
}

.close {
  position: absolute;
  top: 10px;
  right: 20px;
  font-size: 30px;
  color: #fff;
  cursor: pointer;
}

.prev-next {
  position: absolute;
  top: 50%;
  width: 100%;
  display: flex;
  justify-content: space-between;
}

.prev,
.next {
  font-size: 30px;
  color: #fff;
  cursor: pointer;
}

/* Image gallery styles */
.image-gallery {
  display: flex;
  flex-wrap: wrap;
}

.image-gallery img {
 
  cursor: pointer;
}

  </style>
		<!-- ============================================================== -->
		<!-- Top header  -->
		<!-- ============================================================== -->


	<!-- ============================ Articles Thumb Section ================================== -->
	<section class="bg-cover position-relative" style="background:url(assets/img/about-us.jpg)no-repeat;" data-overlay="5">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-xl-7 col-lg-9 col-md-12">

						<div class="fpc-capstion text-center my-4">
							<div class="fpc-captions">
								<h1 class="xl-heading text-light">Photo Details</h1>
								<p class="text-light">Cicero famously orated against his political opponent Lucius Sergius Catilina.
									Occasionally the first Oration against Catiline is taken for type specimens</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- ============================ Articles Thumb Section ================================== -->
        <section class="team-section section-padding3">
        <div class="container">
          <div class="row gy-24">
           
          <div class="image-gallery">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
            <div class="single-donate h-calc">
                <div class="donate-img position-relative">
                <img src="https://demo.artureanec.com/html/helpo/img/causes_2.jpg" alt="Image 1" onclick="openModal(0)">
                  
                  
                </div>
                 
              </div>
           
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
            <div class="single-donate h-calc">
                <div class="donate-img position-relative">
                <img src="https://demo.artureanec.com/html/helpo/img/causes_1.jpg" alt="Image 1" onclick="openModal(1)">
                  
                  
                </div>
                 
              </div>
           
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 view-wrapper">
            <div class="single-donate h-calc">
                <div class="donate-img position-relative">
                <img src="https://demo.artureanec.com/html/helpo/img/event_2.jpg" alt="Image 1" onclick="openModal(2)">
                  
                  
                </div>
                 
              </div>
           
            </div>
          
          </div>
          </div>
          <!-- pagination -->
         
          <!-- End pagination -->
        </div>
      </section>
    
      <!-- End-of Login -->
    </main>
    <!-- Footer S t a r t -->
   

  

<!-- Mirrored from charitfix.vercel.app/theme/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Feb 2024 06:56:56 GMT -->





<!-- The Image Modal -->
<div id="imageModal" class="modal">
  <span class="close" onclick="closeModal()">&times;</span>
  <img class="modal-content" id="modalImage">
  <div class="prev-next">
    <a href="javascript:void(0)" class="prev" onclick="changeImage(-1)">&#10094;</a>
    <a href="javascript:void(0)" class="next" onclick="changeImage(1)">&#10095;</a>
  </div>
</div>

<script>
// Get the modal and images
var modal = document.getElementById('imageModal');
var modalImage = document.getElementById('modalImage');
var galleryImages = document.querySelectorAll('.image-gallery img');

// Image sources array
var imageSources = [
  'https://demo.artureanec.com/html/helpo/img/causes_2.jpg',
  'https://demo.artureanec.com/html/helpo/img/causes_1.jpg',
  'https://demo.artureanec.com/html/helpo/img/event_2.jpg'
  // Add more image sources as needed
];

// Variable to track the current image index
var currentImageIndex;

// Function to open the modal with a specific image
function openModal(index) {
  currentImageIndex = index;
  modal.style.display = 'block';
  modalImage.src = imageSources[index];
}

// Function to close the modal
function closeModal() {
  modal.style.display = 'none';
}

// Function to change the displayed image
function changeImage(direction) {
  currentImageIndex += direction;

  // Loop back to the first image if at the end
  if (currentImageIndex >= imageSources.length) {
    currentImageIndex = 0;
  }
  // Loop to the last image if at the beginning
  else if (currentImageIndex < 0) {
    currentImageIndex = imageSources.length - 1;
  }

  modalImage.src = imageSources[currentImageIndex];
}

// Close the modal if the user clicks outside the modal content
window.addEventListener('click', function (event) {
  if (event.target === modal) {
    closeModal();
  }
});

</script>
		<!-- ============================ Footer Start ================================== -->
	
       <?php $__env->stopSection(); ?>

<!-- Mirrored from themezhub.net/geotrip-live/geotrip/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jan 2024 08:21:45 GMT -->
</html>
<?php echo $__env->make('include.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tours-travels\resources\views/frontend/photo-detail.blade.php ENDPATH**/ ?>