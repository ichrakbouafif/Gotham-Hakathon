<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Builderz - Construction Company Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

         <!-- Favicon -->
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
                                    <!-- <h1>Builderz</h1> -->
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
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
                                <a href="index.html" class="nav-item nav-link active">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Service</a>
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


            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                    <li data-target="#carousel" data-slide-to="4"></li>
                    <li data-target="#carousel" data-slide-to="5"></li>
                    <li data-target="#carousel" data-slide-to="6"></li>
                    <li data-target="#carousel" data-slide-to="7"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/img/img8.jpg') }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">We Are Trusted</p>
                            <h1 class="animated fadeInLeft">For Your Life</h1>
                            <a class="btn animated fadeInUp" href="">Rising Together</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/img2.jpg') }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">We Are Trusted</p>
                            <h1 class="animated fadeInLeft">For Your Life</h1>
                            <a class="btn animated fadeInUp" href="">Rising Together</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/img3.jpg') }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">We Are Trusted</p>
                            <h1 class="animated fadeInLeft">For Your Life</h1>
                            <a class="btn animated fadeInUp" href="">Rising Together</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/img4.jpg') }} "alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">We Are Trusted</p>
                            <h1 class="animated fadeInLeft">For Your Life</h1>
                            <a class="btn animated fadeInUp" href="">Rising Together</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/img5.jpg') }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">We Are Trusted</p>
                            <h1 class="animated fadeInLeft">For Your Life</h1>
                            <a class="btn animated fadeInUp" href="">Rising Together</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/img6.jpg') }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">We Are Trusted</p>
                            <h1 class="animated fadeInLeft">For Your Life</h1>
                            <a class="btn animated fadeInUp" href="">Rising Together</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/img7.jpg') }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">We Are Trusted</p>
                            <h1 class="animated fadeInLeft">For Your Life</h1>
                            <a class="btn animated fadeInUp" href="">Rising Together</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/img/img1.jpg') }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">We Are Trusted</p>
                            <h1 class="animated fadeInLeft">For Your Life</h1>
                            <a class="btn animated fadeInUp" href="">Rising Together</a>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->


          <!-- Feature Start-->
          <div class="feature wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-worker"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Expert Worker</h3>
                                <p>Our expert workers are dedicated to ensuring that every task is executed with precision and finesse. <br> Expertise is not just a trait.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Quality Work</h3>
                                <p> Our team of skilled professionals is dedicated to providing top-notch services, ensuring every project meets the highest standards of quality.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="feature-text">
                                <h3>24/7 Support</h3>
                                <p>Our commitment to your satisfaction goes beyond business hours. With our round-the-clock support, you can reach us anytime, day or night. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->

            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="{{ asset('assets/img/team.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>Welcome to Survive</p>
                                <h2>25 Years Experience</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Survive is a digital sanctuary committed to empowering individuals, first responders, and decision-makers in navigating the unpredictable challenges posed by natural disasters. We believe that through knowledge, preparation, and community support, we can transform crisis moments into opportunities for resilience and collective strength.                                </p>
                                <p>
                                    Our mission is clear: to provide a lifeline of information and resources for citizens, first responders, and decision-makers alike. In the face of natural disasters, we strive to be the beacon of hope, equipping you with the tools needed to not only survive but thrive amidst adversity.                                </p>
                                <a class="btn" href="">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Fact Start -->
            <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">109</h2>
                                        <p>Expert Workers</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">485</h2>
                                        <p>Helped Citizens</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">789</h2>
                                        <p>Successful Intervention</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">890</h2>
                                        <p>Grateful Recipients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fact End -->


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
      


            <!-- Video Start -->
            <div class="video wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>        
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video End -->


             <!-- Team Start -->
             <div class="team">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Our teams</p>
                        <h2>Meet Our Savers</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img  src="{{ asset('assets/img/S1.jpg') }}"alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Civil Protection <br>Team </h2>
                                    <p>198</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fas fa-phone"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('assets/img/S2.jpg') }}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Tunisian Red Crescent</h2>
                                    <p>71 560 184 </p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fas fa-phone"></i></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('assets/img/S4.jpg') }}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Environmental policing</h2>
                                    <p>71 344 171</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-phone"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('assets/img/S3.jpg') }}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Forest firefighting team</h2>
                                    <p>71 190 100</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('assets/img/S5.jpg') }}"alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2> National Guard ground units</h2>
                                    <p>193</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-phone"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('assets/img/S6.jpg') }}"alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>National Guard naval units</h2>
                                    <p>194</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-phone"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('assets/img/S7.jpg') }}"alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Medical <br>ambulance</h2>
                                    <p>190</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-phone"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('assets/img/S8.avif') }}" alt="Team Image">
                                </div>
                                <div class="team-text">
                                    <h2>Rescue<br> police</h2>
                                    <p>197</p>
                                </div>
                                <div class="team-social">
                                    <a class="social-tw" href=""><i class="fab fa-phone"></i></a>
                                    <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                </div>
                            </div>
                        </div>

                        
                    </div>
                </div>
            </div>
            <!-- Team End -->
            

           
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

<!-- Daily news -->
<div class="testimonial wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider-nav">
                    <div class="slider-nav"><img  src="{{ asset('assets/img/dailynews1.jpg') }}" alt="Daily News Image 1"></div>
                    <div class="slider-nav"><img src="{{ asset('assets/img/dailynews2.jpg') }}" alt="Daily News Image 2"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">
                    <div class="slider-item">
                        <h3>Tunisie: 4800 hectares de forêts ravagés par les flammes en 2023 !</h3>
                        <p>Zouhaïer Ben Salem, directeur à la Direction Générale des Forêts (Ministère de l'Agriculture), a annoncé une diminution de 20% des incendies de forêts cette année, avec 4800 hectares détruits, dont 1177 hectares à Melloula (Jendouba).
                            Un hectare brûlé coûte entre 25 000 et 55 000 dinars à l'État. Seulement 4% des incendies sont naturels, le reste est d'origine humaine, voire intentionnelle.
                            Une prime de 15 dinars par infraction forestière constatée a été instaurée pour lutter contre ces actes criminels. Le montant total ne doit pas dépasser 1000 dinars annuellement.</p>
                    </div>
                    <div class="slider-item">
                        <h3>Ghardimaou : Un incendie dévaste la fourrière des douanes et le parquet enquête</h3>
                        <p>Un important incendie a ravagé l'entrepôt de la fourrière des douanes à Ghardimaou, le 26 janvier 2024.
                            Il a engendré la destruction de quantités significatives d'essence de contrebande saisie, ainsi que de véhicules et d'autres objets saisis.
                            Les équipes de la protection civile ont agi pendant plus de trois heures pour contenir l'incendie et éviter sa propagation aux habitations avoisinantes. Une enquête a été ouverte pour déterminer les causes de l'incident.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Daily News -->



            <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Latest News</p>
                        <h2>Latest Detected and Solved Disasters</h2>
                    </div>
                    <div class="row blog-page">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/img/fire.jpg') }}"alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3>Tabarka Wildfire</h3>
                                   
                                </div>
                                
                                <div class="blog-text">
                                    <p>
                                       In July 25, 2023, a vigilant citizen noticed smoke rising from the forested hills near Tabarka, Tunisia. Realizing the gravity of the situation, they promptly called the responsible forest protection authorities.                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/img/drown.jpg') }}" alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3>Drowning Case in Mahdia</h3>
                                   
                                </div>
                              
                                <div class="blog-text">
                                    <p>
                                          In  August 28, 2023, a heart-wrenching incident unfolded in Mahdi. A child accidentally fell into the water, struggling to stay afloat. Panic and urgency filled the air as nearby citizens witnessed the distressing scene.                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-item">
                                <div class="blog-img">
                                    <img src="{{ asset('assets/img/inondations.jpg') }}" alt="Image">
                                </div>
                                <div class="blog-title">
                                    <h3>Recent Flooding in Nabeul</h3>
                             
                                </div>
                            
                                <div class="blog-text">
                                    <p> 
                                        In December 2023, Nabeul,  Heavy rainfall led to widespread flooding, affecting homes, roads, and farmland. Families were displaced.Volunteers set up temporary shelters for displaced families, providing a safe haven and basic necessities.
                                    </p>
                                </div>
                            </div>
                        </div>
                       
                       
                    </div>
                    
                </div>
            </div>
            <!-- Blog End -->


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
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
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
