<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://peruweb.site/cdn/cursos/img/favicon.png" rel="icon">
  <link href="https://peruweb.site/cdn/cursos/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="https://peruweb.site/cdn/cursos/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="https://peruweb.site/cdn/cursos/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://peruweb.site/cdn/cursos/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://peruweb.site/cdn/cursos/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://peruweb.site/cdn/cursos/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="https://peruweb.site/cdn/cursos/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="https://peruweb.site/cdn/cursos/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="https://peruweb.site/cdn/cursos/css/style.css?v=0.1" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>

  <!-- =======================================================
  * Template Name: Mentor - v4.10.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  @include('layouts.partials.header')

  @yield('main')

  @include('layouts.partials.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://peruweb.site/cdn/cursos/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="https://peruweb.site/cdn/cursos/vendor/aos/aos.js"></script>
  <script src="https://peruweb.site/cdn/cursos/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://peruweb.site/cdn/cursos/vendor/swiper/swiper-bundle.min.js"></script>
  {{-- <script src="https://peruweb.site/cdn/cursos/vendor/php-email-form/validate.js"></script> --}}

  <!-- Template Main JS File -->
  <script src="https://peruweb.site/cdn/cursos/js/main.js"></script>

</body>

</html>