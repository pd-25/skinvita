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
                <p class="spc-txt mb-2">Get In Touch With Us</p>
                <h2>Contact Us</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut
                    tincidunt ipsum. Praesent sodales vulputate sapien, a iaculis dui
                    molestie sed. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form
                    id="contact-form"
                    method="post"
                    action="contact-usc.php"
                    role="form">
                    <div class="controls">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input
                                        id="form_name"
                                        type="text"
                                        name="form_name"
                                        class="form-control"
                                        placeholder="First Name"
                                        required="required"
                                        data-error="Firstname is required." />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input
                                        id="form_lastname"
                                        type="text"
                                        name="form_lastname"
                                        class="form-control"
                                        placeholder="Last Name"
                                        required="required"
                                        data-error="Lastname is required." />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input
                                        id="form_email"
                                        type="email"
                                        name="form_email"
                                        class="form-control"
                                        placeholder="Email"
                                        required="required"
                                        data-error="Valid email is required." />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input
                                        id="form_phone"
                                        type="tel"
                                        name="form_phone"
                                        class="form-control"
                                        placeholder="Phone no." />
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <input
                                    id="form_subject"
                                    type="text"
                                    name="form_subject"
                                    class="form-control"
                                    placeholder="Subject"
                                    required="required"
                                    data-error="Subject is required." />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea
                                        id="form_message"
                                        name="form_message"
                                        class="form-control"
                                        placeholder="Message..."
                                        rows="4"
                                        required="required"
                                        data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <input
                                    type="submit"
                                    class="rm-btn-dark"
                                    value="Send Message" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <div class="address-box">
                    <h4>Our Address</h4>
                    <p>
                        4TH FLOOR, 39, Shakespeare Sarani, Mullick Bazar, Park Street
                        area, Kolkata, West Bengal 700017, India
                    </p>
                    <h4>Phone</h4>
                    <p>+91 33 4601 3334</p>
                    <h4>Email</h4>
                    <p>info@skinvitaclinic.com</p>
                    <h4>Let's Connect With Us</h4>
                    <ul class="footer-social mt-lg-3">
                        <li>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-2 mt-lg-5">
            <div class="col-lg-12">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.9229151686336!2d88.35615507529967!3d22.544560179511734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027762bc1a76d5%3A0x17d87843f0eb292!2sSkinvita%20Clinic!5e0!3m2!1sen!2suk!4v1752077538873!5m2!1sen!2suk"
                    width="100%"
                    height="350"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

@endsection