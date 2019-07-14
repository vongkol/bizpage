<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Department of Drug and Food</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('img/MOH_favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet'">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet"> 

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet"> 

  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> 

 
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">  
  <?php
      $company = DB::table('companies')
      ->where ('id',1)
      ->first();
  ?>
  
</head>
<body>
 
<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Dept Drug and Food </a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#intro"><img src="{{asset('img/'.$company->logo)}}" width="100" alt="" title="" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

<!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{asset('img/IMG_1124.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content" style="margin-top:700px;">
                <h2>The 26th Meeting Asian Cosmetic Committee</h2>
                <p>The 26th Meeting Asian Cosmetic Committee (ACC) and its related events 01st – 05th May 20017 , Sokha Angkor Hotel, Siem Reap, Cambodia</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('img/IMG_1141.JPG')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>ASEAN TRADITIONAL MEDICINCE AND HEALTH SUPPLEMENT</h2>
                <p>The 29th meeting of the asean traditional medicine and health supplement product working group (TMHS) and its related event</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('img/IMG_1145.JPG')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>WHO Rapid Benchmarking of the National Regulatory Authority and Phamarceutical Sector Strategic Plan</h2>
                <p>WHO Rapid Benchmarking of the National Regulatory Authority and Phamarceutical Sector Strategic Plan</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('img/IMG_1334.JPG')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>WHO Rapid Benchmarking of the National Regulatory Authority and Phamarceutical Sector Strategic Plan</h2>
                <p>WHO Rapid Benchmarking of the National Regulatory Authority and Phamarceutical Sector Strategic Plan</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="{{asset('img/intro-carousel/5.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>WHO Rapid Benchmarking of the National Regulatory Authority and Phamarceutical Sector Strategic Plan</h2>
                <p>WHO Rapid Benchmarking of the National Regulatory Authority and Phamarceutical Sector Strategic Plan</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
    @yield('content')
    </main>
    
<!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="{{asset('img/'.$company->logo)}}" width="100" alt="">
              <p>
                 {{$company->description }}
              </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Footer Menu</h4>
              <?php
                $menu = DB::table('footer_menus')
                    ->orderBy('order_number')
                    ->get();
              ?>
            <ul>
            @foreach($menu as $m)
                <li>
                  <i class="ion-ios-arrow-right"></i> 
                   <a href="{{$m->url}}">{{$m->name}}</a>
              </li>
            @endforeach
              
            </ul>
          </div> 

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              {{$company->address}}
            <br>
               
              <strong>Phone:</strong> {{$company->phone}}<br>
              <strong>Email:</strong> {{$company->email}}<br>
            </p>
              <?php
                  $social = DB::table('socials')
                    ->orderBy('order_number')
                    ->get();
              ?>


            <div class="social-links">
            
                      @foreach($social as $s)
                      <a href="{{$s->url}}" tilele="{{$s->name}}">
                      <i class="{{$s->icon}}"></i>
                      </a>
                      @endforeach
                  
              
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>BizPage</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script> -->
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('contactform/contactform.js')}}"></script>

  <!-Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script> 

  

</body>
</html>