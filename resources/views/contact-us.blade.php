@extends('Layouts.homeApp')

@section('title')
    Contact us
@stop

@section('body-class')
    class="background-body"
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 style="margin-top: 80px">Contact us</h1>
            </div>
        </div>

            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">

                        @if(count($errors))
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li> {{ $error }} </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ route('contact-us.store')  }}">

                            <input type="hidden" name="_method" value="POST">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="user_name" class="control-label">Username</label>
                                    <input id="user_name" type="text" class="form-control" name="user_name" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="email" class="control-label">Email</label>
                                    <input id="email" type="text" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="subject" class="control-label">Subject</label>
                                    <input id="subject" type="text" class="form-control" name="subject" autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="description" class="control-label">Description</label>
                                    <textarea id="description" class="form-control" name="description"> </textarea>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                                Save
                            </button>

                            <a class="btn btn-danger" href="{{ route('page.welcome') }}">
                                <i class="fa fa-ban" aria-hidden="true"></i>
                                Cancel
                            </a>
                        </form>
                    </div>
                </div>
            </div>
    </div>
@stop