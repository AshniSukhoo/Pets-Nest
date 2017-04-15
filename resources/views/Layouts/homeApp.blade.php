<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'Pets Nest' }} - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    @yield('css')
    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!}
    </script>

</head>

<body @section('body-class') class="main-body" @show>

@include('Layouts.navbar')

@yield('content')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@yield('js')

</body>
</html>
