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

<section id="inn-section" class="pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <img src="{{asset('assets/images/menu-icon.png')}}" class="img-fluid m-auto pb-3" />
                <p class="spc-txt mb-2">Dedicated Team</p>
                <h2>Our Expert Doctors</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut
                    tincidunt ipsum. Praesent sodales vulputate sapien, a iaculis dui
                    molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Nullam ut tincidunt ipsum. Praesent sodales vulputate
                    sapien, a iaculis dui molestie sed. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit. Nullam ut tincidunt ipsum. Praesent
                    sodales vulputate sapien, a iaculis dui molestie sed.
                </p>
            </div>
        </div>
        <div class="row my-lg-5">
            @foreach($doctors as $doctor)
            <div class="col-lg-4">

                <div class="doctor-box boc-inn-box">
                    <img src="{{ asset('storage/' . $doctor->image) }}" class="img-fluid" />
                    <h4>Dr. {{$doctor->name}}</h4>
                    <p>{{$doctor->specialist}}</p>
                    <a
                        href=""
                        class="bookbtn"
                        data-toggle="modal"
                        data-target="#exampleModal{{$doctor->id}}">Read More</a>
                    <div
                        class="modal fade"
                        id="exampleModal{{$doctor->id}}"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button
                                        type="button"
                                        class="close"
                                        data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 text-left">
                                                <h3 class="mb-0">{{$doctor->name}}</h3>
                                                <p>{{$doctor->specialist}}</p>
                                            </div>
                                            <div class="col-lg-12">
                                                <img
                                                    src="{{ asset('storage/' . $doctor->image) }}"
                                                    class="img-fluid w-100 mb-3 inn-doc-pic"
                                                    alt="..." />
                                            </div>
                                            <div class="col-lg-12 text-left p-3">
                                                <h4>{{$doctor->title}}</h4>
                                                <p>
                                                    {{$doctor->description}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection