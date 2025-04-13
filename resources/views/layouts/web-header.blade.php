<!DOCTYPE html>
<html lang="en">


<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Premium 3 BHK Luxury Floors</title>

<meta name="description" content="Discover exquisite Premium 3 BHK luxury floors in Gurgaon. Enjoy premium amenities, spacious layouts, and modern designs. Find your dream home today!.">
  <meta name="keywords" content="3 bhk luxury apartments for sale, 3 bhk floors, Floors, 3 bhk in Gurgaon, 3 bhk luxury floors" >
     <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="front-assets/img/logo/fav-logo44.png" type="image/x-icon">

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ asset('public') }}/front-assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('public') }}/front-assets/css/plugins/aos.css">
    <link rel="stylesheet" href="{{ asset('public') }}/front-assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="{{ asset('public') }}/front-assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('public') }}/front-assets/css/plugins/mobile.css">
    <link rel="stylesheet" href="{{ asset('public') }}/front-assets/css/plugins/owlcarousel.min.css">
    <link rel="stylesheet" href="{{ asset('public') }}/front-assets/css/plugins/sidebar.css">
    <link rel="stylesheet" href="{{ asset('public') }}/front-assets/css/plugins/slick-slider.css">
    <link rel="stylesheet" href="{{ asset('public') }}/front-assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="{{ asset('public') }}/front-assets/css/main.css">

    <!--=====  JS SCRIPT LINK =======-->
    <script src="{{ asset('public') }}/front-assets/js/plugins/jquery-3-6-0.min.js"></script>
</head>
<body class="homepage4-body" >
<!--===== PRELOADER STARTS =======-->
<div class="preloader" style="background-image: url('{{ asset('public') }}/front-assets/img/logo/preloader.gif');"
></div>
<!--===== PRELOADER ENDS =======-->

<!--===== PROGRESS STARTS=======-->
<div class="paginacontainer">
     <div class="progress-wrap">
       <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
       </svg>
     </div>
   </div>
 <!--===== PROGRESS ENDS=======-->

 <?php
 $project = DB::table('projects')->get();

 ?>
  <!--=====HEADER START=======-->
  <header>
    <div class="header-area homepage4 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-elements">
              <div class="site-log">
                <a href="{{url('/')}}"><img src="{{ asset('public') }}/front-assets/img/logo/nld-logo55.png" alt="nld logo" width="100" height="100%" ></a>
              </div>
              <div class="main-menu">
                <ul>
                  <li><a href="{{url('/')}}">Home<i class="fa-solid"></i></a></li>
                  <li><a href="{{url('/about')}}">About Us</a></li>
                  <li><a href="#">Project &nbsp;<i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                        @foreach ($project as $p)
                        <li><a href="{{url('project/'.$p->id)}}">{{$p->project_name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                  <li><a href="{{url('/blogs')}}">Blog</a></li>
                  <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
              </div>
              <button type="button" class="btn-area4" data-toggle="modal" data-target="#exampleModalCenter">
                Get a Quote
            </button>


            <div class="body-overlay"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====HEADER END =======-->
  <div class="space50" ></div>

