<?php
session_start(); // Start the session to access the message
include 'header.php'; 
?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Enquiry Now</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Enquiry Now</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Enquiry Now</p>
        </div>

        <!-- Success or Error message (display from session) -->
        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-info">
                <?php echo $_SESSION['message']; ?>
            </div>
            <?php unset($_SESSION['message']); // Clear the session message after displaying it ?>
        <?php endif; ?>

        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <!-- Form to collect the data -->
                <form action="enquiry_process.php" method="POST">
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
        </div>
        
         </div>
    </div>
</div>
<!-- Contact End -->

<?php include 'footer.php'; ?>
