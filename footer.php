 
 <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-3 col-md-6">
                <div id="logo" class="pull-left">
  <!-- Replacing the logo with styled text -->
  <a href="#intro" class="scrollto" style="text-decoration: none;">
    <h1 style="font-size: 32px; margin-bottom: 20px;">
      <span style="color: white;">Adida</span> 
      <span style="color: blue;">Events</span>
    </h1>
  </a>
</div>
                    <!-- <h5 class="text-white mb-4">Newsletter</h5> -->
                    <p style="color:#fff;">Adida Events is a leading event management company delivering unforgettable experiences. From corporate to personal events, we combine creativity, professionalism, and precision to make every occasion extraordinary.</p>
                   <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <h5 class=" mb-4" style="font-size:24px; color: #eddd5e;" >Our Office</h5>
                    <p class="mb-2" style="color:#fff;"><i class="fa fa-phone-alt me-3"></i>+91-9650466106</p>
                    <p class="mb-2" style="color:#fff;"><i class="fa fa-envelope me-3"></i>adidaevents@gmail.com</p>
                    <p class="mb-2" style="color:#fff;"><i class="fa fa-map-marker-alt me-3"></i>1/6979 street no -2 Shivaji Park shahdara Delhi-110032</p>
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4" style="font-size:24px; color: #eddd5e;" >Quick Links</h5>
                    <a class="btn btn-link text-white" href="index.php">Home</a>
                    <a class="btn btn-link text-white" href="about.php">About Us</a>
                    <a class="btn btn-link text-white" href="product.php">Our Products</a>
                    <a class="btn btn-link text-white" href="contact.php">Contact us</a>
                    <!--<a class="btn btn-link" href="">Support</a>-->
                </div>
                <div class="col-lg-2 col-md-6">
                <h5 class="mb-4" style="font-size:24px; color: #eddd5e;" >More Pages</h5>
                    <a class="btn btn-link text-white" href="enq.php">Enquiry</a>
                    <a class="btn btn-link text-white" href="bar_service.php">Bar Service</a>
                    <a class="btn btn-link text-white" href="wedding_meal.php">Wedding meal</a>
                    <a class="btn btn-link text-white" href="birthday_parties.php">Birthday Parties</a>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-secondary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; 2024 <a class="fw-semi-bold" href="#">Adida event</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                   
                    Designed By <a class="fw-semi-bold" href="">Anjali Singh</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6746e04e2480f5b4f5a4943c/1idmdocts';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>



<!-- jQuery -->
    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->

    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>

    <!-- Custom Script -->
    <script>
        $(document).ready(function () {
            var selectBody = $('body');
            var curId = 0;

            selectBody.addClass('slide-' + curId);

            $('#carousel-example-generic').on('slid.bs.carousel', function () {
                var newId = $(this).find('.carousel-item.active').index();
                if (newId !== curId) {
                    selectBody.removeClass('slide-' + curId).addClass('slide-' + newId);
                    curId = newId;
                }
            });
        });














$(document).ready(function()
{

   
        if($('.bbb_viewed_slider').length)
        {
            var viewedSlider = $('.bbb_viewed_slider');

            viewedSlider.owlCarousel(
            {
                loop:true,
                margin:30,
                autoplay:true,
                autoplayTimeout:5000,
                nav:false,
                dots:false,
                responsive:
                {
                    0:{items:1},
                    575:{items:2},
                    768:{items:3},
                    991:{items:4},
                    1199:{items:6}
                }
            });

            if($('.bbb_viewed_prev').length)
            {
                var prev = $('.bbb_viewed_prev');
                prev.on('click', function()
                {
                    viewedSlider.trigger('prev.owl.carousel');
                });
            }

            if($('.bbb_viewed_next').length)
            {
                var next = $('.bbb_viewed_next');
                next.on('click', function()
                {
                    viewedSlider.trigger('next.owl.carousel');
                });
            }
        }
 // Remove inline styles from owl-item after initialization
    // $('.owl-item').removeAttr('style');

    });
</script>
</body>

</html>