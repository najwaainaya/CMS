<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to DIKO!</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('Techie')}}/assets/img/DIKO TRANSPARANT.png" rel="icon">
  <link href="{{url('Techie')}}/assets/img/DIKO TRANSPARANT.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('Techie')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{url('Techie')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('Techie')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('Techie')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{url('Techie')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{url('Techie')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('Techie')}}/assets/css/style.css" rel="stylesheet">

  @section('css')
  @show
  <!-- =======================================================
  * Template Name: Techie
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>
        @include('layout2.header')
        @yield('content')
        @include('layout2.footer')

  <!-- ======= Footer ======= -->
 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{url('Techie')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{url('Techie')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{url('Techie')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('Techie')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{url('Techie')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('Techie')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{url('Techie')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('Techie')}}/assets/js/main.js"></script>

  @yield('js')
  @show
</body>

</html>