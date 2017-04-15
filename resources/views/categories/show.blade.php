@extends('Layouts.homeApp')

@section('title')
    {{ $category->name }}
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 style="text-align: center">{{ $category->name }}</h1>
            </div>
        </div>

        <hr/>

        <div class="row">
            <div class="col-md-3">
                @include('categories.partials._sidebar-related-categories')
            </div>
            <!--/.col-->

            <div class="col-md-9">
                @if(! $products->isEmpty())
                    @foreach($products->chunk(3) as $productsRow)
                        <div class="row">
                            @foreach($productsRow as $product)
                                <div class="col-md-4 hero-feature">
                                    <div class="thumbnail">
                                        <img src="{{ $product->image_path }}" alt="{{ $product->name }}">
                                        <div class="caption">
                                            <h3>
                                                {{ $product->name }}
                                            </h3>
                                            {!! $product->description !!}
                                            <p>
                                                <a href="#" class="btn btn-primary">Buy Now!</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/.col-->
                            @endforeach
                        </div>
                        <!--/.row-->
                    @endforeach
                    @if($products->hasPages())
                        <div style="text-align: center;">
                            {!! $products->render() !!}
                        </div>
                    @endif
                @else

                @endif
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

    </div>
    <!--/.container-->
@stop
