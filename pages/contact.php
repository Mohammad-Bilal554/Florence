<?php include __DIR__ . '/../includes/header.php'; ?>
        <!-- main-area -->
        <main>
            
           <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex  p-relative align-items-center"
        style="background-image: linear-gradient(rgba(95,157,161,0.55), rgba(37,60,128,0.55)), url(<?= IMG_URL ?>/bg/bg_first.png);">


        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-left">
                        <div class="breadcrumb-title">
                            <h2>Contact Us</h2>

                        </div>
                    </div>
                </div>
                <div class="breadcrumb-wrap2">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= BASE_URL ?>index">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
            
           <!-- services-area -->          
            <section id="services" class="services-area pt-120 pb-90 fix">
                <div class="container">
                   <!-- <div class="row">
                         <div class="col-lg-12">
                            <div class="section-title text-center mb-50 wow fadeInDown  animated" data-animation="fadeInDown" data-delay=".4s" style="visibility: visible; animation-name: fadeInDown;">
                                <h5><i class="fal fa-graduation-cap"></i> Contact Info</h5>
                                <h2>
                                 Get In Touch
                                </h2>
                             
                            </div>
                           
                        </div>
                    </div> -->
                    <div class="row">
                         <div class="col-lg-4 col-md-4">
                             
                          <div class="services-box text-center">
                              <div class="services-icon">
                                   <i class="fa-solid fa-phone"></i>
                                </div>
                               <div class="services-content2">
                                    <h5><a href="tel:+91-5842-280210">+91-5842-280210</a></h5>   
                                    <p>Phone Support</p>
                                </div>
                            </div>   
                             
                         
                        </div>
                        <div class="col-lg-4 col-md-4">
                             
                          <div class="services-box text-center active">
                              <div class="services-icon">
                                  <i class="fa-solid fa-envelope"></i>

                                </div>
                               <div class="services-content2">
                                    <h5><a href="mailto:jobs@webtrueexample.com">fnscnspn@gmail.com</a></h5>   
                                     <p>Email Address</p>
                                     
                                </div>
                            </div>   
                             
                         
                        </div>
                        <div class="col-lg-4 col-md-4">
                             
                          <div class="services-box text-center">
                              <div class="services-icon">
                                <i class="fa-solid fa-location-dot"></i>

                                </div>
                               <div class="services-content2">
                                    <h5>Mouzampur, N.H.-24, Bareilly Road Shahjahanpur, U.P. India Pin-242001</h5>   
                                    <p>Office Address</p>
                                </div>
                            </div>   
                             
                         
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- services-area-end -->
            <!-- map-area-end -->
            <div class="map fix" style="background: #f5f5f5;">
                <div class="container-flud">
                    
                    <div class="row">
                        <div class="col-lg-12">
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3516.5602106071376!2d79.86961087484725!3d27.863353018962684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399fbc58e1b69dc9%3A0xce676f45636779fa!2sFlorence%20Nightingale%20College%20of%20Nursing%2C%20Shahjahanpur!5e0!3m2!1sen!2sin!4v1733730000000"
    width="100%"
    height="450"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
</iframe>

                        </div>
                    </div>
                </div>
            </div>
		     <!-- map-area-end -->
             <!-- contact-area -->
            <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix" style="background: #e7f0f8;">
                
                <div class="container">
             
					<div class="row">
						
                         
                        <div class="col-lg-12 order-2">
                            <div class="contact-bg">
                            <div class="section-title center-align text-center mb-50">
                                <h2>
                                   Custom Enquiry Form
                                </h2>
                               
                            </div>
                             
						<form action="" method="post" class="contact-form mt-30 text-center">
							<div class="row">
                            <div class="col-lg-4">
                                <div class="contact-field p-relative c-name mb-30">                                    
                                    <input type="text" id="firstn" name="firstn" placeholder="First Name" required="">
                                    <i class="icon fa-solid fa-user"></i>
                                </div>                               
                            </div>
							<div class="col-lg-4">                               
                                <div class="contact-field p-relative c-subject mb-30">                                   
                                    <input type="text" id="email" name="email" placeholder="Email" required="">
                                    <i class="icon fa-solid fa-envelope"></i>
                                </div>
                            </div>		
                            <div class="col-lg-4">                               
                                <div class="contact-field p-relative c-subject mb-30">                                   
                                    <input type="text" id="phone" name="phone" placeholder="Phone No." required="">
                                     <i class="icon fa-solid fa-phone"></i>
                                </div>
                            </div>	                            
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-30">                                  
                                    <textarea name="message" id="message" cols="30" rows="50" placeholder="Write comments"></textarea>
                                     <i class="icon fa-solid fa-edit"></i>
                                </div>
                                <div class="slider-btn  text-center">                                          
                                            <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Make An Request <i class="fa-solid fa-long-arrow-right"></i></button>				
                                        </div>                             
                            </div>
                            </div>
                        
                    </form>
                            
                            </div>
                        
						</div>
					</div>
                    
                </div>
               
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->
      <?php include __DIR__ . '/../includes/footer.php'; ?>