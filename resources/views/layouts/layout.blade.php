<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="robots" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
  <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
  <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
  <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
  <meta name="format-detection" content="telephone=no">

  <!-- PAGE TITLE HERE -->
  <title>Admin Dashboard</title>

  <!-- FAVICONS ICON -->
  <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
  <link href="{{asset('assets/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('assets/vendor/nouislider/nouislider.min.css')}}">

  <!-- Style css -->
  <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet">

</head>

<body>

  <!--*******************
        Preloader start
    ********************-->
  <div id="preloader">
    <div class="lds-ripple">
      <div></div>
      <div></div>
    </div>
  </div>
  <!--*******************
        Preloader end
    ********************-->

  <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper">
      @yield('nav-header')
      @yield('sidebar')
      @yield('content')
      @yield('footer')

</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
    @yield('script')


</body>
</html>