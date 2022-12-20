
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tour De Malay</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Remember - v4.8.1
  * Template URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="#">Tour<strong><b>-</b></strong>De<strong><b>-</b></strong>Malay</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link  active" href="#">Home</a></li>
          <li><a class="nav-link " href="{{route('about-us')}}">About</a></li>
          <li><a class="nav-link " href="{{url('all-spots')}}">Destinations</a></li>
          <li><a class="nav-link " href="{{url('all-clubs')}}">Clubs</a></li>
          <li class="dropdown"><a href="#"><span>Hotels/Restaurants</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{url('all-hotels')}}">Hotels</a></li>
              <li><a href="{{url('all-restaurants')}}">Restaurants</a></li>
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Welcome to Kuala Lumpur</h1>
      <h2>The capital of Malaysia is widely recognized for numerous landmarks</h2>
    </div>
  </section><!-- End Hero -->
   <!-- ======= Why Us Section ======= -->
   <section id="why-us" class="why-us">
    <div class="container">

      <div class="section-title" data-aos="zoom-in">
        <h2>Why Us</h2>
        <h3>Why you should <span>Tour-De-Malay</span>?</h3>
        <p>There is something enchanting about the city at night. In the Era of Life technology is enhancing day by day. by visiting our website you don't need to book a travel / tour guide. </p>
      </div>

      <div class="row">

        <div class="col-lg-3">
          <div class="box" data-aos="fade-up">
            <span>Hotels</span>
            <p>Find out most booked,top rated and recommended hotels in Kuala Lumpur.</p>
          </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0">
          <div class="box" data-aos="fade-up" data-aos-delay="100">
            <span>Restaurants</span>
            <p>Find out most amazing mouth watering food restaurants in Kuala Lumpur</p>
          </div>
        </div>

        <div class="col-lg-3 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <span>Destinations</span>
            <p>Here we provide the details of most visited tourist spot in Kuala Lumpur</p>
          </div>
        </div>
        <div class="col-lg-3 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <span>Clubs</span>
            <p>Find out the clubbing culture of Kuala lumpur, you are on right place</p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Why Us Section -->


  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h3>What is <span>Kuala Lumpur</span> known For ?</h3>
        <p>There is a lot to love about Kuala Lumpur, a modern and exotic capital city of Malaysia. Many people visit this magnificent city because they are pulled by its lifestyle, fabulous shopping, world-class cuisine, pristine beaches, flourishing economy, sound education, and pulsating nightlife..</p>

      </div>

    </div>
  </section><!-- End Cta Section -->
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" data-aos="zoom-in">
        <h2>Services</h2>
        <h3>Our Awesome <span>Services</span></h3>
      </div>

      <div class="row">

        <div class="col-lg-3  d-flex align-items-stretch mt-4">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="bx bx-map"></i></div>
            <h4><a href="{{url('all-spots')}}"><span>Destinations</span></a></h4>
            {{-- <h4><span>Tour De Malay</span></h4> --}}
            <h4>Click to see more</h4>

          </div>
        </div>

        <div class="col-lg-3  d-flex align-items-stretch mt-4">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon"><i class="bx bx-restaurant"></i></div>
            <h4><a href="{{url('all-restaurants')}}"><span>Restaurants</span></a></h4>
            {{-- <h4><span>Tour De Malay</span></h4> --}}
            <h4>Click to see more</h4>
          </div>
        </div>

        <div class="col-lg-3  d-flex align-items-stretch mt-4">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
            <div class="icon"><i class="bx bx-arch"></i></div>
            <h4><a href="{{url('all-hotels')}}"><span>Hotels</span></a></h4>
            {{-- <h4><span>Tour De Malay</span></h4> --}}

                            <h4>Click to see more</h4>

          </div>
        </div>

        <div class="col-lg-3  d-flex align-items-stretch mt-4">
          <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
            <div class="icon"><i class="bx bx-party"></i></div>
            <h4><a href="{{url('all-clubs')}}"><span>Clubs</span></a></h4>
            {{-- <h4><span>Tour De Malay</span></h4> --}}

                            <h4>Click to see more</h4>

          </div>
        </div>

      </div>

    </div>
  </section><!-- End Services Section -->
   <!-- ======= Testimonials Section ======= -->
   <section id="testimonials" class="testimonials">
    <div class="container">

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{asset('frontend/assets/img/testimonials/testimonials-1.png')}}" class="testimonial-img" alt="">
              <h3>Mbita Kazwala</h3>
              <h4>South Africa</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                A city With full of cultural and amazing places.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{asset('frontend/assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>USA</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                very well time spent in kuala lumpur must visit place for everyone.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <img src="{{asset('frontend/assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
              <h3>Naveed Bhutto</h3>
              <h4>Pakistan</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I spent a quality timein malaysia. kuala lumpur is a city with full of amazing tourist places
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->



        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->
  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts">
    <div class="container">
        <br>
        <br>
        <div class="row  mt-3">
            <div class="col-sm-12 section-title">
                <div class="section-title" data-aos="zoom-in">
                    <h3>Our <span>Achievements</span></h3>
                  </div>
            </div>
        </div>
        <br>
        <hr>
      <div class="row counters">

        <div class="col-lg-3  text-center">
          <span data-purecounter-start="0" data-purecounter-end="{{$totalHotel ?? '0'}}" data-purecounter-duration="1" class="purecounter"></span>
          <p>Hotels</p>
        </div>

        <div class="col-lg-3  text-center">
          <span data-purecounter-start="0" data-purecounter-end="{{$totalRestaurant ?? '0'}}" data-purecounter-duration="1" class="purecounter"></span>
          <p>Restaurants</p>
        </div>

        <div class="col-lg-3  text-center">
          <span data-purecounter-start="0" data-purecounter-end="{{$totalSpots ?? '0'}}" data-purecounter-duration="1" class="purecounter"></span>
          <p>Destinations</p>
        </div>

        <div class="col-lg-3  text-center">
          <span data-purecounter-start="0" data-purecounter-end="{{$totalClubs ?? '0'}}" data-purecounter-duration="1" class="purecounter"></span>
          <p>Clubs</p>
        </div>

      </div>
      <hr>

    </div>
  </section><!-- End Counts Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h1 class="text-light"><a href="#">Tour<strong><b>-</b></strong>De<strong><b>-</b></strong>Malay</a></h1>
            <h2>Visit Malaysia.</h2>
          </div>
        </div>





      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>MBITA KAZWALA</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/ -->
         <h3>Tour-De-Malay</h3>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="frontend/assets/js/main.js"></script>

</body>

</html>
