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
         <style>
       body {
         position: relative;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin: 20px;
        }

        .leaderboard {
            background-image:url('img/baground.jpg') ;
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
              padding-top: 100px;
               padding-bottom: 100px;
               margin-top: 100px;
               margin-bottom: 50px;
                
        }

        .leaderboard-item {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .rank {
            font-size: 20px;
            font-weight: bold;
            margin-right: 10px;
        }

        .profile-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .username {
            flex-grow: 1;
        }

        .score {
            font-weight: bold;
        }
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
        .balloon {
            position: absolute;
            width: 20px;
            height: 30px;
            background-color: #ffcc00;
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            animation: float 2s infinite;
        }
      


/* Add styles for multiple colored balloons */
.balloon-1 {
    background-color: #ffcc00;
    animation: float 2s infinite;
}

.balloon-2 {
    background-color: #ff5733; 
    animation: float 2s infinite 0.5s alternate; 
}

.balloon-3 {
    background-color: #3498db; 
    animation: float 2s infinite 1s alternate; 
}
.balloon-4 {
    background-color: #000; 
    animation: float 2s infinite 0.7s alternate; 
}


        /* Adjusted footer spacing */
        .footer {
            margin-top: 20px;
        }
    </style>
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
                                    
                                    <img src="{{ asset('assets/img/logo.png') }}"alt="Logo">
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
                                <a href="index.html" class="nav-item nav-link ">Home</a>
                                <a href="about.html" class="nav-item nav-link">About</a>
                                <a href="service.html" class="nav-item nav-link">Service</a>
                                <a href="team.html" class="nav-item nav-link">Team</a>
                                <a href="profil.html" class="nav-item nav-link active">Profil</a>
                                
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="#">Rising Together</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

<div class="leaderboard">
    
  

    <div class="leaderboard-item">
        <div class="rank">1</div>
        <img class="profile-icon" src="{{ asset('assets/img/batman.jpeg') }}" alt="Profile 1">
        <div class="username">Eya Ben Slimen</div>
        <div class="score" id="score1">0</div>
           <img class="profile-icon" src="{{ asset('assets/img/coin.jpg') }}"alt="Profile 3">
    </div>
    <div class="leaderboard-item">
        <div class="rank">2</div>
        <img class="profile-icon" src="{{ asset('assets/img/superhero.jpg') }}" alt="Profile 2">
        <div class="username">Eya Guerdelly</div>
        <div class="score" id="score2">0</div>
           <img class="profile-icon"src="{{ asset('assets/img/coin.jpg') }}" alt="Profile 3">
    </div>
    <div class="leaderboard-item">
        <div class="rank">3</div>
        <img class="profile-icon" src="img/superman.jpeg" alt="Profile 3">
        <div class="username">Ichrak Bouafif</div>
        <div class="score" id="score3">0</div>
         <img class="profile-icon"src="{{ asset('assets/img/coin.jpg') }}"alt="Profile 3">
    </div>
</div>


<div class="balloon balloon-1" style="top: 50px; left: 100px;"></div>
<div class="balloon balloon-2" style="top: 150px; left: 300px;"></div>
<div class="balloon balloon-3" style="top: 80px; left: 500px;"></div>
<!-- Add a container for balloons -->
<div class="balloon-container"></div>
<script>
    // Dynamically create balloons
    const balloonContainer = document.querySelector('.balloon-container');
    const numberOfBalloons = 20;

    for (let i = 1; i <= numberOfBalloons; i++) {
        const balloon = document.createElement('div');
        balloon.classList.add('balloon', balloon-${i});
        balloon.style.top = ${Math.random() * window.innerHeight}px;
        balloon.style.left = ${Math.random() * window.innerWidth}px;
        balloonContainer.appendChild(balloon);
    }
</script>

<script>
    const targetScores = [1500, 1200, 1000];
    const duration = 2000; 

    function animateCount(element, targetValue) {
        let startValue = 0;
        const startTime = performance.now();

        function updateValue(currentTime) {
            const elapsedTime = currentTime - startTime;
            const progress = Math.min(elapsedTime / duration, 1);
            const currentValue = Math.round(startValue + progress * (targetValue - startValue));

            element.textContent = currentValue;

            if (progress < 1) {
                requestAnimationFrame(updateValue);
            }
        }

        requestAnimationFrame(updateValue);
    }

    // Update the scores dynamically with animation
    for (let i = 1; i <= 3; i++) {
        const scoreElement = document.getElementById(score${i});
        if (scoreElement) {
            animateCount(scoreElement, targetScores[i - 1]);
        }
    }
</script>
          

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