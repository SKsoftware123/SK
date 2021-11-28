
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>Margo | Home</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="GrayGrids">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="{{asset('frontend/asset/css/bootstrap.min.css')}}" type="text/css" media="screen">

  <!-- Revolution Slider -->
  <link rel="stylesheet" href="{{asset('frontend/css/settings.css')}}" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slicknav.css')}}" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/responsive.css')}}" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.css')}}" media="screen">

  <!-- Color Defult -->
  <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/colors/red.css')}}" media="screen" />
  
  </head>
 <div id="container">

    <!-- Start Header Section -->
    <header class="clearfix">
      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <!-- Start Contact Info -->
              @php
                $data=DB::table('front_settings')->first();
              @endphp
              
              <ul class="contact-details">
                @if(!empty($data->address))
                <li><a href="#"><i class="fa fa-map-marker"></i> {{$data->address}}</a>
                </li>
                @endif
                @if(!empty($data->email))
                <li><a href="#"><i class="fa fa-envelope-o"></i> {{$data->email}}</a>
                </li>
                @endif
                @if(!empty($data->phone))
                <li><a href="#"><i class="fa fa-phone"></i> {{$data->phone}}</a>
                </li>
                @endif
                
              </ul>
             
               
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-5">
              <!-- Start Social Links -->
              <ul class="social-list">
                @if(!empty($data->facebook))
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="{{$data->facebook}}"><i class="fa fa-facebook"></i></a>
                </li>
                @endif
                @if(!empty($data->gmail))
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="{{$data->gmail}}"><i class="fa fa-google-plus"></i></a>
                </li>
                @endif
                @if(!empty($data->instagram))
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Instagram" href="{{$data->instagram}}"><i class="fa fa-instagram"></i></a>
                </li>
                @endif
                  
                <li>
                  <a class="instgram itl-tooltip" data-placement="bottom" title="Login" href="{{route('login')}}"><i class="fa fa-user"></i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            
            <a class="navbar-brand" href="index.html">
              <img alt="" src="{{asset('frontend/')}}images/margo.png">
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="off" role="search" method="get" class="searchform" action="#">
                  <input type="text" value="" name="s" id="s" placeholder="Search the site...">
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="{{ request()->is('/') ? 'active' : '' }}" href="{{route('home')}}">Home</a>
              </li>
              <li>
                <a class="{{ request()->is('about-us') ? 'active' : '' }}" href="{{route('about-us')}}">About us</a>
              </li>
               <li>
                <a class="{{ request()->is('service') ? 'active' : '' }}" href="{{route('service')}}">Services</a>
              </li>
              <li>
                <a class="{{ request()->is('gallery') ? 'active' : '' }}" href="{{route('gallery')}}">Gallery</a>
              </li>
               <li>
                <a class="{{ request()->is('contact-us') ? 'active' : '' }}" href="{{route('contact-us')}}">Contact us</a>
              </li>
              <!-- <li>
                <a href="about.html">Pages</a>
                <ul class="dropdown">
                  <li><a href="about.html">About</a>
                  </li>
                  <li><a href="services.html">Services</a>
                  </li>
                  <li><a href="right-sidebar.html">Right Sidebar</a>
                  </li>
                  <li><a href="left-sidebar.html">Left Sidebar</a>
                  </li>
                  <li><a href="404.html">404 Page</a>
                  </li>
                </ul>
              </li> -->        
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->
<body>
