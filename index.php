<?php include 'header.php';?>

 <div class="containerr ">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Carousel Items -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/staff.jpg" class="d-block w-100" alt="First Slide" style="height: 650px;" >
                </div>
                <div class="carousel-item">
                    <img src="img/drop.jpg" class="d-block w-100" alt="Second Slide" style="height: 650px;">
                </div>
                <div class="carousel-item">
                    <img src="img/cevents.jpg" class="d-block w-100" alt="Third Slide" style="height: 650px;">
                </div>
                
                
              
            </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>






<style>
/* Carousel container styling */
.carousel-container {
    width: 100%;
    max-width: 1200px;
    margin: auto;
    overflow: hidden;
    position: relative;
}

/* Carousel slide styling */
.carousel-slide {
    display: flex;
    white-space: nowrap; /* Prevent wrapping of items */
    transition: transform 0.5s ease-in-out;
}

/* Image column styling */
.col-2 {
    flex: 0 0 auto; /* Prevents resizing and wrapping */
    width: calc(100% / 6); /* Show 6 items per row at full view */
    box-sizing: border-box;
    padding: 5px;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .col-2 {
        width: calc(100% / 3); /* Show 3 items per row on smaller screens */
    }
}

@media (max-width: 480px) {
    .col-2 {
/*        width: 100%; /* Show 1 item per row on extra small screens */*/
    }
}

.img-fluid {
    width: 100%;
    height: auto;
    border-radius: 8px;
    transition: transform 0.3s; /* Add a hover effect */
}

.img-fluid:hover {
    transform: scale(1.05); /* Slight zoom effect on hover */
}
</style>
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 ">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid rounded" src="img/staff.jpg" style="height: 400px;">
                </div>
                        
                       
                   
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <h1 class="mb-4">Welcome to Adida Events</h1>
                    <p class="mb-4" style="font-size:20px;">Welcome to Adida Events, a premier event management company rooted in creativity, passion, and a commitment to excellence. With a focus on delivering exceptional experiences, we specialize in curating unforgettable moments, from corporate gatherings and business conferences to personal celebrations and milestone events. Our approach blends meticulous planning, innovative ideas, and personalized touches to ensure every event reflects the unique story and vision of our clients.</p>
                    
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="about.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

 


    <!-- Features Start -->
   <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5">
           <h2 class=" bg-white text-center text-primary px-3">WHY CHOOSE US</h2>
            <p class="mb-4">Here is why we are different from Others</p>
        </div>
        <div class="row g-4">
            <!-- Quality & Safety -->
            <div class="col-lg-4 col-md-6 text-center">
                <div class="icon-box p-4">
                    <div class="icon mb-3">
                        <img src="img/scale-icon.png" alt="Quality & Safety" style="width: 90px; height: 90px;">
                    </div>
                    <h5 class="fw-bold" style="font-size: 14px;">QUALITY & SAFETY</h5>
                    <p>Maintain Stringent Services Quality Measures</p>
                </div>
            </div>
            <!-- Standards -->
            <div class="col-lg-4 col-md-6 text-center">
                <div class="icon-box p-4">
                    <div class="icon mb-3">
                        <img src="img/standards-icon.png" alt="Standards" style="width: 90px; height: 90px;">
                    </div>
                    <h5 class="fw-bold" style="font-size: 14px;">STANDARDS</h5>
                    <p>Maintain Ethical Standards and Fair Business Policy</p>
                </div>
            </div>
            <!-- Fast & Safe Dispatch -->
            <div class="col-lg-4 col-md-6 text-center">
                <div class="icon-box p-4">
                    <div class="icon mb-3">
                        <img src="img/truck-icon.png" alt="Fast & Safe Dispatch" style="width: 90px; height: 90px;">
                    </div>
                    <h5 class="fw-bold" style="font-size: 14px;">FAST & SAFE DISPATCH</h5>
                    <p>Get the Servicess Delivery On time by maintaining farm quality</p>
                </div>
            </div>
            <!-- Variety of Servicess -->
            <div class="col-lg-4 col-md-6 text-center">
                <div class="icon-box p-4">
                    <div class="icon mb-3">
                        <img src="img/variety-icon.png" alt="Variety of Servicess" style="width: 90px; height: 90px;">
                    </div>
                    <h5 class="fw-bold" style="font-size: 14px;">VARIETY OF ServicesS</h5>
                    <p>A comprehensive range of Seed Servicess</p>
                </div>
            </div>
            <!-- Customer Relationship -->
            <div class="col-lg-4 col-md-6 text-center">
                <div class="icon-box p-4">
                    <div class="icon mb-3">
                        <img src="img/customer-icon.png" alt="Customer Relationship" style="width: 90px; height: 90px;">
                    </div>
                    <h5 class="fw-bold" style="font-size: 14px;">CUSTOMER RELATIONSHIP</h5>
                    <p>Believe in sustainable & long-term relationship</p>
                </div>
            </div>
            <!-- Reasonable Prices -->
            <div class="col-lg-4 col-md-6 text-center">
                <div class="icon-box p-4">
                    <div class="icon mb-3">
                        <img src="img/pricing-icon.png" alt="Reasonable Prices" style="width: 90px; height: 90px;">
                    </div>
                    <h5 class="fw-bold" style="font-size: 14px;">REASONABLE PRICES</h5>
                    <p>Follow Client-Centric approach with Reasonable Pricing</p>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Features End -->




    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3 mb-3">Our Services</p>
                <h1 class="mb-5">Our Services Category</h1>
            </div>
            <div class="row gx-4">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/corporate.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square text-center  " href="corporate_events.php"><p style="color:#fff; font-size:20px;">Corporate events, vibrant and dynamic, include conferences, seminars, product launches, team-building activities, and award ceremonies, and warmth to professional gatherings.</p></a>
                              
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="corporate_events.php" style="font-size:15px;">Corporate Events</a>
                            <!--<span class="text-primary me-1">$19.00</span>-->
                            <!--<span class="text-decoration-line-through">$29.00</span>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/wedding-meal.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square text-center  " href="wedding_meal.php"><p style="color:#fff; font-size:20px;">Wedding meals, like appetizers, main courses, and desserts, are crafted with rich flavors and care, creating unforgettable culinary experiences.</p></a>
                                
                            </div>
                        </div>
                        <div class="text-center p-4"> 
                            <a class="d-block h5" href="wedding_meal.php" style="font-size:15px;">Wedding meal</a>
                            <!--<span class="text-primary me-1">$19.00</span>-->
                            <!--<span class="text-decoration-line-through">$29.00</span>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/birthday.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square text-center  " href="birthday_parties.php"><p style="color:#fff; font-size:20px;">Birthday parties are joyful celebrations filled with vibrant decor, fun activities, and delicious treats, creating lasting memories and bringing loved ones together.</p></a>
                                
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="birthday_parties.php" style="font-size:15px;">Birthday Parties</a>
                            <!--<span class="text-primary me-1">$19.00</span>-->
                            <!--<span class="text-decoration-line-through">$29.00</span>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/bar-service.jpg" alt="">
                            <div class="product-overlay">
                               <a class="btn btn-square text-center  " href="bar_service.php"><p style="color:#fff; font-size:20px;">Bar services offer a wide range of beverages, including cocktails, mocktails, and premium spirits, providing refreshment, energy, and a lively atmosphere for any event.</p></a>
                               
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="bar_service.php" style="font-size:15px;">Bar service</a>
                            <!--<span class="text-primary me-1">$19.00</span>-->
                            <!--<span class="text-decoration-line-through">$29.00</span>-->
                        </div>
                    </div>
                </div>


            </div>

<br><br>
            <div class="row gx-4">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/drop-catering.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square text-center  " href="drop_catering.php"><p style="color:#fff; font-size:20px;">Drop-off catering provides freshly prepared meals delivered straight to your venue, ensuring convenience and quality. special occasions, the need for on-site staff or setup.</p></a>
                              
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="drop_catering.php" style="font-size:15px;">Drop off catering</a>
                            <!--<span class="text-primary me-1">$19.00</span>-->
                            <!--<span class="text-decoration-line-through">$29.00</span>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/staff 2.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square text-center  " href="staff_service.php"><p style="color:#fff; font-size:20px;">Staff services provide professional and attentive personnel, including servers, bartenders, and event coordinators, to ensure smooth execution and guest satisfaction.</p></a>
                                
                            </div>
                        </div>
                        <div class="text-center p-4"> 
                            <a class="d-block h5" href="staff_service.php" style="font-size:15px;">Staff services</a>
                            <!--<span class="text-primary me-1">$19.00</span>-->
                            <!--<span class="text-decoration-line-through">$29.00</span>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/image12.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square text-center  " href="Exhibition.php"><p style="color:#fff; font-size:20px;">Exhibitions showcase products, services, and ideas, creating opportunities for networking, brand visibility, and audience engagement in a dynamic setting.</p></a>
                                
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="Exhibition.php" style="font-size:15px;">Exhibitions</a>
                            <!--<span class="text-primary me-1">$19.00</span>-->
                            <!--<span class="text-decoration-line-through">$29.00</span>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="product-item">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/trosure.jpg" alt="">
                            <div class="product-overlay">
                               <a class="btn btn-square text-center  " href="trou_packing.php"><p style="color:#fff; font-size:20px;">Trousseau packing offers elegant and customized packaging for wedding essentials, adding a touch of beauty, tradition, and personalization to your special occasions.</p></a>
                               
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="trou_packing.php" style="font-size:15px;">Trousseau Packing</a>
                            <!--<span class="text-primary me-1">$19.00</span>-->
                            <!--<span class="text-decoration-line-through">$29.00</span>-->
                        </div>
                    </div>
                </div>

                
            </div>




<br><br>
            
                
            </div>










        </div>
    </div>
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<div class="viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bbb_viewed_title_container">
                        <h2 class="mb-5 text-center">Gallery</h2>
                        <div class="bbb_viewed_nav_container">
                            <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <div class="bbb_viewed_slider_container">
                        
                      

                        <div class="owl-carousel owl-theme bbb_viewed_slider">
                         
                            <div class="owl-item">
                                <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><img src="img/1.jpg" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                                        
                                       
                                    </div>
                                   
                                </div>
                            </div>

                       
                            <div class="owl-item">
                                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><img src="img/2.jpg" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                
                                        
                                    </div>
                                    
                                </div>
                            </div>

                          
                            <div class="owl-item">
                                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><img src="img/3.jpg" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                                       
                                       
                                    </div>
                                    
                                </div>
                            </div>

                           
                            <div class="owl-item">
                                <div class="bbb_viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><img src="img/4.jpg" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                                       
                                    </div>
                                   
                                </div>
                            </div>

                            
                            <div class="owl-item">
                                <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><img src="img/5.jpg" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                                       
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="owl-item">
                                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><img src="img/6.jpg" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                                       
                                    </div>
                                   
                                </div>
                            </div>



                            <div class="owl-item">
                                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><img src="img/7.jpg" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                                       
                                    </div>
                                   
                                </div>
                            </div>




                            <div class="owl-item">
                                <div class="bbb_viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="bbb_viewed_image"><img src="img/8.jpg" alt=""></div>
                                    <div class="bbb_viewed_content text-center">
                                       
                                    </div>
                                   
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>













    <!-- Team Start -->
    


     <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Testimonial</p>
                <h1 class="mb-5">What People Say About Our Company</h1>
            </div>
            <div class="row">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-img">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-4.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
    <div class="owl-carousel testimonial-carousel">
        <div class="testimonial-item">
            <!--<img class="img-fluid mb-3" src="img/testimonial-1.jpg" alt="">-->
            <p class="fs-5">"Adida Events made my wedding day truly magical! From the stunning decor to the flawless execution, everything was beyond perfect. The team’s attention to detail and professionalism was remarkable. Highly recommended!"</p>
            <h5>Neha Sharma</h5>
            <!--<span class="text-primary">Bride</span>-->
        </div>
        <div class="testimonial-item">
            <!--<img class="img-fluid mb-3" src="img/testimonial-2.jpg" alt="">-->
            <p class="fs-5">"The team at Adida Events organized our corporate event seamlessly. The planning, execution, and service were impeccable. Our guests were impressed, and we couldn’t have asked for a better experience."</p>
            <h5>Rahul Mehra</h5>
            <!--<span class="text-primary">Corporate Manager</span>-->
        </div>
        <div class="testimonial-item">
            <!--<img class="img-fluid mb-3" src="img/testimonial-3.jpg" alt="">-->
            <p class="fs-5">"I hired Adida Events for my daughter’s birthday party, and they went above and beyond! The decor, activities, and catering were spot on. My guests couldn’t stop praising the arrangements. Truly unforgettable!"</p>
            <h5>Pooja Verma</h5>
            <!--<span class="text-primary">Mother</span>-->
        </div>
        <div class="testimonial-item">
            <!--<img class="img-fluid mb-3" src="img/testimonial-4.jpg" alt="">-->
            <p class="fs-5">"Adida Events is the best event planner we’ve worked with! They handled our exhibition stall setup with creativity and efficiency. It helped us stand out and attract a lot of attention. Fantastic service!"</p>
            <h5>Ravi Gupta</h5>
            <!--<span class="text-primary">Business Owner</span>-->
        </div>
    </div>
</div>
</div>
</div>
</div>
    <!-- Testimonial End -->





 <div class="container-xxl py-5">
        <div class="container">
            
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <!--<h3 class="mb-4">Need a functional contact form?</h3>-->
                    
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 250px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Contact End -->



   <?php include 'footer.php';?>