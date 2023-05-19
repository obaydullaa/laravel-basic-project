
<!-- meta tags and other links -->
<!-- Header -->
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Agency</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Custom Animation -->
    <link rel="stylesheet" href="assets/css/custom-animation.css">
    <!-- Slick -->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!-- line awesome -->
    <link rel="stylesheet" href="assets/css/line-awesome.min.css">
    <!-- Odometer -->
    <link rel="stylesheet" href="assets/css/odometer.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <!--==================== Preloader Start ====================-->      
<div id="loading">
    <div id="loading-center">
          <div id="loading-center-absolute">
             <div class="loader">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
             </div>
          </div>
    </div>
 </div>
 <!--==================== Preloader End ====================-->
 
 <!--==================== Overlay Start ====================-->
 <div class="body-overlay"></div>
 <!--==================== Overlay End ====================-->
 
 <!--==================== Sidebar Overlay End ====================-->
 <div class="sidebar-overlay"></div>
 <!--==================== Sidebar Overlay End ====================-->
 
 <!-- ==================== Scroll to Top End Here ==================== -->
 <a class="scroll-top"><i class="fas fa-angle-double-up"></i></a>
 <!-- ==================== Scroll to Top End Here ==================== -->
 
 <!--========================== Header section Start ==========================-->
 <div class="header-area">
     <div class="header" id="header">
         <div class="container">
             <nav class="navbar navbar-expand-lg">
 
                 <a class="navbar-brand logo normal-logo" id="normal-logo" href="index.html"><img src="assets/images/logo/logo.png" alt=""></a>
                
 
                 <button class="navbar-toggler header-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span id="hiddenNav"><i class="las la-bars"></i></span>
                 </button>
                 
                 <!-- Search Box Start -->
                     <div class="toggle-search-box">
                         <button type="button" class="" data-bs-toggle="modal" data-bs-target="#search-box" data-bs-whatever="@mdo"><i class="las la-search"></i></button>
                     </div>
     
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav nav-menu ms-auto">
                         <li class="nav-item">
                             {{-- <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a> --}}
                             {{-- <a class="nav-link active" aria-current="page" href="{{ asset('/') }}">Home</a> --}}
                             {{-- <a class="nav-link active" aria-current="page" href="{{ URL::to('/') }}">Home</a> --}}
                             {{-- <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a> --}}
                         </li>
                         <li class="nav-item">
                             {{-- <a class="nav-link" aria-current="page" href="{{ url('about') }}">About Us</a> --}}
                             {{-- <a class="nav-link" aria-current="page" href="{{ asset('about') }}">About Us</a> --}}
                             {{-- <a class="nav-link" aria-current="page" href="{{ URL::to('about') }}">About Us</a> --}}
                             {{-- <a class="nav-link" aria-current="page" href="{{ URL::to('about') }}">About Us</a> --}}
                             <a class="nav-link" aria-current="page" href="{{ route('about') }}">About Us</a>
                         </li>
                         <li class="nav-item dropdown">
                             <a class="nav-link" href="blog.html" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Blog <span class="nav-item__icon"><i class="las la-angle-down"></i></span></a>
                             <ul class="dropdown-menu">
                                 <li class="dropdown-menu__list">
                                     <a class="dropdown-item dropdown-menu__link" href="/blog">Blog </a>
                                 </li>
                                 <li class="dropdown-menu__list">
                                     <a class="dropdown-item dropdown-menu__link" href="blog-details.html">Blog Single </a>
                                 </li>
                             </ul>
                         </li> 
                         <li class="nav-item">
                             <a class="nav-link" href="service.html">Service</a>
                         </li>
                         <li class="nav-item">
                             <a class="nav-link" href="portfolio.html">Portfolio</a>
                         </li> 
                         <li class="nav-item">
                             <a class="nav-link" href="contact.html">Contact Us</a>
                         </li> 
                     </ul>
                 </div>
             </nav>
         </div>
     </div>
 </div>
 <!--========================== Header section End ==========================-->
 