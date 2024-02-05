<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Survive</title>
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
         <style>
     
        .containerdash {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .profile-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-picture {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .user-details {
            flex-grow: 1;
            margin-left: 20px;
        }

        .user-details h2 {
            margin-bottom: 10px;
            color: #333;
        }

        .user-details p {
            margin: 0;
            color: #777;
        }

        .dashboard-menu {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }

        .dashboard-menu a {
            text-decoration: none;
            color: #333;
            padding: 10px;
            border-radius: 5px;
            background-color: #ddd;
            transition: background-color 0.3s ease;
        }

        .dashboard-menu a:hover {
            background-color: #bbb;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .achieved {
            color: green;
        }

        .not-achieved {
            color: red;
        }
         .total-score {
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 20px;}
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


        <script>
        // Function to calculate the score based on achievement status
        function calculateScore(achieved) {
            return achieved ? 100 : 0;
        }

        // Function to update the score column
        function updateScore() {
            var rows = document.querySelectorAll("tbody tr");
            rows.forEach(function(row) {
                var statusCell = row.querySelector(".status");
                var scoreCell = row.querySelector(".score");
                var achieved = statusCell.textContent.toLowerCase().trim() === "achieved";
                var score = calculateScore(achieved);
                scoreCell.textContent = score;
            });
        }

        // Function to calculate and display the total score
        function updateTotalScore() {
            var rows = document.querySelectorAll("tbody tr");
            var totalScore = 0;

            rows.forEach(function(row) {
                var statusCell = row.querySelector(".status");
                var achieved = statusCell.textContent.toLowerCase().trim() === "achieved";
                totalScore += calculateScore(achieved);
            });

            var totalScoreElement = document.getElementById("total-score");
            totalScoreElement.textContent = "Total Score: " + totalScore;
        }

        // Update the total score on page load
        window.onload = function() {
            updateScore();
            updateTotalScore();
        };
    </script>
     
    <div class="containerdash">

        <div class="profile-info">
            <div class="profile-picture">
                <img src="{{ asset('assets/img/profile.png') }}" alt="Profile Picture">
            </div>
            <div class="user-details">
                <h2>Eya Ben Slimen</h2>
                <p>Email: aya.benslimen@ensi-uma.tn</p>
            </div>
        </div>
        <br><br>
  <div class="total-score" id="total-score">
        Total Score: 0
    </div>
        <div class="dashboard-menu">
            <a href="#">Overview</a>
            <a href="#">Messages</a>
            <a href="#">Settings</a>
            <a href="index.html">Logout</a>
        </div>
        

           <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Activity</th>
                    <th>Place</th>
                    <th>Status</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2024-02-04</td>
                    <td>Wildfire</td>
                    <td>Tabarka </td>
                    <td class="achieved status">Achieved</td>
                    <td class="score">100</td>
                </tr>
                <tr>
                    <td>2024-02-03</td>
                    <td>Recent Flooding </td>
                    <td>Nabeul</td>
                    <td class="not-achieved status">Not Achieved</td>
                    <td class="score">0</td>
                </tr>

            </tbody>
        </table>

    </div>




          

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
