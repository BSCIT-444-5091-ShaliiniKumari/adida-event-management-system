<?php include 'header.php';?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Contact us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <!--<li class="breadcrumb-item"><a href="#">Pages</a></li>-->
                    <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Contact Us</p>
                <h1 class="mb-5">If You Have Any Query, Please Contact Us</h1>
            </div>
            
            
            <div class="row g-5">
                  <!-- Success or Error message (display from session) -->
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-info">
                <?php echo $_SESSION['message']; ?>
            </div>
            <?php unset($_SESSION['message']); // Clear the session message after displaying it ?>
        <?php endif; ?>

        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <!-- Form to collect the data -->
                <form action="contact_process.php" method="POST">
                    <div class="row g-3">
                        <!-- Name Field -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <!-- Email Field -->
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <!-- Subject Field -->
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <!-- Message Field -->
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="comments" id="comments" placeholder="Leave a message here" style="height: 250px" required></textarea>
                                <label for="comments">Message</label>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="col-12">
                            <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
           
        </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="mb-4">Contact Details</h3>
                   <div class="d-flex border-bottom pb-3 mb-3">
        </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-phone-alt text-body"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Call Us</h6>
                            <span>+91-9650466106</span>
                        </div>
                        
                    </div>
                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-envelope text-body"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Mail Us</h6>
                            <span>adidaevents@gmail.com</span>
                        </div>
                    </div>
 <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-map-marker-alt text-body"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Our Office</h6>
                            <span>1/6979 street no -2 Shivaji Park shahdara Delhi-110032</span>
                        </div>
                    </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14001.643144095731!2d77.27339839201085!3d28.677356085963837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd006a57a4ab%3A0x87c3f6260a673665!2sAchiever%E2%80%99s%20Hub!5e0!3m2!1sen!2sin!4v1737297434891!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <?php include 'footer.php';?>