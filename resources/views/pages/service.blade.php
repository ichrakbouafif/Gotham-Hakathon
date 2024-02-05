<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Builderz - Construction Company Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <link href="{{ asset('assets/img/favicon.ico') }}"  rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('assets/lib/flaticon/font/flaticon.css') }}" rel="stylesheet"> 
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/slick/slick-theme.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/slick/slick-theme.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">

                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Opening Hour</h3>
                                            <p>24H/24 7D/7 </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Call Us</h3>
                                            <p>+216 21 xxx xxx</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Email Us</h3>
                                            <p>info@example.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.html" class="nav-item nav-link">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link active">Service</a>
                                <a href="team.html" class="nav-item nav-link">Team</a>
                               
                                <a href="profile.html" class="nav-item nav-link">Profile</a>
                                
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="#">LogIn</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Our Services</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Our Services</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Service Start -->
         <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Services</p>
                    <h2>We Provide Services</h2>
                    <br>
                    <h3>Learn how you can help your community before, during and after a disaster or emergency.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item">
                            <div class="service-img">
                                <img  src="{{ asset('assets/img/service1.gif') }}" alt="Image">
                                <div class="service-overlay">
                                    <p>You could help save countless lives by taking simple actions to prepare your community or organization for a disaster before one strikes.</p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Train</h3>
                                <a class="btn" href="learn.html" >+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-img">
                                <img  src="{{ asset('assets/img/service2.jpg') }}" alt="Image">
                                <div class="service-overlay">
                                    <p>Unlocking Knowledge, Empowering Rights:
                                        Guiding, Protecting, and Strengthening Our Community
                                        Learn more here!</p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Educate</h3>
                                <a class="btn" href="learn.html" >+</a>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item">
                            <div class="service-img">
                                <img  src="{{ asset('assets/img/service3.gif') }}" alt="Image">
                                <div class="service-overlay">
                                    <p>One of the ways Helping Hands can do all we do in the community is because of our incredible volunteers. Whether 30 mins or 30 hours a month, giving the gift of time makes a big difference.</p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Volunteer</h3>
                                <a class="btn" href="donationform.html" >+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-img">
                                <img  src="{{ asset('assets/img/service4.jpg') }}"alt="Image">
                                <div class="service-overlay">
                                    <p>Thank you for your interest in donating. We extend our heartfelt thanks to those who have made our success possible through contributions of time, goods, or money. Without your generosity, we would not be able to help those who require assistance in our community.</p>
                                </div>
                            </div>
                            <div class="service-text">
                                <h3>Donate</h3>
                                <a class="btn" href="donationform.html" data-lightbox="">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- Service End -->
      
            
                     <!-- FAQs Start -->
                     <div class="faqs">
                        <div class="container">
                            <div class="section-header text-center">
                                <p>Frequently Asked Question</p>
                                <h2>You May Ask</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="accordion-1">
                                        <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                            <div class="card-header">
                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                                    Extreme or Excessive Heat?
                                                </a>
                                            </div>
                                            <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                                <div class="card-body">
                                                   * Drink fluids.
                                                    <br>
                                                   * Avoid high-energy outdoor activities.
        
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                            <div class="card-header">
                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                                    High Wind?
                                                </a>
                                            </div>
                                            <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                                <div class="card-body">
                                                    * Delay or adjust travel plans.
                                                   <br> * Stay away from trees and power lines.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                                            <div class="card-header">
                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                                    Winter Storm Warning?
                                                </a>
                                            </div>
                                            <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                                <div class="card-body">
                                                    * Limit your time outside and wear warm.
                                                   <br> * Prepare for power outages.
                                                    <br>* Stay off the roads.
        clothes.
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="accordion-2">
                                        <div class="card wow fadeInRight" data-wow-delay="0.1s">
                                            <div class="card-header">
                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                                    Prepare for Wildfires?
                                                </a>
                                            </div>
                                            <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                                <div class="card-body">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card wow fadeInRight" data-wow-delay="0.2s">
                                            <div class="card-header">
                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                                    Indoor Water Conservation Tips Before a Drought?
                                                </a>
                                            </div>
                                            <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                                                <div class="card-body">
                                                   * Use a commercial car wash that recycles water.
                                                   * Heavy rain provides up to two weeks of moisture.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                            <div class="card-header">
                                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                                     During a Home Fire?
                                                </a>
                                            </div>
                                            <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                                <div class="card-body">
                                                     * Stay low to avoid smoke and poisonous gases.
                                                   <br> * Open doors cautiously.
                                                   <br> * Call for help.
                                                </div>
                                            </div>
                                        </div>
                                       
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FAQs End -->

             <!-- Footer Start -->
             <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Office Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Pont Sud du Lac, R54Q+PM6, lac 0 de, Tunis</p>
                                <p><i class="fa fa-phone-alt"></i>+216 21 xxx xxx</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="service.html">Train</a>
                                <a href="service.html">Educate</a>
                                <a href="service.html">Volunteer</a>
                                <a href="service.html">Donate</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="about.html">About Us</a>
                                <a href="contact.html">Contact Us</a>
                                <a href="team.html">Our Team</a>
                              
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">Survive</a>, All Right Reserved.</p>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- JavaScript Libraries -->
        <script src="{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/slick/slick.min.js') }}"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
</html>
