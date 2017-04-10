@extends('Layouts.homeApp')

@section('title')
    Welcome
@stop

@section('css')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
@stop

    @section('content')
        <!-- Slider main container -->
    <div class="swiper-container main-slider" id="myCarousel">
        <div class="swiper-wrapper">
            <div class="swiper-slide slider-bg-position" style="background:url('/img/dog.jpg')" data-hash="slide1">
                <h2>Animals are gifts from god.</h2>
            </div>
            <div class="swiper-slide slider-bg-position" style="background:url('/img/cat.jpg')" data-hash="slide2">
                <h2>Men's best friend.</h2>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>
        <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>
    </div>

    <!-- Benefits
        ================================================== -->
    <section class="service-sec" id="benefits">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Welcome to Pet's Nest</h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 text-sm-center service-block">
                            <i class="fa fa-heart" style="font-size:18px;" aria-hidden="true"></i>
                            <h3>Healthier and happier</h3>
                            <p>Our pets do so much more than simply make us happy, they provide numerous health benefits
                                such as improving self-esteem.</p>
                        </div>
                        <div class="col-md-6 text-sm-center service-block">
                            <i class="fa fa-shield" style="font-size:18px;" aria-hidden="true"></i>
                            <h3>Vaccinated</h3>
                            <p>To provide the best companion for you, all our beloved pest are already vaccinated, dewormed
                                to provide the bes to you.</p>
                        </div>
                        <div class="col-md-6 text-sm-center service-block">
                            <i class="fa fa-flag" style="font-size:18px;" aria-hidden="true"></i>
                            <h3>Pure breed</h3>
                            <p>We aime to provide the best pet that you wish for, not only are our little one vaccinated but
                            also they are from pure breeding.</p>
                        </div>
                        <div class="col-md-6 text-sm-center service-block">
                            <i class="fa fa-star" style="font-size:18px;" aria-hidden="true"></i>
                            <h3>Docile and gentle </h3>
                            <p>They give us so much that it is only fair that we return this unconditional love for them
                                with nothing but the very best products.</p>
                        </div>

                        <div class="col-md-6 text-sm-center service-block">
                            <i class="fa fa-certificate" style="font-size:18px;" aria-hidden="true"></i>
                            <h3>Services</h3>
                            <p>We provide different type of services, we treat and groom your pets for you. We take care of
                            each and one pet as our own.</p>
                        </div>
                        <div class="col-md-6 text-sm-center service-block">
                            <i class="fa fa-home" style="font-size:18px;" aria-hidden="true"></i>
                            <h3>The Shop</h3>
                            <p>Right now we are current at Port Louis but soon we are going to create different outlet of our
                            store everywhere so we can be near you.</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4"> <img src="/img/macaw.jpg" class="img-fluid" /> </div>
            </div>
            <!-- /.row -->
        </div>
    </section>

    <!-- About
        ================================================== -->
    <section class="about-sec parallax-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2><small style="color: black;">Who We Are</small>About<br>Us</h2>
                </div>
                <div class="col-md-4">
                    <p>We are an online pet shop but also have one store situated in the heart of Port Louis. We provide many facilities
                    and services such as buying and ordering new pets as per your likes.</p>
                    <p>We aim in providing the best companion ideal for you. We spoil them with pet care products like nutritious
                        foods and tasty snacks to help them grow healthy and strong.
                        Surprise your pet with fun gifts like some new toys or a comfy bed which are also available at the store. </p>
                </div>
                <div class="col-md-4">
                    <p>Animals have a much better attitude to life and death than we do. They know when their time has come.
                        We are the ones that suffer when they pass, but it's a healing kind of grief that enables us to deal with
                        other griefs that are not so easy to grab hold of.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <div class="footer">
        @include('Layouts.footer')
    </div>

@stop

@section('js')
    <script src="{{ asset('js/welcome.js') }}"></script>
@stop


