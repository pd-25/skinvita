@extends('layout.main')
@section('content')
     <section id="banner-slider" class="banner-slider">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
             <!--<ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>-->
             <div class="carousel-inner" role="listbox">
                 <!-- Slide One - Set the background image for this slide in the line below -->
                 <div class="carousel-item active" style="background-image: url('assets/images/banner.jpg');">
                     <canvas id="canvas"></canvas>
                     <div class="carousel-caption">
                         <p class="banner-caption">Skinvita Clinic</p>
                         <h1>Providing Professional Care and Beauty Experiences</h1>
                         <a href="" class="btn-grad">Make An Appointment <i class="fa fa-long-arrow-right"
                                 aria-hidden="true"></i></a>
                     </div>
                 </div>

                 <!-- Slide Two - Set the background image for this slide in the line below -->
                 <div class="carousel-item" style="background-image: url('assets/images/banner2.jpg')">
                     <div class="carousel-caption">
                         <p class="banner-caption">Skinvita Clinic</p>
                         <h1>Providing Professional Care and Beauty Experiences</h1>
                         <a href="" class="btn-grad">Make An Appointment <i class="fa fa-long-arrow-right"
                                 aria-hidden="true"></i></a>
                     </div>
                 </div>

             </div>
             <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"><img src="{{asset('assets/images/ban-left-btn.png')}}"
                         class="img-fluid"></span>
                 <span class="sr-only">Previous</span>
             </a>
             <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"><img src="{{asset('assets/images/ban-right-btn.png')}}"
                         class="img-fluid"></span>
                 <span class="sr-only">Next</span>
             </a>
         </div>
     </section>
     <!-- Page Content -->

     <section id="banner-bottom">
         <div class="container-fluid p-0">
             <div class="row justify-content-center">
                 <div class="col-lg-12">
                     <img src="{{asset('assets/images/header-curve.png')}}" class="img-fluid">
                 </div>
             </div>
         </div>
     </section>

     <section id="care-section">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 text-center mb-lg-4">
                     <p class="sec-head">Taking Care of You</p>
                     <h2>Discover The Skinvita Difference</h2>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-3 col-md-6 mt-lg-5 mt-xl-5">
                     <img src="{{asset('assets/images/care-pic1.jpg')}}" class="img-fluid border-radius-15 w-100">
                     <h4>Expert Dermatologists</h4>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <img src="{{asset('assets/images/care-pic2.jpg')}}" class="img-fluid border-radius-15 w-100">
                     <h4>World-Class Technologies</h4>
                 </div>
                 <div class="col-lg-3 col-md-6 mt-lg-5 mt-xl-5">
                     <img src="{{asset('assets/images/care-pic3.jpg')}}" class="img-fluid border-radius-15 w-100">
                     <h4>Skilled Professionals</h4>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <img src="{{asset('assets/images/care-pic4.jpg')}}" class="img-fluid border-radius-15 w-100">
                     <h4>Centre of Excellence</h4>
                 </div>
             </div>





         </div>
     </section>

     <section id="hm-about-section">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 text-center mb-lg-4">
                     <p class="sec-head">We Are Committed to Providing Our Clients Stunning Beauty Services</p>
                     <h2>Our Skin & Hair Stylists Are Ready When You Are</h2>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-6 pr-lg-5 pr-xl-5">
                     <img src="{{asset('assets/images/wel-pic.png')}}" class="img-fluid w-100">
                 </div>
                 <div class="col-lg-6 align-self-center">
                     <h2>For Expert Skin Care - Visit Skinvita Clinic Today</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt ipsum. Praesent
                         sodales vulputate sapien, a iaculis dui molestie sed.</p>
                     <a href="#" class="rm-btn-dark">know more about us</a>
                     <a href="#" class="rm-btn-light ml-lg-3">book now</a>

                 </div>
             </div>
         </div>
     </section>


     <section id="service-section">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 text-center mb-lg-4">
                     <p class="sec-head">Memorable Beauty Experience</p>
                     <h2>Offering Affordable Skincare Services</h2>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-3">
                     <div class="service-box border-radius-15">
                         <div class="service-box-img">
                             <img src="{{asset('assets/images/serv-icon.png')}}" class="img-fluid m-auto">
                         </div>
                         <div class="service-box-ctn">
                             <h4>Botox</h4>
                             <p>Clinic's In-House Pharmacy & Skincare Products</p>
                             <a href="botox.html" class="txt-btn">Learn More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="service-box border-radius-15">
                         <div class="service-box-img">
                             <img src="{{asset('assets/images/serv-icon.png')}}" class="img-fluid m-auto">
                         </div>
                         <div class="service-box-ctn">
                             <h4>Fillers</h4>
                             <p>Clinic's In-House Pharmacy & Skincare Products</p>
                             <a href="fillers.html" class="txt-btn">Learn More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="service-box border-radius-15">
                         <div class="service-box-img">
                             <img src="{{asset('assets/images/serv-icon.png')}}" class="img-fluid m-auto">
                         </div>
                         <div class="service-box-ctn">
                             <h4>Mesotherapy</h4>
                             <p>Clinic's In-House Pharmacy & Skincare Products</p>
                             <a href="mesotherapy.html" class="txt-btn">Learn More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="service-box border-radius-15">
                         <div class="service-box-img">
                             <img src="{{asset('assets/images/serv-icon.png')}}" class="img-fluid m-auto">
                         </div>
                         <div class="service-box-ctn">
                             <h4>Lasers</h4>
                             <p>Clinic's In-House Pharmacy & Skincare Products</p>
                             <a href="lasers.html" class="txt-btn">Learn More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="service-box border-radius-15">
                         <div class="service-box-img">
                             <img src="{{asset('assets/images/serv-icon.png')}}" class="img-fluid m-auto">
                         </div>
                         <div class="service-box-ctn">
                             <h4>Body Sculpting</h4>
                             <p>Clinic's In-House Pharmacy & Skincare Products</p>
                             <a href="body-sculpting.html" class="txt-btn">Learn More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="service-box border-radius-15">
                         <div class="service-box-img">
                             <img src="{{asset('assets/images/serv-icon.png')}}" class="img-fluid m-auto">
                         </div>
                         <div class="service-box-ctn">
                             <h4>Stem cell treatment</h4>
                             <p>Clinic's In-House Pharmacy & Skincare Products</p>
                             <a href="stem-cell-treatment.html" class="txt-btn">Learn More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="service-box border-radius-15">
                         <div class="service-box-img">
                             <img src="{{asset('assets/images/serv-icon.png')}}" class="img-fluid m-auto">
                         </div>
                         <div class="service-box-ctn">
                             <h4>Double Chin Reduction</h4>
                             <p>Clinic's In-House Pharmacy & Skincare Products</p>
                             <a href="double-chin-reduction.html" class="txt-btn">Learn More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="service-box border-radius-15">
                         <div class="service-box-img">
                             <img src="{{asset('assets/images/serv-icon.png')}}" class="img-fluid m-auto">
                         </div>
                         <div class="service-box-ctn">
                             <h4>Medifacial</h4>
                             <p>Clinic's In-House Pharmacy & Skincare Products</p>
                             <a href="medifacial.html" class="txt-btn">Learn More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="service-box border-radius-15">
                         <div class="service-box-img">
                             <img src="{{asset('assets/images/serv-icon.png')}}" class="img-fluid m-auto">
                         </div>
                         <div class="service-box-ctn">
                             <h4>Dermapen & Dermaroller</h4>
                             <p>Clinic's In-House Pharmacy & Skincare Products</p>
                             <a href="dermapen-and-dermaroller.html" class="txt-btn">Learn More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="service-box border-radius-15">
                         <div class="service-box-img">
                             <img src="{{asset('assets/images/serv-icon.png')}}" class="img-fluid m-auto">
                         </div>
                         <div class="service-box-ctn">
                             <h4>Hair Transplant</h4>
                             <p>Clinic's In-House Pharmacy & Skincare Products</p>
                             <a href="hair-transplant.html" class="txt-btn">Learn More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="service-box border-radius-15">
                         <div class="service-box-img">
                             <img src="{{asset('assets/images/serv-icon.png')}}" class="img-fluid m-auto">
                         </div>
                         <div class="service-box-ctn">
                             <h4>Skin Rejuvenation</h4>
                             <p>Clinic's In-House Pharmacy & Skincare Products</p>
                             <a href="skin-rejuvenation.html" class="txt-btn">Learn More</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="service-box border-radius-15">
                         <div class="service-box-img">
                             <img src="{{asset('assets/images/serv-icon.png')}}" class="img-fluid m-auto">
                         </div>
                         <div class="service-box-ctn">
                             <h4>PRP</h4>
                             <p>Clinic's In-House Pharmacy & Skincare Products</p>
                             <a href="prp.html" class="txt-btn">Learn More</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>




     <section id="doctor-section">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 text-center mb-lg-4">
                     <p class="sec-head">Dedicated Team</p>
                     <h2>Our Expert Doctors</h2>
                 </div>
             </div>
             <div class="row mb-lg-5">
                 <div class="col-lg-12">
                     <div id="demo-pranab">
                         <div id="owl-doctor" class="owl-carousel owl-theme">
                             <div class="item">
                                 <div class="doctor-box">
                                     <img src="{{asset('assets/images/doctor-img.jpg')}}" class="img-fluid">
                                     <h4>Dr. Caroline Grant</h4>
                                     <p>General Dermatology</p>
                                 </div>
                             </div>
                             <div class="item">
                                 <div class="doctor-box">
                                     <img src="{{asset('assets/images/doctor-img.jpg')}}" class="img-fluid">
                                     <h4>Dr. Caroline Grant</h4>
                                     <p>General Dermatology</p>
                                 </div>
                             </div>
                             <div class="item">
                                 <div class="doctor-box">
                                     <img src="{{asset('assets/images/doctor-img.jpg')}}" class="img-fluid">
                                     <h4>Dr. Caroline Grant</h4>
                                     <p>General Dermatology</p>
                                 </div>
                             </div>
                             <div class="item">
                                 <div class="doctor-box">
                                     <img src="{{asset('assets/images/doctor-img.jpg')}}" class="img-fluid">
                                     <h4>Dr. Caroline Grant</h4>
                                     <p>General Dermatology</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section id="patient-info-section">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 text-center mb-lg-4">
                     <p class="sec-head">Patient Information</p>
                     <h2>What To Expect When You Arrive For Appointment</h2>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-6 align-self-center pr-lg-5 pr-xl-5">
                     <h2>Feeling Good and Confident</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt ipsum. Praesent
                         sodales vulputate sapien, a iaculis dui molestie sed.</p>
                     <h4>01. Personal Consultation</h4>
                     <hr>
                     <h4 class="mb-lg-4 mb-xl-4">02. Gradual Transition</h4>
                     <a href="#" class="rm-btn-dark">know more about us</a>
                     <a href="#" class="rm-btn-light ml-lg-3">book now</a>
                 </div>
                 <div class="col-lg-6">
                     <img src="{{asset('assets/images/patient-info-img.png')}}" class="img-fluid w-100">
                 </div>
             </div>
         </div>
     </section>
     <section id="video-section">
         <div class="container-fluid">
             <div class="row">
                 <div class="col-lg-12 text-center mb-lg-4">
                     <p class="sec-head">Get Better Results</p>
                     <h2>Together We Can Easily Improve Your Look</h2>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-3 align-self-end">
                     <div class="oh-box border-radius-15">
                         <h3>Open Hours</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt ipsum.</p>
                         <ul class="oh-list">
                             <li><i class="fa fa-circle" aria-hidden="true"></i> Mon-Fri: 9 AM – 6 PM</li>
                             <li><i class="fa fa-circle" aria-hidden="true"></i> Saturday: 9 AM – 4 PM</li>
                             <li><i class="fa fa-circle" aria-hidden="true"></i> Sunday: Closed</li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-lg-6">
                     <div class="video-box">
                         <a class="youtube-link" youtubeid="75gr_tZbHG8"> <img src="{{asset('assets/images/video-bg.png')}}"
                                 class="img-fluid border-radius-15 w-100"> <span class="playbtn-img img-fluid"><img
                                     src="{{asset('assets/images/play-circle.png')}}"></span></a>

                     </div>
                 </div>
                 <div class="col-lg-3">
                     <div class="relax-box border-radius-15">
                         <h3>Relax Now</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt ipsum.</p>
                         <a href="" class="bookbtn">Book Now</a>
                     </div>
                 </div>
             </div>
         </div>
     </section>


     <section id="testimonial-section">
         <div class="container">
             <div class="row justify-content-end">
                 <div class="col-lg-6 pr-lg-5 pr-xl-5 mr-lg-5 mr-xl-5">
                     <p class="sec-head">Customer Reviews</p>
                     <h2>What Our Clients Say About Us</h2>
                     <div id="demo-pranab">
                         <div id="owl-testimonial" class="owl-carousel owl-theme">
                             <div class="item">
                                 <div class="testimonial-box">
                                     <div class="testimonial-content">
                                         <i class="fa fa-quote-left" aria-hidden="true"></i>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt
                                             ipsum. Praesent sodales vulputate sapien, a iaculis dui molestie sed.</p>
                                     </div>
                                     <div class="media">
                                         <img src="{{asset('assets/images/profile-pic.png')}}" class="img-fluid mr-3" alt="...">
                                         <div class="media-body align-self-center">
                                             <h5 class="mb-0">Jennifer S.</h5>
                                             <p class="mb-0">Florida</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="item">
                                 <div class="testimonial-box">
                                     <div class="testimonial-content">
                                         <i class="fa fa-quote-left" aria-hidden="true"></i>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt
                                             ipsum. Praesent sodales vulputate sapien, a iaculis dui molestie sed.</p>
                                     </div>
                                     <div class="media">
                                         <img src="{{asset('assets/images/profile-pic.png')}}" class="img-fluid mr-3" alt="...">
                                         <div class="media-body align-self-center">
                                             <h5 class="mb-0">Jennifer S.</h5>
                                             <p class="mb-0">Florida</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="item">
                                 <div class="testimonial-box">
                                     <div class="testimonial-content">
                                         <i class="fa fa-quote-left" aria-hidden="true"></i>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt
                                             ipsum. Praesent sodales vulputate sapien, a iaculis dui molestie sed.</p>
                                     </div>
                                     <div class="media">
                                         <img src="{{asset('assets/images/profile-pic.png')}}" class="img-fluid mr-3" alt="...">
                                         <div class="media-body align-self-center">
                                             <h5 class="mb-0">Jennifer S.</h5>
                                             <p class="mb-0">Florida</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="item">
                                 <div class="testimonial-box">
                                     <div class="testimonial-content">
                                         <i class="fa fa-quote-left" aria-hidden="true"></i>
                                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt
                                             ipsum. Praesent sodales vulputate sapien, a iaculis dui molestie sed.</p>
                                     </div>
                                     <div class="media">
                                         <img src="{{asset('assets/images/profile-pic.png')}}" class="img-fluid mr-3" alt="...">
                                         <div class="media-body align-self-center">
                                             <h5 class="mb-0">Jennifer S.</h5>
                                             <p class="mb-0">Florida</p>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
@endsection