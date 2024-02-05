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
                                    <img src="{{ asset('assets/img/logo.png') }}"  alt="Logo">
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
                                <a href="service.html" class="nav-item nav-link">Service</a>
                                <a href="team.html" class="nav-item nav-link">Team</a>
                                <a href="profile.html" class="nav-item nav-link">Profile</a>
                               
                                <a href="contact.html" class="nav-item nav-link active">Contact</a>
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
                            <h2>Contact Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Home</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- Contact Start -->
            <div class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Get In Touch</p>
                        <h2>For Any Query</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <h3 style="color: white;">Our Shilters</h3>
                                <hr>
                               <img src="{{ asset('assets/img/maps.png') }}"  alt="" style="height: 100%; width: 100% ;left: 0%;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <label style="color: black;">Select User Type:</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="userType" id="citizenRadio" value="citizen" checked>
                                            <label class="form-check-label" for="citizenRadio" style="color: black;">Citizen</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="userType" id="firstResponderRadio" value="firstResponder">
                                            <label class="form-check-label" for="firstResponderRadio" style="color: black;">First Responder</label>
                                        </div>
                                    </div>
                                
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger" style="color: black;"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger" style="color: black;"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="location" placeholder="Your Location" required="required" data-validation-required-message="Please enter your location" />
                                        <p class="help-block text-danger" style="color: black;"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="tel" class="form-control" id="phone" placeholder="Your Phone" required="required" data-validation-required-message="Please enter your phone number" />
                                        <p class="help-block text-danger" style="color: black;"></p>
                                    </div>
                                    
                                    <div class="control-group" id="emergencyField">
                                        <input type="text" class="form-control" id="emergency" placeholder="Your Emergency" required="required" data-validation-required-message="Please enter your emergency" />
                                        <p class="help-block text-danger" style="color: black;"></p>
                                    </div>
                                
                                    <div class="control-group" id="contactCategoryField">
                                        <select class="form-control" id="contactCategory" required="required" data-validation-required-message="Please select a contact category">
                                            <option value="" disabled selected>Select Contact Category</option>
                                            <option value="197">197 National Security Units (Rescue Police)</option>
                                            <option value="198">198 Civil Protection Units</option>
                                            <option value="193">193 National Guard ground units</option>
                                            <option value="194">194 Marine units of the National Guard</option>
                                        </select>
                                        <p class="help-block text-danger" style="color: black;"></p>
                                    </div>
                                
                                    <div class="control-group" id="linksField" style="display: none;">
                                        <p style="color: black;">If you are a first responder, please choose what you want to do:</p>
                                        <select class="form-control" id="firstResponderActions">
                                            <option value="info">See info about ongoing disaster</option>
                                            <option value="shelters">See list of nearest shelters to provide help</option>
                                            <option value="donations">See list of donations</option>
                                            <option value="volunteers">See list of volunteers and their contact</option>
                                        </select>
                                    </div>
                                <br><br>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton" onclick="submitForm()">Send Message</button>
                                    </div>
                                </form>
                                <script>
                                    function submitForm() {
                                        
                                        // Display a success message using an alert or any other UI element
                                        alert('Request sent successfully!');
                                
                          
                                    }
                                </script>
                                
                                <script>
                                    // JavaScript to toggle between emergency/contact and links fields
                                    document.querySelectorAll('input[name="userType"]').forEach(function (radio) {
                                        radio.addEventListener('change', function () {
                                            var emergencyField = document.getElementById('emergencyField');
                                            var contactCategoryField = document.getElementById('contactCategoryField');
                                            var linksField = document.getElementById('linksField');
                                
                                            if (this.value === 'firstResponder') {
                                                emergencyField.style.display = 'none';
                                                contactCategoryField.style.display = 'none';
                                                linksField.style.display = 'block';
                                            } else {
                                                emergencyField.style.display = 'block';
                                                contactCategoryField.style.display = 'block';
                                                linksField.style.display = 'none';
                                            }
                                        });
                                    });
                                </script>
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
                
            </div>
            <!-- Contact End -->

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
