@extends('Layouts.homeApp')

@section('title')
    Dogs food
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 style="text-align: center">Dog's Food</h1>
            </div>
        </div>

        <hr/>

        <div class="row">
            <div class="col-md-3">
                @include('dog-category.sidebarmenu')
            </div>


            <div class="col-md-3 hero-feature">
                <div class="thumbnail">
                    <img src="/img/dog-food.jpg" alt="">
                    <div class="caption">
                        <h3>Dentastix</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3  hero-feature">
                <div class="thumbnail">
                    <img src="/img/dog-food-1.jpg" alt="">
                    <div class="caption">
                        <h3>Whole-earth</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3  hero-feature">
                <div class="thumbnail">
                    <img src="/img/dog-food-2.jpg" alt="">
                    <div class="caption">
                        <h3>Pedigree</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <p>
                            <a href="#" class="btn btn-primary">Buy Now!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
