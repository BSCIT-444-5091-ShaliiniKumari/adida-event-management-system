<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Adida Events</title>

<meta name="geo.region" content="IN" />
<meta name="geo.position" content="22.351115;78.667743" />
<meta name="ICBM" content="22.351115, 78.667743" />

<meta name="geo.region" content="IN-UP" />
<meta name="geo.position" content="27.130334;80.859666" />
<meta name="ICBM" content="27.130334, 80.859666" />




    <!-- Favicon -->
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
   
    <link href="img/favicon-icon.jpeg" rel="icon">
 <meta charset="utf-8">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> 
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
 .box {
            width: 100%;
            height: 100vh;
            background: #fc0;
            display: block;
            position: absolute;
            z-index: 96;
            transition: background 1s ease-out;
            top: 0;
            left: 0;
            z-index: -999;
            opacity: 0.8;
        }







 /* General container styling */
    .container-xxl {
        background-color: #fdfdfd;
    }

    /* Process step styling */
    .process-step {
        color: #A37A59;
    }

    /* Icon circle and layout */
    .process-icon img {
        border: 2px solid #417835;
        border-radius: 50%;
        padding: 15px;
        width: 70px;
        height: 70px;
    }

    /* Arrow styling */
    .arrow-icon {
        font-size: 2rem;
        color: #417835;
    }

    /* Heading styling */
    h5 {
        font-weight: bold;
/*        color: #A37A59;*/
        font-size: 0.9rem;
    }

    /* Text styling */
    p {
/*        font-size: 0.8rem;*/
        color: #666;
        margin: 0 auto;
/*        max-width: 90%;*/
    }

    /* Adjust spacing between steps and icons */
    .process-step {
        padding: 20px 10px;
    }





        /* Container styling */
    .carousel-container {
        width: 100%;
        max-width: 1000px;
        margin: auto;
        overflow: hidden;
        position: relative;
    }

    /* Carousel wrapper */
    .carousel-slide {
        display: flex;
        animation: slide 20s infinite;
    }

    /* Individual card styling */
    .carousel-item {
        flex: 1 0 20%;
        box-sizing: border-box;
        padding: 15px;
    }

    /* Card content styling */
    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        text-align: center;
        background-color: #f8f8f8;
    }

    .card img {
        width: 100%;
        height: auto;
    }

    .card-body {
        padding: 15px;
    }

    .card-title {
        font-size: 1.2em;
        margin-bottom: 5px;
    }

    .card-text {
        font-size: 0.9em;
        color: #666;
    }

    .price {
        font-weight: bold;
        color: #333;
    }

    /* Stars styling */
    .star-list {
        list-style: none;
        padding: 0;
        margin: 5px 0;
        color: #FFD700;
    }

    /* Animation for slide effect */
    @keyframes slide {
        0% { transform: translateX(0); }
        15% { transform: translateX(0); }
        20% { transform: translateX(-20%); }
        35% { transform: translateX(-20%); }
        40% { transform: translateX(-40%); }
        55% { transform: translateX(-40%); }
        60% { transform: translateX(-60%); }
        75% { transform: translateX(-60%); }
        80% { transform: translateX(-80%); }
        95% { transform: translateX(-80%); }
        100% { transform: translateX(0); }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
/*    .owl-item {*/
/*    width: auto !important;*/
/*    margin-right: 0 !important;*/
/*}*/
.viewed
{
    padding-top: 51px;
    padding-bottom: 60px;
/*    background: #eff6fa;*/
}
.viewedd
{
    padding-top: 51px;
    padding-bottom: 0px;
/*    background: #eff6fa;*/
}
.bbb_viewed_title_container
{
    border-bottom: solid 1px #dadada;
}
.bbb_viewed_title
{
    margin-bottom: 14px;
}
.bbb_viewed_nav_container
{
    position: absolute;
    right: -5px;
    bottom: 14px;
}
.bbb_viewed_nav
{
    display: inline-block;
    cursor: pointer;
}
.bbb_viewed_nav i
{
    color: #dadada;
    font-size: 18px;
    padding: 5px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.bbb_viewed_nav:hover i
{
    color: #606264;
}
.bbb_viewed_prev
{
    margin-right: 15px;
}
.bbb_viewed_slider_container
{
    padding-top: 50px;
}
.bbb_viewed_item
{
    width: 200%;
    /*background: #FFFFFF;*/
    border-radius: 2px;
    padding-top: 0px;
    padding-bottom: 25px;
    padding-left: 0px;
    padding-right: 0px;
}
.bbb_viewed_image
{
    width: 185px;
    height: 115px;
}
.bbb_viewed_image img
{
    display: block;
    max-width: 100%;
}
.bbb_viewed_content
{
    width: 100%;
    margin-top: 25px;
}
.bbb_viewed_price
{
    font-size: 16px;
    color: #000000;
    font-weight: 500;
}
.bbb_viewed_item.discount .bbb_viewed_price
{
    color: #df3b3b;
}
.bbb_viewed_price span
{
    position: relative;
    font-size: 12px;
    font-weight: 400;
    color: rgba(0,0,0,0.6);
    margin-left: 8px;
}
.bbb_viewed_price span::after
{
    display: block;
    position: absolute;
    top: 6px;
    left: -2px;
    width: calc(100% + 4px);
    height: 1px;
    background: #8d8d8d;
    content: '';
}
.bbb_viewed_name
{
    margin-top: 65px;
}
.bbb_viewed_name a
{
    font-size: 14px;
    color: #000000;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease;
}
.bbb_viewed_name a:hover
{
    color: #0e8ce4;
}
.item_marks
{
    position: absolute;
    top: 18px;
    left: 18px;
}
.item_mark
{
    display: none;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    color: #FFFFFF;
    font-size: 10px;
    font-weight: 500;
    line-height: 36px;
    text-align: center;
}
.item_discount
{
    background: #df3b3b;
    margin-right: 5px; 
}
.item_new 
{
    background: #0e8ce4;
}
.bbb_viewed_item.discount .item_discount
{
    display: inline-block;
}
.bbb_viewed_item.is_new .item_new
{
    display: inline-block;
}




#google_translate_element {
    display: inline-block;
    margin-left: 10px;
}

.navbar-nav .nav-item {
    display: flex;
    align-items: center;
}

</style>


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span>+91-9650466106 &nbsp; </span>
                    
                     <span class="me-2 fw-semi-bold"><i class="fa fa-envelope me-2"></i>Mail Us:</span>
                    <span>adidaevents@gmail.com</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


      <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="index.php" class="navbar-brand d-flex align-items-center">
    <div id="logo" class="pull-left">
  <!-- Replacing the logo with styled text -->
  <a href="#intro" class="scrollto" style="text-decoration: none;">
    <h1 style="font-size: 32px; margin-bottom: 20px;">
      <span style="color: #f82249;">Adida</span> 
      <span style="color: blue;">Events</span>
    </h1>
  </a>
</div>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link active"><b>Home</b></a>
            <a href="booking.php" class="nav-item nav-link active"><b>Book Now</b></a>
            <a href="about.php" class="nav-item nav-link"><b>About us</b></a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><b>Our Services</b></a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="corporate_events.php" class="dropdown-item mb-2">Corporate events</a>
                    <a href="wedding_meal.php" class="dropdown-item mb-2">Wedding meal</a>
                    <a href="birthday_parties.php" class="dropdown-item mb-2">Birthday parties</a>
                    <a href="bar_service.php" class="dropdown-item mb-2">Bar service</a>
                    <a href="drop_catering.php" class="dropdown-item mb-2">Drop off catering</a>
                    <a href="staff_service.php" class="dropdown-item mb-2">Staff services</a>
                    <a href="Exhibition.php" class="dropdown-item mb-2">Exhibitions</a>
                    <a href="trou_packing.php" class="dropdown-item mb-2">Trousseau Packing</a>
                </div>
            </div>
            <a href="contact.php" class="nav-item nav-link"><b>Contact us</b></a>
            <div id="google_translate_element" class="nav-item ms-3"></div>
        </div>
    </div>
</nav>


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Navbar End -->
