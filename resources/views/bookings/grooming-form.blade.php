@extends('Layouts.homeApp')

@section('title')
    Grooming Appointment
@stop

@section('css')
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
@stop

@section('body-class')
    class="background-body"
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 style="margin-top: 80px"> Grooming Appointment</h1>
            </div>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">

                    @if(session('success_message'))
                        <div class="alert alert-success">
                            {{ session('success_message') }}
                        </div>
                    @endif

                    @if(count($errors))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('saveGroomingForm') }}">

                        <input type="hidden" name="_method" value="POST">

                        {{ csrf_field() }}


                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="grooming_subject" class="control-label">Subject</label>
                                <input id="grooming_subject" type="text" class="form-control" name="grooming_subject">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="grooming_description" class="control-label">Description</label>
                                <textarea id="grooming_description" class="form-control" name="grooming_description"> </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="grooming_date" class="control-label">Date</label>
                                <input id="grooming_date" type="text" class="form-control form_datetime" name="grooming_date" placeholder="Click to select a date">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-wrench" aria-hidden="true"></i>
                            Send
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

@section('js')
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script type="text/javascript">
        $(".form_datetime").datetimepicker({
            format: "dd MM yyyy - hh:ii",
            autoclose: true,
            todayBtn: true,
            startDate: "2013-02-14 10:00",
            minuteStep: 10
        });
    </script>
@stop