<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Health Ease</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">

  

  
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +91 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> healthease@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://www.facebook.com/" target="_blank"><span class="mai-logo-facebook-f"></span></a>
              <a href="https://www.twitter.com/"  target="_blank"><span class="mai-logo-twitter"></span></a>
              <a href="https://www.whatsapp.com/"  target="_blank"><span class="mai-logo-whatsapp"></span></a>
              <a href="https://www.instagram.com/"  target="_blank"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a style="font-size: 27px; " class="navbar-brand" href="{{url('/')}}"><span class="text-primary">Health</span>-Ease</a>



        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#doctors-section">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#news-section">News</a>
            </li>


            <!--  Checking if a user is logged in or not-->

            @if (Route::has('login'))

            @auth

            <li class="nav-item">
              <a class="nav-link" href="{{url('myappointment')}}">My Appointment</a>
            </li>

            <x-app-layout>

            </x-app-layout>
            
            
            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
              </li>

              @endauth
              @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @if(session() -> has('message'))

  <div class="alert alert-success">
      {{session()-> get('message')}}

      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"> 
          X
      </button>


  </div>

  @endif


  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Your Pathway to Healthier Tomorrow.</span>
        <h1 class="display-4">Health - Ease</h1>
        <a href="#appointment-section" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Schedule </span>  <span>Appointments</span></p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p>Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p>Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp ">
            <h1 style="font-size: 30px ; font-weight: 600; margin-bottom: 25px;" class="customheading" id="customwelcome">Welcome to Your Health Center</h1>
            <p class="text-grey mb-4">  
              Welcome to Health Ease, your dedicated partner in well-being. Our experienced healthcare professionals, advanced facilities, 
              and comprehensive services are all focused on your unique health needs. From preventive care to specialized 
              treatments, we're committed to your lifelong health journey.
            </p>
            <!--<a href="" class="btn btn-primary">Learn More</a>-->
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

  <section id="doctors-section">

    @include('user.doctor')

  </section>

   <!-- .page-section -->

  <section id="news-section">

    @include('user.latest')

  </section>

  <section id="appointment-section">

   @include('user.appointment')

  </section>


  <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Editorial Team</a></li>
            <li><a href="#">Protection</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>More</h5>
          <ul class="footer-menu">
            <li><a href="">Terms & Condition</a></li>
            <li><a href="">Privacy</a></li>
            <li><a href="">Advertise</a></li>
            <li><a href="">Join as Doctors</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Our partner</h5>
          <ul class="footer-menu">
            <li><a href="">One-Fitness</a></li>
            <li><a href="">One-Drugs</a></li>
            <li><a href="">One-Live</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>
          <p class="footer-link mt-2">351 XYZ Street India</p>
          <a href="#" class="footer-link"> +91 123 4455 6666</a>
          <a href="#" class="footer-link">healthease@example.com</a>

          <h5 class="mt-3">Social Media</h5>
          <div class="footer-sosmed mt-3">
            <a href="https://www.facebook.com/" target="_blank"><span class="mai-logo-facebook-f"></span></a>
            <a href="https://www.twitter.com/" target="_blank"><span class="mai-logo-twitter"></span></a>
            <a href="https://www.googleplus.com/" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
            <a href="https://www.instagram.com/" target="_blank"><span class="mai-logo-instagram"></span></a>
            <a href="https://www.linkedin.com/" target="_blank"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>

      <hr>

      <p id="copyright">Copyright &copy; 2023 <a href="" target="_blank"> Designed by Ritam</a></p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>