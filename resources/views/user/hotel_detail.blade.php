
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
  <link href="{{asset('plugins/ekko-lightbox/ekko-lightbox.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />

    <style>
        .txt{
            color: white;
        }
    </style>
  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Remember - v4.8.1
  * Template URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="bg-dark">



  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="#">Tour<strong><b>-</b></strong>De<strong><b>-</b></strong>Malay</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link  " href="{{url('/')}}">Home</a></li>
          <li><a class="nav-link  active" href="{{route('about-us')}}">About</a></li>
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
    <div class="row m-2">
        <div class="col-sm-6">
            <div class="card bg-dark text-white ">
                <div class="card-body">
                    <h4>Hotel Details</h4>
                    <hr>
                    <table class="table table-dark">
                        <tr>
                            <td>
                                <h5><i class="bx bx-highlight"> </i> Name:</h5>
                            </td>
                            <td>
                               <h5>{{$data->name}}</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5><i class="bx bx-map"> </i> Location:</h5>
                            </td>
                            <td>
                               <h5>{{$data->address}}</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5><i class="bx bx-check"> </i> Rattings:</h5>
                            </td>
                            <td>
                                @if ($data->hotel_ratings == '1')
                                <i class="bx bx-star text-warning"></i>
                                <i class="bx bx-star" ></i>
                                <i class="bx bx-star"></i>
                                <i class="bx bx-star"></i>
                                <i class="bx bx-star"></i><sub> (From Many Users)</sub>
                                @elseif ($data->hotel_ratings == '2')
                                <i class="bx bx-star text-warning"></i>
                                <i class="bx bx-star text-warning " ></i>
                                <i class="bx bx-star"></i>
                                <i class="bx bx-star"></i>
                                <i class="bx bx-star"></i><sub> From Many Users)</sub>
                                @elseif ($data->hotel_ratings == '3')
                                <i class="bx bx-star text-warning"></i>
                                <i class="bx bx-star text-warning " ></i>
                                <i class="bx bx-star text-warning"></i>
                                <i class="bx bx-star "></i>
                                <i class="bx bx-star "></i><sub> (From Many Users)</sub>
                                @elseif ($data->hotel_ratings == '4')
                                <i class="bx bx-star text-warning"></i>
                                <i class="bx bx-star text-warning"></i>
                                <i class="bx bx-star text-warning"></i>
                                <i class="bx bx-star text-warning"></i>
                                <i class="bx bx-star "></i> <sub>(From Many Users)</sub>
                                @elseif ($data->hotel_ratings == '5')
                                <i class="bx bx-star text-warning"></i>
                                <i class="bx bx-star text-warning " ></i>
                                <i class="bx bx-star text-warning"></i>
                                <i class="bx bx-star text-warning"></i>
                                <i class="bx bx-star text-warning"></i> <sub>(From Many Users)</sub>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5><i class="bx bx-time"> </i> Number Of Rooms:</h5>
                            </td>
                            <td>
                                @if ($data->number_of_rooms == 'more_then_five')
                                <h5>More then 5</h5>
                                @elseif ($data->number_of_rooms == 'more_then_fifteen')
                                <h5>More then 15</h5>
                                @elseif ($data->number_of_rooms == 'more_then_twentyfive')
                                <h5>More then 25</h5>

                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5><i class="bx bx-user"> </i> Manager Name:</h5>
                            </td>
                            <td>
                               <h5>{{$data->manager_name}}</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5><i class="bx bx-phone"> </i> Manager Contact Number:</h5>
                            </td>
                            <td>
                               <h5>{{$data->manager_contact_number}}</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h5><i class="bx bx-phone"> </i> Hotel Contact Number:</h5>
                            </td>
                            <td>
                               <h5>{{$data->contact_number}}</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                <h5><i class="bx bx-detail"> </i> Hotel Description:</h5>
                            </td>
                            <td>
                               <p>{{$data->hotel_description}}</p>
                            </td>
                        </tr>



                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card bg-dark text-white">
                <div class="card-body">
                    <h4>Hotel Images</h4>
                    <hr>
                    @foreach ($dataImages as $file)
                    <a href="#{{asset($file->file_path)}}">
                        <img src="{{asset($file->file_path)}}" style="width: 200px; height:200px; border-radius:20px;">
                    </a>
                    <a href="#" class="lightbox" id="{{asset($file->file_path)}}">
                        <span style="background-image: url('{{asset($file->file_path)}}')"></span>
                    </a>
                    @endforeach
                </div>
            </div>


        </div>
    </div>
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
         <h3>Tour De Malay</h3>
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
  <script src="frontend/assets/js/main.js"></script>

</body>

</html>
