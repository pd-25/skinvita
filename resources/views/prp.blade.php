@extends('layout.main')
@section('content')
<section id="banner-slider" class="inn-banner-slider">
    <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div
                class="carousel-item active"
                style="background-image: url('assets/images/inn-banner.jpg')">
                <canvas id="canvas"></canvas>
                <div class="carousel-caption"></div>
            </div>
        </div>
    </div>
</section>
<!-- Page Content -->

<section id="banner-bottom">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <img src="{{asset('assets/images/header-curve.png')}}" class="img-fluid" />
            </div>
        </div>
    </div>
</section>

<section id="inn-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <img src="{{asset('assets/images/menu-icon.png')}}" class="img-fluid m-auto pb-3" />
                <p class="spc-txt mb-2">Our Service</p>
                <h2>PRP</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
                    pulvinar blandit dolor non dignissim turpis purus, rutrum id
                    tellus vulputate, pulvinar accumsan elit eu lacinia libero, in
                    semper nulla. Quisque at dui euismod nulla imperdiet mollis
                    dignissim, est ac pellentesque faucibus, quam urna pharetra
                    turpis, nec semper nisl mi sed mi mattis nunc a ligula gravida,
                    sed dapibus erat dignissim. Integer eu odio eget justo feugiat
                    ultrices non sed nulla. Donec mollis nunc eleifend tellus rutrum,
                    facilisis placerat est vehicula. Nam consequat malesuada
                    pellentesque. Vivamus sit amet justo justo. Donec nec sem non
                    lacus suscipit fringilla. Vivamus mattis neque in orci tempor
                    rhoncus.
                </p>
                <a href="" class="btn-grad">Make An Appointment
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="row my-lg-5 video-bg">
            <div class="col-lg-6 align-self-center">
                <h3>
                    Praesent sodales vulputate sapien, a iaculis dui molestie sed
                </h3>
                <p class="mb-0">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut
                    tincidunt ipsum. Praesent sodales vulputate sapien, a iaculis dui
                    molestie sed. Praesent sodales vulputate sapien, a iaculis dui sit
                    amet, consectetur adipiscing elit.
                </p>
                <a href="" class="bookbtn mt-lg-4">Visit Channel
                    <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-6">
                <iframe
                    width="100%"
                    height="280"
                    class="border-radius-15"
                    src="https://www.youtube.com/embed/75gr_tZbHG8"
                    title="We Are Skinvita Clinic"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('assets/images/prp-img.jpg')}}" class="img-fluid border-radius-15" />
            </div>

            <div class="col-lg-6 align-self-center">
                <h3>
                    Praesent sodales vulputate sapien, a iaculis dui molestie sed
                </h3>
                <p class="mb-0">
                    Donec ac ligula elit. Class aptent taciti sociosqu ad litora
                    torquent per conubia nostra, per inceptos himenaeos. In et eros
                    tincidunt leo luctus vestibulum eget eget neque. Proin fringilla
                    tortor varius magna molestie, eu sagittis arcu rutrum. Proin
                    interdum lacus sed sem rutrum sagittis. Aenean tincidunt odio mi,
                    id venenatis enim tempus in. Sed lacus eros, facilisis vitae
                    sodales sit amet, hendrerit ut orci. Sed faucibus vulputate arcu
                    quis vehicula. Vivamus ut molestie mi. Etiam vel erat rhoncus,
                    venenatis neque sit amet, bibendum nisl.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection