 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title>Skinvita Clinic</title>
     <meta name="description" content="">
     <meta name="author" content="">
     <meta name="keywords" content="">
     <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link
         href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
         rel="stylesheet">
     <!-- Bootstrap core CSS -->
     <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/css/bootstrap-grid.css') }}" rel="stylesheet">
     <!-- Bootstrap core JavaScript -->
     <script src="{{ asset('assets/js/jquery-3.3.1.slim.min.js') }}"></script>
     <script src="{{ asset('assets/js/popper.min.js') }}"></script>
     <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
     <!-- Owl Carousel Assets pranab -->
     <link href="{{ asset('assets/owl-carousel/css/owl.carousel.min.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/owl-carousel/css/owl.theme.default.min.css') }}" rel="stylesheet">
     <!-- Owl Carousel Assets pranab -->

     <!-- Custom styles for this template -->
     <link href="{{ asset('assets/css/modern-business.css') }}" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/menu-style.css') }}">
     <link rel="stylesheet" type="text/css"
         href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.6.3/css/ionicons.min.css">
     <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
     <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
         integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
     <!-- GRT Youtube Plugin CSS -->
     <link rel="stylesheet" href="{{ asset('assets/css/grt-youtube-popup.css') }}">
     <link rel="stylesheet" href="{{ asset('assets/css/style_bf.css') }}">
 </head>

 <body>

     <header id="main-header" class="header">
         <div id="top-header">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-4 col-4 logo-box">
                         <div class="logo">
                             <a href="{{ route('index') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                     class="img-fluid"></a>
                         </div>
                     </div>
                     <!-- Section: Navbar Menu -->
                     <div class="col-lg-8 col-8 align-self-center">
                         <div class="overlay"></div>
                         <nav class="menu">
                             <div class="menu-mobile-header">
                                 <button type="button" class="menu-mobile-arrow"><i
                                         class="ion ion-ios-arrow-back"></i></button>
                                 <div class="menu-mobile-title"></div>
                                 <button type="button" class="menu-mobile-close"><i
                                         class="ion ion-ios-close"></i></button>
                             </div>
                             <ul class="menu-section text-right">
                                 <li><a href="{{ route('index') }}">Home</a></li>
                                 <li><a href="{{ route('about') }}">About</a></li>
                                 <li class="menu-item-has-children">
                                     <a href="#">Skin and Hair Solution <i class="ion ion-ios-arrow-down"></i></a>
                                     <div class="menu-subs menu-mega menu-column-4">
                                         <div class="list-item">
                                             <ul>
                                                 <li class="mb-6">
                                                     <div class="media">
                                                         <img src="{{ asset('assets/images/menu-icon.png') }}"
                                                             class="align-self-center mr-3" alt="...">
                                                         <div class="media-body">
                                                             <h5><a href="{{route('botox')}}">Botox</a></h5>
                                                             <p>Aenean tempor leo lectus sit amet consectetur ex
                                                                 vehicula non. </p>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li class="mb-6">
                                                     <div class="media">
                                                         <img src="{{ asset('assets/images/menu-icon.png') }}"
                                                             class="align-self-center mr-3" alt="...">
                                                         <div class="media-body">
                                                             <h5><a href="fillers.html">Fillers</a></h5>
                                                             <p>Aenean tempor leo lectus sit amet consectetur ex
                                                                 vehicula non. </p>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li class="mb-6">
                                                     <div class="media">
                                                         <img src="{{ asset('assets/images/menu-icon.png') }}"
                                                             class="align-self-center mr-3" alt="...">
                                                         <div class="media-body">
                                                             <h5><a href="mesotherapy.html">Mesotherapy</a></h5>
                                                             <p>Aenean tempor leo lectus sit amet consectetur ex
                                                                 vehicula non. </p>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li>
                                                     <div class="media">
                                                         <img src="{{ asset('assets/images/menu-icon.png') }}"
                                                             class="align-self-center mr-3" alt="...">
                                                         <div class="media-body">
                                                             <h5><a href="lasers.html">Lasers</a></h5>
                                                             <p>Aenean tempor leo lectus sit amet consectetur ex
                                                                 vehicula non. </p>
                                                         </div>
                                                     </div>
                                                 </li>

                                             </ul>
                                         </div>

                                         <div class="list-item">
                                             <ul>
                                                 <li class="mb-6">
                                                     <div class="media">
                                                         <img src="{{ asset('assets/images/menu-icon.png') }}"
                                                             class="align-self-center mr-3" alt="...">
                                                         <div class="media-body">
                                                             <h5><a href="{{route('body-sculpting')}}">Body Sculpting</a></h5>
                                                             <p>Aenean tempor leo lectus sit amet consectetur ex
                                                                 vehicula non. </p>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li class="mb-6">
                                                     <div class="media">
                                                         <img src="{{ asset('assets/images/menu-icon.png') }}"
                                                             class="align-self-center mr-3" alt="...">
                                                         <div class="media-body">
                                                             <h5><a href="stem-cell-treatment.html">Stem Cell
                                                                     Treatment</a></h5>
                                                             <p>Aenean tempor leo lectus sit amet consectetur ex
                                                                 vehicula non. </p>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li class="mb-6">
                                                     <div class="media">
                                                         <img src="{{ asset('assets/images/menu-icon.png') }}"
                                                             class="align-self-center mr-3" alt="...">
                                                         <div class="media-body">
                                                             <h5><a href="double-chin-reduction.html">Double Chin
                                                                     Reduction</a></h5>
                                                             <p>Aenean tempor leo lectus sit amet consectetur ex
                                                                 vehicula non. </p>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li>
                                                     <div class="media">
                                                         <img src="{{ asset('assets/images/menu-icon.png') }}"
                                                             class="align-self-center mr-3" alt="...">
                                                         <div class="media-body">
                                                             <h5><a href="medifacial.html">Medifacial</a></h5>
                                                             <p>Aenean tempor leo lectus sit amet consectetur ex
                                                                 vehicula non. </p>
                                                         </div>
                                                     </div>
                                                 </li>
                                             </ul>
                                         </div>
                                         <div class="list-item">
                                             <ul>
                                                 <li class="mb-6">
                                                     <div class="media">
                                                         <img src="{{ asset('assets/images/menu-icon.png') }}"
                                                             class="align-self-center mr-3" alt="...">
                                                         <div class="media-body">
                                                             <h5><a href="dermapen-and-dermaroller.html">Dermapen &
                                                                     Dermaroller</a></h5>
                                                             <p>Aenean tempor leo lectus sit amet consectetur ex
                                                                 vehicula non. </p>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li class="mb-6">
                                                     <div class="media">
                                                         <img src="{{ asset('assets/images/menu-icon.png') }}"
                                                             class="align-self-center mr-3" alt="...">
                                                         <div class="media-body">
                                                             <h5><a href="hair-transplant.html">Hair Transplant</a>
                                                             </h5>
                                                             <p>Aenean tempor leo lectus sit amet consectetur ex
                                                                 vehicula non. </p>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li class="mb-6">
                                                     <div class="media">
                                                         <img src="{{ asset('assets/images/menu-icon.png') }}"
                                                             class="align-self-center mr-3" alt="...">
                                                         <div class="media-body">
                                                             <h5><a href="skin-rejuvenation.html">Skin Rejuvenation</a>
                                                             </h5>
                                                             <p>Aenean tempor leo lectus sit amet consectetur ex
                                                                 vehicula non. </p>
                                                         </div>
                                                     </div>
                                                 </li>
                                                 <li>
                                                     <div class="media">
                                                         <img src="{{ asset('assets/images/menu-icon.png') }}"
                                                             class="align-self-center mr-3" alt="...">
                                                         <div class="media-body">
                                                             <h5><a href="prp.html">PRP</a></h5>
                                                             <p>Aenean tempor leo lectus sit amet consectetur ex
                                                                 vehicula non. </p>
                                                         </div>
                                                     </div>
                                                 </li>
                                             </ul>
                                         </div>
                                         <div class="list-item menu-blog-box">
                                             <img src="{{ asset('assets/images/menu-bg.jpg') }}"
                                                 class="img-fluid border-radius-10" alt="...">
                                         </div>
                                     </div>
                                 </li>
                                 <!--<li class="menu-item-has-children">
         <a href="#">Hair Solution <i class="ion ion-ios-arrow-down menu-icon"></i></a>
         <div class="menu-subs menu-column-1">
          <ul>
           <li><a href="#">Menu Item Name</a></li>
           <li><a href="#">Menu Item Name</a></li>
           <li><a href="#">Menu Item Name</a></li>
           <li><a href="#">Menu Item Name</a></li>
           <li><a href="#">Menu Item Name</a></li>
          </ul>
         </div>
        </li>-->
                                 <li><a href="our-doctors.html">Our Doctors</a></li>
                                 <li><a href="contact-us.html" class="btn-grad">Contact Us</a></li>
                             </ul>
                         </nav>
                         <div class="header-item-right">
                             <button type="button" class="menu-mobile-trigger">
                                 <span></span>
                                 <span></span>
                                 <span></span>
                                 <span></span>
                             </button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </header>

     @yield('content')
     <section id="top-footer-section">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 text-center">
                     <h4>Discover World’s Best Beauty Secrets! Dedicated Support at Every Step!</h4>
                 </div>
             </div>
         </div>
     </section>


     <footer id="main_footer">
         <div id="top-footer">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-4 fst-footer">
                         <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid mb-lg-4">
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt ipsum. Praesent
                             sodales vulputate sapien.</p>
                         <a href="#" class="rm-btn-dark">make an appointment</a>
                     </div>
                     <div class="col-lg-2 trd-footer">
                         <h4>Company Info</h4>
                         <ul class="footer-menu">
                             <li><a href="{{ route('index') }}">Home</a></li>
                             <li><a href="about.html">About</a></li>
                             <li><a href="our-doctor.html">Our Doctor</a></li>
                             <li><a href="privacy-policy.html">Privacy Policy</a></li>
                             <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                             <li><a href="contact.html">Contact</a></li>
                         </ul>
                     </div>
                     <div class="col-lg-3 snd-footer">
                         <h4>Opening Hours</h4>
                         <p class="mb-0">Mon - Fri - 9Am - 6Pm</p>
                         <p class="mb-0">Saturday - 9Am - 4Pm</p>
                         <p class="mb-0">Sunday – Closed</p>
                     </div>
                     <div class="col-lg-3 fou-footer">
                         <h4>Contact Us</h4>
                         <p class="mb-0">Call: 0000000000</p>
                         <p>Email: info@skinvitaclinic.com</p>
                         <ul class="footer-social">
                             <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                             <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                         </ul>


                     </div>
                 </div>
             </div>
         </div>

         <div id="footer-copyright">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12">
                         <p>© 2025 Skinvita Clinic. All rights reserved. | Developed By <a
                                 href="https://www.webredas.com/">Webredas</a></p>
                     </div>
                 </div>
             </div>
         </div>

     </footer>
     <script src="{{ asset('assets/js/grt-youtube-popup.js') }}"></script>
     <script>
         $(".youtube-link").grtyoutube({
             autoPlay: true,
             theme: "dark"
         });
     </script>
     <script src="{{ asset('assets/js/script.js') }}" defer></script>
     <script src="{{ asset('assets/owl-carousel/js/owl.carousel.js') }}"></script>
     <script src="{{ asset('assets/js/script_bf.js') }}"></script>
     <script>
         new BeforeAfter({
             id: '#one'
         });
         new BeforeAfter({
             id: '#two'
         });
     </script>
     <!-- End Owl pranab-->
     <script>
         $(document).ready(function() {
             var owl = $('#owl-doctor');
             owl.owlCarousel({
                 items: 3,
                 loop: true,
                 nav: true,
                 margin: 30,
                 dots: false,
                 autoplay: true,
                 autoplayTimeout: 2000,
                 autoplayHoverPause: true,
                 responsive: {
                     0: {
                         items: 1
                     },
                     600: {
                         items: 2
                     },
                     1000: {
                         items: 3
                     }
                 }
             });
             $('.play').on('click', function() {
                 owl.trigger('play.owl.autoplay', [2000])
             })
             $('.stop').on('click', function() {
                 owl.trigger('stop.owl.autoplay')
             })
         })
     </script>
     <script>
         $(document).ready(function() {
             var owl = $('#owl-testimonial');
             owl.owlCarousel({
                 items: 1,
                 loop: true,
                 nav: false,
                 margin: 0,
                 dots: true,
                 autoplay: true,
                 autoplayTimeout: 2000,
                 autoplayHoverPause: true,
                 responsive: {
                     0: {
                         items: 1
                     },
                     600: {
                         items: 1
                     },
                     1000: {
                         items: 1
                     }
                 }
             });
             $('.play').on('click', function() {
                 owl.trigger('play.owl.autoplay', [2000])
             })
             $('.stop').on('click', function() {
                 owl.trigger('stop.owl.autoplay')
             })
         })
     </script>
 </body>

 </html>
