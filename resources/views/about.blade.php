@extends('layout.main')
@section('content')
    <section id="banner-slider" class="inn-banner-slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('assets/images/inn-banner.jpg');">
                    <canvas id="canvas"></canvas>
                    <div class="carousel-caption">

                    </div>
                </div>
            </div>
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

    <section id="inn-section" class="pb-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <img src="{{asset('assets/images/menu-icon.png')}}" class="img-fluid m-auto pb-3">
                    <p class="spc-txt mb-2">About Skinvita Clinic</p>
                    <h2>Our Skin & Hair Stylists Are Ready When You Are</h2>
                    <img src="{{asset('assets/images/about-us-pic.jpg')}}" class="img-fluid border-radius-15 mb-4">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt ipsum. Praesent
                        sodales vulputate sapien, a iaculis dui molestie sed. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nullam ut tincidunt ipsum. Praesent sodales vulputate sapien, a iaculis dui
                        molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt
                        ipsum. Praesent sodales vulputate sapien, a iaculis dui molestie sed.</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt ipsum. Praesent
                        sodales vulputate sapien, a iaculis dui molestie sed. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nullam ut tincidunt ipsum.</p>
                    <a href="" class="btn-grad">Make An Appointment <i class="fa fa-long-arrow-right"
                            aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="row my-lg-5 about-bg">
                <div class="col-lg-7">
                    <h3>Praesent sodales vulputate sapien, a iaculis dui molestie sed</h3>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt ipsum.
                        Praesent sodales vulputate sapien, a iaculis dui molestie sed. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Nullam ut tincidunt ipsum. Praesent sodales vulputate sapien, a
                        iaculis dui molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut
                        tincidunt ipsum. Praesent sodales vulputate sapien, a iaculis dui molestie sed.</p>
                </div>
            </div>

        </div>

        <div class="container-fluid">
            <div class="row black-bg justify-content-start">
                <div class="col-lg-6 p-0">
                    <div class="mainSection">
                        <div id="one" class="bal-container">
                            <div class="bal-after">
                                <img src="{{asset('assets/images/after.jpg')}}">
                                <div class="bal-afterPosition afterLabel">
                                    After
                                </div>
                            </div>

                            <div class="bal-before">
                                <div class="bal-before-inset">
                                    <img src="{{asset('assets/images/before.jpg')}}">
                                    <div class="bal-beforePosition beforeLabel">
                                        Before
                                    </div>
                                </div>
                            </div>

                            <div class="bal-handle">
                                <span class=" handle-left-arrow"></span>
                                <span class="handle-right-arrow"></span>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="col-lg-5 align-self-center ml-lg-5">
                    <h3>Praesent sodales vulputate sapien, a iaculis dui molestie sed</h3>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt ipsum.
                        Praesent sodales vulputate sapien, a iaculis dui molestie sed. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Nullam ut tincidunt ipsum. Praesent sodales vulputate sapien, a
                        iaculis dui molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut
                        tincidunt ipsum. Praesent sodales vulputate sapien, a iaculis dui molestie sed.</p>
                </div>
            </div>

            <div class="row light-bg justify-content-end">
                <div class="col-lg-5 align-self-center mr-lg-5">
                    <h3>Praesent sodales vulputate sapien, a iaculis dui molestie sed</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt ipsum. Praesent
                        sodales vulputate sapien, a iaculis dui molestie sed. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Nullam ut tincidunt ipsum. Praesent sodales vulputate sapien, a iaculis dui
                        molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut tincidunt
                        ipsum. Praesent sodales vulputate sapien, a iaculis dui molestie sed.</p>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="mainSection">

                        <div id="two" class="bal-container">
                            <div class="bal-after">
                                <img src="{{asset('assets/images/after_m.jpg')}}">
                                <div class="bal-afterPosition afterLabel">
                                    After
                                </div>
                            </div>

                            <div class="bal-before">
                                <div class="bal-before-inset">
                                    <img src="{{asset('assets/images/before_m.jpg')}}">
                                    <div class="bal-beforePosition beforeLabel">
                                        Before
                                    </div>
                                </div>
                            </div>

                            <div class="bal-handle">
                                <span class=" handle-left-arrow"></span>
                                <span class="handle-right-arrow"></span>
                            </div>

                        </div>


                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
