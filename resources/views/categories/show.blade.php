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
                                            <p> Rs {{ $product->price }} </p>
                                            {!! $product->description !!}
                                            <p>
                                            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                                <input type="hidden" name="cmd" value="_s-xclick">
                                                <input type="hidden" name="hosted_button_id" value="Y4CL2SMGESEN2">
                                                <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                                <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                            </form>
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
                    <div class="col-md-9">
                        @include('categories.no-product-found')
                    </div>
                @endif
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

    </div>
    <!--/.container-->
@stop
