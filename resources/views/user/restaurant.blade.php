
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
          <li><a class="nav-link  " href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link " href="{{route('about-us')}}">About</a></li>
          <li><a class="nav-link " href="#services">Destinations</a></li>
          <li><a class="nav-link " href="#team">Clubs</a></li>
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

<main id="main" style="background-image: url({{asset('frontend/assets/img/cta-bg.jpg')}});">
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Find Out the Most Recommended and High Rated <span style="color: lightgreen">Restaurants</span>  in <span style="color: lightgreen">Kuala Lumpur</span> </h1>
    </div>
  </section><!-- End Hero -->
  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="zoom-in">
        <h3 >Find Best One's For<span> You </span></h3>
      </div>
      <hr>

      <div class="row">
        @if (count($data) > 0)
        @foreach ($data as $restaurant)

        <div class="col-sm-4 d-flex align-items-stretch">
            <div class="member  bg-dark" data-aos="fade-up">
                <div class="member-img ">
                    <img src="{{asset('frontend/assets/img/rest.png')}}" class="img-fluid" alt="">

                </div>
                <div class="member-info">
                    <p class="text-light">Name :  {{$restaurant->name}}</p>
                    <p class="text-light"> Address : {{$restaurant->address}}</p>
                    <p class="text-light"> Rattings :
                    @if ($restaurant->restaurant_ratings == '1')
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star" ></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    @elseif ($restaurant->restaurant_ratings == '2')
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star text-warning " ></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    <i class="bx bx-star"></i>
                    @elseif ($restaurant->restaurant_ratings == '3')
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star text-warning " ></i>
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star "></i>
                    <i class="bx bx-star "></i>
                    @elseif ($restaurant->restaurant_ratings == '4')
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star "></i>
                    @elseif ($restaurant->restaurant_ratings == '5')
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star text-warning " ></i>
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star text-warning"></i>
                    <i class="bx bx-star text-warning"></i>
                    @endif
                    </p>
                    <a href="{{url('restaurant-details',$restaurant->id)}}" class="btn btn-outline-success"> See More </a>
                </div>
            </div>
        </div>
        @endforeach
        @else
            <div class="section-title">

                <h5>Sorry No Record Found <i class="bx bx-sad"></i></h5>
            </div>
        @endif

      </div>

    </div>
  </section><!-- End Team Section -->


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
